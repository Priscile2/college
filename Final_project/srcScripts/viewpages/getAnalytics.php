<?php
include '../config/connection.php';

header('Content-Type: application/json');

$student_id = 8; // Example student ID, in a real scenario, this could come from a request parameter

$sql = "SELECT total_accepted, total_rejected, total_pending FROM Analytics WHERE student_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

echo $student_id;
$analytics = array('total_accepted' => 0, 'total_rejected' => 0, 'total_pending' => 0);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $analytics['total_accepted'] += $row['total_accepted'];
        $analytics['total_rejected'] += $row['total_rejected'];
        $analytics['total_pending'] += $row['total_pending'];
    }
}

echo json_encode($analytics);
?>
