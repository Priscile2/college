<?php
include '../../config/connection.php';

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['student_id'];

$stmt = $conn->prepare("DELETE FROM Students WHERE student_id = ?");
$stmt->bind_param("i", $student_id);

if($stmt->execute()) {
    echo json_encode(["message" => "Student deleted successfully."]);
} else {
    echo json_encode(["message" => "Failed to delete student."]);
}
?>
