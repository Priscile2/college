<?php
// Include your database connection script
include 'connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from POST request
    $userId = 1; // Assuming a static user_id for demonstration; in a real application, this would likely come from session data or authentication context
    $eventName = $_POST['eventTitle'] ?? null;
    $eventType = $_POST['eventtype'] ?? null;
    $eventDate = $_POST['eventDate'] ?? null;
    $eventTime = $_POST['eventTime'] ?? null;
    $description = $_POST['eventdesc'] ?? null;
    $location = $_POST['eventlocation'] ?? null;

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO calendarEvents (user_id, event_name, event_date, event_type, description, event_time, location) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bind_param("issssss", $userId, $eventName, $eventDate, $eventType, $description, $eventTime, $location);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        // Send success response
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Event added successfully.']);
    } else {
        // Send error response
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Failed to add the event.']);
    }

    // Close statement
    $stmt->close();
} else {
    // If not a POST request, send a 405 Method Not Allowed response
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Method not allowed.']);
}

// Close database connection
$conn->close();
?>
