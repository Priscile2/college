<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opportunity_id = $_POST['opportunity_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $eligibility_criteria = $_POST['eligibility_criteria'];
    $document_required = isset($_POST['document_required']) ? (bool)$_POST['document_required'] : false;
    $deadline = $_POST['deadline'];

    $stmt = mysqli_prepare($conn, "UPDATE Opportunities SET title = ?, description = ?, eligibility_criteria = ?, document_required = ?, deadline = ? WHERE opportunity_id = ?");
    mysqli_stmt_bind_param($stmt, "sssbss", $title, $description, $eligibility_criteria, $document_required, $deadline, $opportunity_id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Opportunity updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update opportunity"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are allowed"]);
}
?>
