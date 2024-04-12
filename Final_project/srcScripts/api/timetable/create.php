<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $engagement_id = $_POST['engagement_id'];
    $date = $_POST['date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $query = "INSERT INTO Timetable (student_id, engagement_id, date, start_time, end_time) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "iisss", $student_id, $engagement_id, $date, $start_time, $end_time);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Timetable entry created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create timetable entry"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are supported"]);
}
?>
