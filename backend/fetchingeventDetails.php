<?php
session_start();
$student_id= $_SESSION['student_id'] ;


// Include database connection
include 'connection.php';

// Get event ID from the query string
$event_id = isset($_GET['event_id']) ? $_GET['event_id'] : '';

// Prepare and execute query to fetch event details
if ($event_id != '') {
    $stmt = $conn->prepare("SELECT * FROM events WHERE event_id = ?");
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($event = $result->fetch_assoc()) {
        // Return event details as JSON
        echo json_encode($event);
    } else {
        // No event found
        echo json_encode(array("error" => "Event not found."));
    }

    $stmt->close();
} else {
    // Event ID not provided
    echo json_encode(array("error" => "Event ID is required."));
}

$conn->close();
?>
