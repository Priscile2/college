<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $engagement_id = $_POST['engagement_id'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $reflection = $_POST['reflection'];

    $query = "UPDATE Engagements SET type = ?, date = ?, duration = ?, reflection = ? WHERE engagement_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssi", $type, $date, $duration, $reflection, $engagement_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Engagement updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update engagement"]);
    }
}
?>
