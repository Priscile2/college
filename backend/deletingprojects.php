<?php
include 'connection.php';

// Assuming the project_id is passed as a query parameter in the URL
//$projectId = isset($_GET['project_id']) ? $_GET['project_id'] : null;
$projectId = $_GET['project_id'];

echo $projectId;

if ($projectId) {
    // Prepare a DELETE statement
    $stmt = $conn->prepare("DELETE FROM projects WHERE project_id = ?");
    $stmt->bind_param("i", $projectId); // "i" indicates the type is "integer"

    if ($stmt->execute()) {
        // Check if any rows were affected
        if ($stmt->affected_rows > 0) {
            echo json_encode(["success" => true, "message" => "Project successfully deleted."]);
        } else {
            echo json_encode(["success" => false, "message" => "Project not found or already deleted."]);
        }
    } else {
        // Handle execution error
        echo json_encode(["success" => false, "message" => "An error occurred during project deletion."]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Project ID is required."]);
}

$conn->close();
?>
