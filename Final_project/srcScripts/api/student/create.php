<?php
include '../../config/connection.php';

// Check for a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $yearGroup = $_POST['yearGroup'] ?? '';
    $major = $_POST['major'] ?? '';

    $query = "INSERT INTO Students (fname, lname, email, yearGroup, major) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $yearGroup, $major);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Student created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create student"]);
    }
} else {
    echo json_encode(["message" => "Only POST method is accepted"]);
}
?>
