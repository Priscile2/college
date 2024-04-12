<?php
include '../../config/connection.php';

// Get input data
$data = json_decode(file_get_contents("php://input"), true);

$fname = $data['fname'];
$lname = $data['lname'];
$email = $data['email'];
$yearGroup = $data['yearGroup'];
$major = $data['major'];

// Prepare SQL and bind parameters
$stmt = $conn->prepare("INSERT INTO Students (fname, lname, email, yearGroup, major) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fname, $lname, $email, $yearGroup, $major);

if($stmt->execute()) {
    echo json_encode(["message" => "Student created successfully."]);
} else {
    echo json_encode(["message" => "Failed to create student."]);
}
?>
