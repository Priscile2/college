<?php
include '../../config/connection.php';

// Check for a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'] ?? '';

    $query = "DELETE FROM Students WHERE student_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $student_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Student deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete student"]);
    }
} else {
    echo json_encode(["message" => "Only POST method is accepted"]);
}
?>
