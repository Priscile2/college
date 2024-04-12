<?php
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $eligibility_criteria = $_POST['eligibility_criteria'];
    $document_required = isset($_POST['document_required']) ? (bool)$_POST['document_required'] : false;
    $deadline = $_POST['deadline'];

    $stmt = mysqli_prepare($conn, "INSERT INTO Opportunities (title, description, eligibility_criteria, document_required, deadline) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssb", $title, $description, $eligibility_criteria, $document_required, $deadline);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["message" => "Opportunity created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create opportunity"]);
    }
} else {
    echo json_encode(["message" => "Only POST requests are allowed"]);
}
?>
