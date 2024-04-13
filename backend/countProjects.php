<?php
session_start();  // Start the session at the very beginning

// Include your database connection file
include 'connection.php';

// Initialize the response array
$response = [];

// Make sure the student_id session variable is set
if (isset($_SESSION['student_id'])) {
    // Cast the student_id to an integer to prevent SQL Injection
    $student_id = (int)$_SESSION['student_id'];

    // SQL query to count the number of projects
    $sql = "SELECT COUNT(*) AS project_count FROM projects WHERE user_id = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Bind the student_id parameter
    $stmt->bind_param('i', $student_id);
    
    // Execute the prepared statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Fetch the result row
    $row = $result->fetch_assoc();
    
    // Add the count to the response array
    $response['project_count'] = $row['project_count'];

    // Close the statement
    $stmt->close();
} else {
    // If the session variable is not set, return a project count of 0
    $response['project_count'] = 0;
}

// Close the database connection
$conn->close();

// Set the HTTP response code to 200 OK
http_response_code(200);

// Return the response in JSON format
echo json_encode($response);
?>
