<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Assuming you properly sanitize and validate these inputs
    $eventId = $_GET['event_id'];
    $eventName = $_GET['eventTitle'];
    $eventType = $_GET['eventtype'];
    $eventDate = $_GET['eventDate'];
    $eventTime = $_GET['eventTime'];
    $description = $_GET['eventdesc'];
    $location = $_GET['eventlocation'];

    $stmt = $conn->prepare("UPDATE calendarEvents SET event_name=?, event_type=?, event_date=?, event_time=?, description=?, location=? WHERE event_id=?");
    $stmt->bind_param("ssssssi", $eventName, $eventType, $eventDate, $eventTime, $description, $location, $eventId);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Event updated successfully.']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to update the event.']);
    }

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed.']);
}
?>
