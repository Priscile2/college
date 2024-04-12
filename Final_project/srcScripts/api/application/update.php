<?php
include '../../config/connection.php';

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['student_id'];
$fname = $data['fname'];
$lname = $data['lname'];
$email = $data['email'];
$yearGroup = $data['yearGroup'];
$major = $data['major'];

$stmt = $conn->prepare("UPDATE Students SET fname=?, lname=?, email=?, yearGroup=?, major=? WHERE student_id=?");
$stmt->bind_param("sssssi", $fname, $lname, $email, $yearGroup, $major, $student_id);

if($stmt->execute()) {
    echo json_encode(["message" => "Student updated successfully."]);
} else {
    echo json_encode(["message" => "Failed to update student."]);
}
?>
