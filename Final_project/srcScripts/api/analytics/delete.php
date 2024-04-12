<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['analytics_id'])) {
    $analytics_id = $_POST['analytics_id'];

    $query = "DELETE FROM Analytics WHERE analytics_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $analytics_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Analytics record deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete analytics record"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are accepted"]);
}
?>
