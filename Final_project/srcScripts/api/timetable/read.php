<?php
include '../../config/connection.php';

$student_id = $_GET['student_id'] ?? null;

if ($student_id) {
    $query = "SELECT * FROM Timetable WHERE student_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $student_id);
} else {
    $query = "SELECT * FROM Timetable";
    $stmt = mysqli_prepare($conn, $query);
}

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$timetables = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($timetables);
?>
