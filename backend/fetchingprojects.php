<?php
session_start();
include 'connection.php';

$student_id =$_SESSION['student_id'];



$result = $conn->query("SELECT * FROM projects where user_id =$student_id");

$projects = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
    echo json_encode($projects);
} else {
    echo json_encode(['message' => 'No opportunities found']);
}
