<?php
include '../../config/connection.php';

// Assuming you're getting JSON data
$data = json_decode(file_get_contents("php://input"));

if (!empty($data->student_id) && !empty($data->engagement_id) && !empty($data->application_id)) {
    $stmt = mysqli_prepare($conn, "INSERT INTO Portfolios (student_id, engagement_id, application_id) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "iii", $data->student_id, $data->engagement_id, $data->application_id);

    if (mysqli_stmt_execute($stmt)) {
        http_response_code(201); // Created
        echo json_encode(array("message" => "Portfolio record created successfully."));
    } else {
        http_response_code(503); // Service Unavailable
        echo json_encode(array("message" => "Unable to create portfolio record."));
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(array("message" => "Unable to create portfolio record. Data is incomplete."));
}
?>
