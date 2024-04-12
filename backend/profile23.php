<?php
header('Content-Type: application/json');
include 'connection.php'; 

// This is a simple router. A more robust solution would be to use a PHP framework.
$action = $_GET['action'] ?? null;
$userId = $_GET['user_id'] ?? null; // Ensure the user is authenticated and authorized

switch ($action) {
    case 'listProjects':
        echo listProjects($userId);
        break;
        case 'addProject':
            $projectName = $_POST['project_name'];
            $projectDescription = $_POST['project_description'];
            $projectStatus = $_POST['project_status']; // Assuming this field is provided in your form
            $startDate = $_POST['start_date']; // Assuming this field is provided in your form
            $endDate = $_POST['end_date']; // Assuming this field is provided in your form
            $milestones = $_POST['milestones']; // Assuming this field is provided in your form
            echo addProject($userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones);
            break;
        case 'editProject':
            $projectId = $_POST['project_id'];
            $projectName = $_POST['project_name'];
            $projectDescription = $_POST['project_description'];
            $projectStatus = $_POST['project_status']; // Assuming this field is provided in your form
            $startDate = $_POST['start_date']; // Assuming this field is provided in your form
            $endDate = $_POST['end_date']; // Assuming this field is provided in your form
            $milestones = $_POST['milestones']; // Assuming this field is provided in your form
            echo editProject($projectId, $userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones);
            break;
        
    case 'deleteProject':
        $projectId = $_POST['project_id']; // Assuming method is POST for consistency
        echo deleteProject($userId, $projectId);
        break;
    case 'updateProfile':
        // Assuming bio, phone_number, and email are the fields being updated
        $bio = $_POST['bio'];
        $phoneNumber = $_POST['phone_number'];
        $email = $_POST['email'];
        $receiveNewOpportunityEmail = isset($_POST['receive_new_opportunity_email']) && $_POST['receive_new_opportunity_email'] === 'on' ? 1 : 0;
        $receiveDeadlineEmail = isset($_POST['receive_deadline_email']) && $_POST['receive_deadline_email'] === 'on' ? 1 : 0;
        $receiveMonthlyUpdate = isset($_POST['receive_monthly_update']) && $_POST['receive_monthly_update'] === 'on' ? 1 : 0;
        echo updateProfile($userId, $bio, $phoneNumber, $email, $receiveNewOpportunityEmail, $receiveDeadlineEmail, $receiveMonthlyUpdate);
        break;
    default:
        echo json_encode(['error' => 'Invalid action']);
}


function listProjects($userId) {
    global $conn; // Assuming $conn is your database connection variable
    $sql = "SELECT * FROM Projects WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $projects = $result->fetch_all(MYSQLI_ASSOC);
    return json_encode($projects);
}

function addProject($userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones) {
    global $conn;
    $sql = "INSERT INTO Projects (user_id, project_name, project_description, project_status, start_date, end_date, milestones) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones);
    if ($stmt->execute()) {
        return json_encode(['success' => 'Project added successfully']);
    } else {
        return json_encode(['error' => 'Failed to add project']);
    }
}


function editProject($projectId, $userId, $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones) {
    global $conn;
    $sql = "UPDATE Projects SET project_name = ?, project_description = ?, project_status = ?, start_date = ?, end_date = ?, milestones = ? WHERE project_id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssii", $projectName, $projectDescription, $projectStatus, $startDate, $endDate, $milestones, $projectId, $userId);
    if ($stmt->execute()) {
        return json_encode(['success' => 'Project updated successfully']);
    } else {
        return json_encode(['error' => 'Failed to update project']);
    }
}

function deleteProject($projectId, $userId) {
    global $conn;
    $sql = "DELETE FROM Projects WHERE project_id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $projectId, $userId);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        return json_encode(['success' => 'Project deleted successfully']);
    } else {
        return json_encode(['error' => 'Failed to delete project']);
    }
}

function updateProfile($userId, $bio, $phoneNumber, $email, $receiveNewOpportunityEmail, $receiveDeadlineEmail, $receiveMonthlyUpdate) {
    global $conn;
    // Prepare the SQL query to update user profile
    $sql = "UPDATE UserProfile SET 
                bio = ?, 
                phone_number = ?, 
                email = ?, 
                receive_new_opportunity_email = ?, 
                receive_deadline_email = ?, 
                receive_monthly_update = ? 
            WHERE user_id = ?";

    $stmt = $conn->prepare($sql);

    // Convert boolean values to integers for the database
    $receiveNewOpportunityEmail = $receiveNewOpportunityEmail ? 1 : 0;
    $receiveDeadlineEmail = $receiveDeadlineEmail ? 1 : 0;
    $receiveMonthlyUpdate = $receiveMonthlyUpdate ? 1 : 0;

    // Bind parameters and execute the statement
    $stmt->bind_param("sssiisi", $bio, $phoneNumber, $email, $receiveNewOpportunityEmail, $receiveDeadlineEmail, $receiveMonthlyUpdate, $userId);

    if ($stmt->execute()) {
        echo json_encode(['success' => 'Profile updated successfully.']);
    } else {
        echo json_encode(['error' => 'Failed to update profile.']);
    }

    $stmt->close();
}


