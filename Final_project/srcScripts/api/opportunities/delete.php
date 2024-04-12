<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opportunity_id = $_POST['opportunity_id'];

    $stmt = mysqli_prepare($conn, "DELETE FROM Opportunities WHERE opportunity_id = ?");
    mysqli_stmt_bind_param($stmt, "s", $opportunity_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Opportunity deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete opportunity"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are allowed"]);
}
?>
