<?php
include 'connection.php';
// Receive POST data

$user_id=1;
$projectName = $_POST['name'];
$projectDesc = $_POST['desc'];
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO projects (user_id,project_name, project_description) VALUES (?, ?, ?)");
$stmt->bind_param("iss",$user_id, $projectName, $projectDesc);

// Execute and respond
if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Project added successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error adding project"]);
}
    

$stmt->close();
$conn->close();