<?php
include '../../config/connection.php';

if (isset($_GET['student_id'])) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM Portfolios WHERE student_id = ?");
    $student_id = $_GET['student_id'];
    mysqli_stmt_bind_param($stmt, "i", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} else {
    $result = mysqli_query($conn, "SELECT * FROM Portfolios");
}

$portfolios = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (!empty($portfolios)) {
    echo json_encode($portfolios);
} else {
    http_response_code(404); // Not Found
    echo json_encode(array("message" => "No portfolios found."));
}
?>
