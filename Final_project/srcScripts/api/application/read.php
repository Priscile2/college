<?php
include '../../config/connection.php';

$query = "SELECT * FROM Students";
$result = $conn->query($query);

if($result->num_rows > 0) {
    $students = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($students);
} else {
    echo json_encode(["message" => "No students found."]);
}
?>
