<?php
include '../../config/connection.php';

if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    $query = "SELECT * FROM Analytics WHERE student_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($rows);
} else {
    $query = "SELECT * FROM Analytics";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($rows);
}
?>
