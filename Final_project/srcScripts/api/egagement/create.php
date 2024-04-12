<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $reflection = $_POST['reflection'];

    $query = "INSERT INTO Engagements (student_id, type, date, duration, reflection) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "issss", $student_id, $type, $date, $duration, $reflection);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Engagement created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create engagement"]);
    }
}
?>
