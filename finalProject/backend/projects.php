<?php
// Include database connection
include 'connection.php';

header('Content-Type: application/json');

// If no action specified, default to 'fetch'
$action = $_GET['action'] ?? 'fetch';

switch ($action) {
    case 'fetch':
    default: // Default case to handle fetching projects
        fetchProjects($conn);
        break;
    case 'add':
        addProject($conn);
        break;
    case 'edit':
        editProject($conn);
        break;
    case 'delete':
        deleteProject($conn);
        break;
}

function fetchProjects($conn) {
    
    $sql = "SELECT * FROM projects WHERE user_id = ?"; // Assuming you want to filter by user_id
    $stmt = $conn->prepare($sql);
    $userId = 1; // Example: Get user_id from query params
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $projects = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($projects);
}

function addProject($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare("INSERT INTO projects (user_id, project_name, project_description) VALUES (?, ?, ?)");
    $stmt->bind_param("isssss", $data['user_id'], $data['project_name'], $data['project_description']);
    $success = $stmt->execute();

    echo json_encode(['success' => $success]);
}

function editProject($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare("UPDATE projects SET project_name = ?, project_description = ? WHERE project_id = ?");
    $stmt->bind_param("sssssi", $data['project_name'], $data['project_description'], $data['project_status'], $data['start_date'], $data['end_date'], $data['project_id']);
    $success = $stmt->execute();

    echo json_encode(['success' => $success]);
}

function deleteProject($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare("DELETE FROM projects WHERE project_id = ?");
    $stmt->bind_param("i", $data['project_id']);
    $success = $stmt->execute();

    echo json_encode(['success' => $success]);
}
?>
