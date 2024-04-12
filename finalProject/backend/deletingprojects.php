<?php
include 'connection.php';

// Use $_GET to retrieve the project_id from the query parameters
$project_id = isset($_GET['project_id']) ? intval($_GET['project_id']) : null;
$user_id = 1; // Hardcoded user ID for demonstration

if ($project_id) {
    // Prepare the delete statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM projects WHERE project_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $project_id, $user_id);

    if ($stmt->execute()) {
        // Check if any row was actually deleted
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Project deleted successfully']);
        } else {
            // No row was deleted, which means either the project_id doesn't exist or it does not belong to user_id = 1
            echo json_encode(['status' => 'error', 'message' => 'No project found or unauthorized action']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'An error occurred during the deletion process']);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Project ID not provided']);
}

// Close the connection
$conn->close();
?>
