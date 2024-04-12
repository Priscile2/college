<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $timetable_id = $_POST['timetable_id'];

    $query = "DELETE FROM Timetable WHERE timetable_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $timetable_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Timetable entry deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete timetable entry"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are supported"]);
}
?>
