<?php
include 'connection.php';




$result = $conn->query("SELECT * FROM projects where user_id =1");

$projects = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
    echo json_encode($projects);
} else {
    echo json_encode(['message' => 'No opportunities found']);
}
