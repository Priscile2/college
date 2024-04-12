<?php
include '../../config/connection.php';

// Check for a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $yearGroup = $_POST['yearGroup'] ?? '';
    $major = $_POST['major'] ?? '';

    $query = "UPDATE Students SET fname = ?, lname = ?, email = ?, yearGroup = ?, major = ? WHERE student_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssssi", $fname, $lname, $email, $yearGroup, $major, $student_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Student updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update student"]);
    }
} else {
    echo json_encode(["message" => "Only POST method is accepted"]);
}
?>
