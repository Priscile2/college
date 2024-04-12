<?php
include 'connection.php';

// Add Project
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'addProject') {
    // Extract variables from $_POST
    $userId = 1;
    $projectName = $_POST['project_name'];
    $projectDescription = $_POST['project_description'];
    $projectStatus = $_POST['project_status'] ?? 'Not Started'; // Default to 'Not Started' if not provided
    $startDate = !empty($_POST['start_date']) ? $_POST['start_date'] : NULL;
    $endDate = !empty($_POST['end_date']) ? $_POST['end_date'] : NULL;

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO Projects (user_id, project_name, project_description, project_status, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate);

    // Execute and respond
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Project added successfully']);
    } else {
        echo json_encode(['error' => 'Failed to add project']);
    }
    $stmt->close();
}


// Edit Project
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'editProject') {
    // Extract variables from $_POST
    $projectId = $_POST['project_id'];
    $projectName = $_POST['project_name'];
    $projectDescription = $_POST['project_description'];
    $projectStatus = $_POST['project_status']; // Assume front-end sends a valid status
    $startDate = !empty($_POST['start_date']) ? $_POST['start_date'] : NULL;
    $endDate = !empty($_POST['end_date']) ? $_POST['end_date'] : NULL;

    // Prepare SQL statement
    $stmt = $conn->prepare("UPDATE Projects SET project_name = ?, project_description = ?, project_status = ?, start_date = ?, end_date = ? WHERE project_id = ?");
    $stmt->bind_param("sssssi", $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $projectId);

    // Execute and respond
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Project edited successfully']);
    } else {
        echo json_encode(['error' => 'Failed to edit project']);
    }
    $stmt->close();
}


// Delete Project
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'deleteProject') {
    // Extract project_id from $_POST
    $projectId = $_POST['project_id'];

    // Prepare SQL statement
    $stmt = $conn->prepare("DELETE FROM Projects WHERE project_id = ?");
    $stmt->bind_param("i", $projectId);

    // Execute and respond
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Project deleted successfully']);
    } else {
        echo json_encode(['error' => 'Failed to delete project']);
    }
    $stmt->close();
}



