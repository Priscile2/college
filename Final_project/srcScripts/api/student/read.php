<?php
include '../../config/connection.php';

$query = "SELECT * FROM Students";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($students);
} else {
    echo json_encode(["message" => "No students found"]);
}
?>
