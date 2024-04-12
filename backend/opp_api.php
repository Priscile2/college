<?php
include 'connection.php';

// Assuming you have a way to get the authenticated student's ID
$opportunity_id =$_GET['opportunityId'] ?? null;
$action = $_GET['action'] ?? null;


$user_id = 1; // Assuming a default user ID for testing purposes

switch ($action) {
    case 'list':
        listOpportunities($conn);
        break;
    case "pursue":
        pursueOpportunity($conn, $opportunity_id, $user_id);
        exit;
    default:
        echo json_encode(['error' => 'Invalid action']);
}


function listOpportunities($conn)
{
    $query = "SELECT * FROM Opportunities";
    $result = $conn->query($query);

    $opportunities = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $opportunities[] = $row;
        }
        echo json_encode($opportunities);
    } else {
        echo json_encode(['message' => 'No opportunities found']);
    }
}

function pursueOpportunity($conn, $opportunity_id, $user_id)
{
    // Check if the opportunity has already been pursued by the user
    // if (isOpportunityAlreadyPursued($conn, $opportunity_id, $user_id)) {
    //     echo json_encode(['error' => 'You have already pursued this opportunity.']);
    //     return;
    // }

    // Fetch details of the opportunity
    $opportunityDetails = fetchOpportunityDetails($conn, $opportunity_id);
    if (!$opportunityDetails) {
        echo json_encode(['error' => 'Opportunity not found']);
        return;
    }

    // Insert the opportunity into the engagements table
    $insertResult = insertEngagement($conn, $opportunityDetails, $user_id);
    if ($insertResult['success']) {
        echo json_encode(['success' => 'Opportunity successfully pursued.', 'engagement_id' => $insertResult['engagement_id']]);
    } else {
        echo json_encode(['error' => 'Failed to pursue opportunity.', 'reason' => $insertResult['error']]);
    }
}

function fetchOpportunityDetails($conn, $opportunity_id)
{
    $query = "SELECT * FROM Opportunities WHERE opportunity_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $opportunity_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}


function insertEngagement($conn, $opportunityDetails, $user_id)
{
    $query = "INSERT INTO engagements (user_id, engagement_name, engagement_type, opportunity_id, date, time, location) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param(
        "ississs",
        $user_id,
        $opportunityDetails['opportunity_name'],
        'Opportunity',
        $opportunityDetails['opportunity_id'],
        $opportunityDetails['deadline'],
        date('H:i:s'),
        $opportunityDetails['location']
    );
    if ($stmt->execute()) {
        return ['success' => true, 'engagement_id' => $conn->insert_id];
    } else {
        return ['success' => false, 'error' => $conn->error];
    }
}

function isOpportunityAlreadyPursued($conn, $opportunity_id, $user_id)
{
    $query = "SELECT * FROM engagements WHERE opportunity_id = ? AND user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $opportunity_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->num_rows > 0;
}

$conn->close();
