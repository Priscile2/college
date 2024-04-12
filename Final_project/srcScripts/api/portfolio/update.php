<?php
include '../../config/connection.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->portfolio_id) && (!empty($data->engagement_id) || !empty($data->application_id))) {
    $query = "UPDATE Portfolios SET engagement_id = ?, application_id = ? WHERE portfolio_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "iii", $data->engagement_id, $data->application_id, $data->portfolio_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(array("message" => "Portfolio record was updated."));
    } else {
        echo json_encode(array("message" => "Unable to update portfolio record."));
    }
} else {
    echo json_encode(array("message" => "Data is incomplete."));
}
?>
