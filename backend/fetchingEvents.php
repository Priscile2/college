<?php
// Include your database connection script
include 'connection.php';
session_start();  // Start the session at the very beginning
$student_id= $_SESSION['student_id'] ;
//var_dump($student_id);
// SQL query to select all events from the calendarEvents table
$query = "SELECT * FROM calendarEvents where user_id= $student_id ORDER BY event_date ASC, event_time ASC";

// Execute the query
$result = $conn->query($query);

// Initialize an array to hold the events
$events = [];

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch each row as an associative array and add to the events array
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
    // Send a JSON response containing the events
    header('Content-Type: application/json');
    echo json_encode($events);
} else {
    // If no events were found, send a JSON response indicating this
    header('Content-Type: application/json');
    echo json_encode(['message' => 'No events found']);
}

// Close the database connection
$conn->close();
?>
