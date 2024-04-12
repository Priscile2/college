<?php
session_start();  // Start the session at the very beginning

include 'connection.php';

// Check if the user is logged in and a user ID is stored in the session
if (!isset($_SESSION['user_id'])) {
    // User not logged in, redirect to login page or handle accordingly
    http_response_code(403); // Forbidden
    echo json_encode(['error' => 'Not authenticated. Please log in.']);
    exit;
}

$userId = $_SESSION['user_id'];  // Retrieve user ID from session


$eventName = $_POST['eventTitle'] ?? null;
$eventType = $_POST['eventtype'] ?? null;
$eventDate = $_POST['eventDate'] ?? null;
$eventTime = $_POST['eventTime'] ?? null;
$endTime = $_POST['endTime'] ?? null;
$description = $_POST['eventdesc'] ?? null;
$location = $_POST['eventlocation'] ?? null;

$stmt = $conn->prepare("INSERT INTO CalendarEvents (user_id, event_name, event_date, event_type, description, event_time, event_end_time, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssss", $userId, $eventName, $eventDate, $eventType, $description, $eventTime, $endTime, $location);

if ($stmt->execute()) {
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Event added successfully.']);
} else {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Failed to add the event.', 'db_error' => $stmt->error]);
}

$stmt->close();
$conn->close();
