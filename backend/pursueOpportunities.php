<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Content-Type: application/json');


include 'connection.php';

$rawData = file_get_contents("php://input");
$decodedData = json_decode($rawData, true);
$user_id = 1; // Assuming a fixed user ID for demonstration purposes
$opportunity_id = isset($decodedData['opportunityId']) ? intval($decodedData['opportunityId']) : 0;

echo $opportunity_id;

if (!$opportunity_id) {
    echo json_encode(['error' => 'Invalid opportunity ID.']);
    exit;
}

if (isOpportunityAlreadyPursued($conn, $user_id, $opportunity_id)) {
    echo json_encode(['error' => 'You have already pursued this opportunity.']);
    exit;
}

$opportunityDetails = fetchOpportunityDetails($conn, $opportunity_id);
if (!$opportunityDetails) {
    echo json_encode(['error' => 'Failed to fetch opportunity details.']);
    exit;
}

// Extract details from $opportunityDetails
$engagement_name = $opportunityDetails['opportunity_name'];
$engagement_type = "Opportunity";
$date = new DateTime($opportunityDetails['deadline']);
$time = $date->format('Y-m-d H:i:s');
$location = $opportunityDetails['location'];
$description = "Deadline for " . $engagement_name . " opportunity.";

// Attempt to add to engagements and calendar events
$addedToEngagements = addEngagement($conn, $user_id, $opportunity_id, $engagement_name, $engagement_type, $location, $date->format('Y-m-d'), $time);
$addedToCalendarEvents = addCalendarEventForOpportunityDeadline($conn, $user_id, $description, $opportunity_id, $engagement_name, $date->format('Y-m-d'), $time, $location);

if ($addedToEngagements && $addedToCalendarEvents) {
    echo json_encode(['success' => 'Opportunity successfully added to your engagements and calendar.']);
} else {
    echo json_encode(['error' => 'Failed to add engagement or calendar event.']);
}

$conn->close();

function fetchOpportunityDetails($conn, $opportunity_id) 
{
    $query = "SELECT opportunity_name, deadline, location FROM Opportunities WHERE opportunity_id = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        // Correctly handling the error case
        error_log('Failed to prepare statement: ' . $conn->error);
        return false;
    }

    $stmt->bind_param("i", $opportunity_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        return $row; // Return the fetched details as an associative array
    } else {
        // Handle case where no data was found
        return false;
    }
}

function addEngagement($conn, $user_id, $opportunity_id, $engagement_name, $engagement_type, $location, $date, $time) {
    $query = "INSERT INTO Engagements (user_id, engagement_name, engagement_type,opportunity_id,location, date, time ) VALUES (?,?, ?, ?, ?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ississs", $user_id, $engagement_name, $engagement_type, $opportunity_id, $location, $date, $time);
    $stmt->execute();
    // Check for successful insertion

    if ($stmt->affected_rows > 0) {
        return true; // Success
    } else {
        return false; // Insert failed
    }
}

function addCalendarEventForOpportunityDeadline($conn, $user_id, $description, $opportunity_id, $opportunity_name, $date, $time, $location) {
    if (isOpportunityAlreadyPursued($conn, $opportunity_id)) {
        echo json_encode(['error' => 'You have already pursued this opportunity.']);
        return;
    }

    // Assume fetching the opportunity's details returns an associative array with opportunity_name
    global $opportunityDetails;
    //$desc = $opportunityDetails['description'];
    $event_name = "Deadline: " . $opportunity_name;
    $description = "Deadline for " . $opportunity_name . " opportunity.";
    $event_type = "Deadline";

    $date = $opportunityDetails['dateline'];

    $date = new DateTime($date);
    $date->setTime(23, 59, 00);
    $location = $opportunityDetails['location'];

    $time = $date->format('Y-m-d H:i:s');

    $query = "INSERT INTO CalendarEvents (user_id, event_name, event_date, event_type, description, opportunity_id, date, time, location) VALUES (?, ?, ?, ?, ?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issssisss", $user_id, $event_name, $event_type, $description, $opportunity_id, $date, $time, $location);
    if ($stmt->execute()) {
        return true; // Success
    } else {
        return false; // Insert failed
    }
}

function isOpportunityAlreadyPursued($conn, $user_id, $opportunity_id) {
    // Check if the opportunity is already in the student's engagements
    $query = "SELECT * FROM Engagements WHERE opportunity_id = $opportunity_id";
    $result = $conn->query($query);

    return $result->num_rows > 0;
}

$conn->close();