<?php
include '../../config/connection.php';

if (isset($_GET['portfolio_id'])) {
    $stmt = mysqli_prepare($conn, "DELETE FROM Portfolios WHERE portfolio_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $_GET['portfolio_id']);

    if (mysqli_stmt_execute($stmt)) {
        http_response_code(200); // OK
        echo json_encode(array("message" => "Portfolio record was deleted."));
    } else {
        http_response_code(503); // Service Unavailable
        echo json_encode(array("message" => "Unable to delete portfolio record."));
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(array("message" => "Unable to delete portfolio record. Portfolio ID is missing."));
}
?>
