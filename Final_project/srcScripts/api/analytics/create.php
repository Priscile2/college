<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $semester = $_POST['semester'];
    $total_accepted = $_POST['total_accepted'];
    $total_rejected = $_POST['total_rejected'];
    $total_pending = $_POST['total_pending'];
    $engagement_hours = $_POST['engagement_hours'];

    echo $student_id;

    $query = "INSERT INTO Analytics (student_id, semester, total_accepted, total_rejected, total_pending, engagement_hours) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "isiiid", $student_id, $semester, $total_accepted, $total_rejected, $total_pending, $engagement_hours);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Analytics record created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create analytics record"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are accepted"]);
}
?>
