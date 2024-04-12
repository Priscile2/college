<?php
include 'connection.php';
// Receive POST data

$user_id = 1;
$eventName = $_POST['title'];
$eventDate = $_POST['date'];
$eventType = $_POST['type']; // Ensure the key matches with your form or API request
$eventDesc = $_POST['desc']; // Ensure the key matches with your form or API request
$eventTime = $_POST['time']; // This should be captured from your form or API request

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO calendarEvents (user_id, event_name, event_date, event_type, description, event_time) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $user_id, $eventName, $eventDate, $eventType, $eventDesc, $eventTime);

// Execute the statement
if ($stmt->execute()) {
    echo "Event added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement
$stmt->close();
