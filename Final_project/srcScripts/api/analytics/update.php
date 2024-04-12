<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['analytics_id'])) {
    $analytics_id = $_POST['analytics_id'];
    $semester = $_POST['semester'];
    $total_accepted = $_POST['total_accepted'];
    $total_rejected = $_POST['total_rejected'];
    $total_pending = $_POST['total_pending'];
    $engagement_hours = $_POST['engagement_hours'];

    $query = "UPDATE Analytics SET semester = ?, total_accepted = ?, total_rejected = ?, total_pending = ?, engagement_hours = ? WHERE analytics_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "siiiid", $semester, $total_accepted, $total_rejected, $total_pending, $engagement_hours, $analytics_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Analytics record updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update analytics record"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are accepted"]);
}
?>
