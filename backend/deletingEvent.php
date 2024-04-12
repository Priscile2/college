<?php
// Include database connection file or establish a database connection
include 'connection.php';

// Check if the event_id is provided
if (isset($_GET['event_id'])) {
    $eventId = $_GET['event_id'];

    // Prepare a DELETE statement to remove the event from the database
    $stmt = $conn->prepare("DELETE FROM calendarEvents WHERE event_id = ?");
    $stmt->bind_param("i", $eventId);

    // Execute the statement
    if ($stmt->execute()) {
        // Check if any rows were affected
        if ($stmt->affected_rows > 0) {
            echo json_encode(["message" => "Event deleted successfully"]);
        } else {
            // If no rows were affected, the event might not exist
            echo json_encode(["message" => "No event found with the specified ID"]);
        }
    } else {
        // If statement execution failed, return an error message
        echo json_encode(["message" => "Failed to delete the event"]);
    }

    // Close statement
    $stmt->close();
} else {
    // If event_id is not provided, return an error message
    echo json_encode(["message" => "Event ID is required"]);
}

// Close database connection
$conn->close();
?>
