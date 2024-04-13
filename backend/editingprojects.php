<?php
session_start();

include 'connection.php';

// Read the input stream for PUT request data
$rawData = file_get_contents("php://input");
$decodedData = json_decode($rawData, true);

$projectId = $decodedData['project_id'] ?? null;
$projectName = $decodedData['name'] ?? null;
$projectDesc = $decodedData['desc'] ?? null;

echo json_encode($response);

$sql ="UPDATE projects SET project_name = ?, project_description = ? WHERE project_id = ?";
$stmt = $conn->prepare($sql);
// Correct the order of variables to match the SQL statement
$stmt->bind_param("ssi", $projectName, $projectDesc, $projectId);

if ($stmt->execute()) {
    echo 'Update successful';
} else {
    // Consider using $stmt->error for more detailed error information
    $response = ['status' => 'error', 'message' => 'Failed to update the project: ' . $stmt->error];
    echo json_encode($response);
}

$stmt->close();
$conn->close();
?>
