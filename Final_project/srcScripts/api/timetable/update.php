<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $timetable_id = $_POST['timetable_id'];
    $student_id = $_POST['student_id'];
    $engagement_id = $_POST['engagement_id'];
    $date = $_POST['date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $query = "UPDATE Timetable SET student_id = ?, engagement_id = ?, date = ?, start_time = ?, end_time = ? WHERE timetable_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "iisssi", $student_id, $engagement_id, $date, $start_time, $end_time, $timetable_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Timetable entry updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update timetable entry"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are supported"]);
}
?>
