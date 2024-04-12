<?php
header('Access-Control-Allow-Origin: *');  // Allow any origin
header('Content-Type: application/json');  // Set Content-Type to application/json

include 'connection.php';
// session_start();

// if (!isset($_SESSION['user_id'])) {
//     http_response_code(403);
//     echo json_encode(['error' => 'Authentication required']);
//     exit;
// }

$userId = 1;

$sql = "SELECT SUM(TIME_TO_SEC(TIMEDIFF(event_end_time, event_time)) / 3600) AS total_hours
        FROM CalendarEvents
        WHERE user_id = ?
        AND (event_date < CURDATE() OR (event_date = CURDATE() AND event_end_time < CURTIME()))";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result(); // Use get_result() to fetch the result
if ($row = $result->fetch_assoc()) {
    echo json_encode(['total_hours' => $row['total_hours'] ?? 0]);
} else {
    echo json_encode(['total_hours' => 0]);
}

$stmt->close();
$conn->close();
?>
