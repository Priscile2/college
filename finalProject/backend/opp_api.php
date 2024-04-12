<?php
include 'connection.php';

// Assuming you have a way to get the authenticated student's ID
$student_id = $_GET['student_id'] ?? null;

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'list':
        listOpportunities($conn);
        break;
    case 'pursue':
        $opportunity_id = $_GET['opportunity_id'] ?? null;
        pursueOpportunity($conn, $student_id, $opportunity_id);
        break;
    default:
        echo json_encode(['error' => 'No action specified']);
}

function listOpportunities($conn) {
    $query = "SELECT * FROM Opportunities";
    $result = $conn->query($query);

    $opportunities = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $opportunities[] = $row;
        }
        echo json_encode($opportunities);
    } else {
        echo json_encode(['message' => 'No opportunities found']);
    }
}
function fetchOpportunityDetails($conn, $opportunity_id) {
    $query = "SELECT opportunity_name, deadline FROM Opportunities WHERE opportunity_id = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        // Handle error, e.g., log it or return false
        error_log('Failed to prepare statement: ' . $conn->error);
        return false;
    }

    $stmt->bind_param("i", $opportunity_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        return $row; // Return the fetched details as an associative array
    } else {
        // Handle case where no data was found, e.g., return false
        return false;
    }
}

function pursueOpportunity($conn, $student_id, $opportunity_id) {
    // Check if the opportunity is already pursued by the user
    if (isOpportunityAlreadyPursued($conn, $student_id, $opportunity_id)) {
        echo json_encode(['error' => 'You have already pursued this opportunity.']);
        return;
    }

    // Assuming fetchOpportunityDetails retrieves opportunity name and deadline
    $opportunityDetails = fetchOpportunityDetails($conn, $opportunity_id);
    if (!$opportunityDetails) {
        echo json_encode(['error' => 'Opportunity details could not be retrieved.']);
        return;
    }

    // Add engagement entry
    $engagementAdded = addEngagement(
        $conn,
        $student_id,
        $opportunity_id,
        $opportunityDetails['opportunity_name'],
        'Opportunity' // Assuming 'Opportunity' is a placeholder for the actual engagement type
    );

    // Proceed to add calendar event if the engagement entry was added successfully
    if ($engagementAdded) {
        $eventAdded = addCalendarEventForOpportunityDeadline(
            $conn,
            $student_id,
            $opportunity_id,
            $opportunityDetails['deadline'],
            $opportunityDetails['opportunity_name']
        );

        if ($eventAdded) {
            echo json_encode(['success' => 'Opportunity successfully added to your engagements and deadline set in your calendar.']);
        } else {
            // Handle the scenario where engagement was added but calendar event failed
            echo json_encode(['error' => 'Engagement added, but failed to set deadline in calendar.']);
        }
    } else {
        echo json_encode(['error' => 'Failed to add engagement.']);
    }
}



// Insert logic here to add opportunity to student's engagements
function addEngagement($conn, $user_id, $opportunity_id, $engagement_name, $engagement_type) {
    $query = "INSERT INTO Engagements (user_id, opportunity_id, engagement_name, engagement_type, engagement_status, start_date, end_date, total_hours, reflection) VALUES (?, ?, ?, ?, 'Pending', NULL, NULL, 0, '')";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iiss", $user_id, $opportunity_id, $engagement_name, $engagement_type);
    $stmt->execute();
    // Check for successful insertion

    if ($stmt->affected_rows > 0) {
        return true; // Success
    } else {
        return false; // Insert failed
    }
}

function isOpportunityAlreadyPursued($conn, $student_id, $opportunity_id) {
    // Check if the opportunity is already in the student's engagements
    $query = "SELECT * FROM Engagements WHERE user_id = $student_id AND opportunity_id = $opportunity_id";
    $result = $conn->query($query);
    
    return $result->num_rows > 0;
}



$conn->close();
?>