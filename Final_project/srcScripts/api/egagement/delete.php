<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $engagement_id = $_POST['engagement_id'];

    $query = "DELETE FROM Engagements WHERE engagement_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $engagement_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Engagement deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete engagement"]);
    }
}
?>
