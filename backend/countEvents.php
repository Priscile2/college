<?php
// Include your database connection file
include 'connection.php';
$user_id= 1;
// SQL query to count the number of events
$sql = "SELECT COUNT(*) AS event_count FROM calendarEvents where user_id= $user_id";

// Execute the query
$result = $conn->query($sql);

// Initialize an array to hold the response
$response = [];

// Check if the query was successful
if ($result) {
    // Fetch the result row
    $row = $result->fetch_assoc();
    // Add the count to the response array
    $response['event_count'] = $row['event_count'];
    // Set the HTTP response code to 200 OK
    http_response_code(200);
} else {
    // If the query failed, add an error message to the response array
    $response['error'] = "Error fetching event count: " . $conn->error;
    // Set the HTTP response code to 500 Internal Server Error
    http_response_code(500);
}

// Close the database connection
$conn->close();

// Return the response in JSON format
echo json_encode($response);
?>
