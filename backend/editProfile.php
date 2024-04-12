<?php
// Include database connection
include 'connection.php';

header('Content-Type: application/json');

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract posted data
    $data = json_decode(file_get_contents('php://input'), true);

    // Prepare SQL query to update profile
    $sql = "UPDATE userProfile SET student_id = ?, username = ?, bio = ?, receive_new_opportunity_email = ?, receive_deadline_email = ?, receive_monthly_update = ? WHERE user_id = ?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Failed to prepare statement']);
        exit;
    }

    // Bind parameters and execute
    $stmt->bind_param("issiiii", $data['student_id'], $data['username'], $data['bio'], $data['receive_new_opportunity_email'], $data['receive_deadline_email'], $data['receive_monthly_update'], $data['user_id']);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Profile updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update profile']);
    }
} else {
    // Not a POST request
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Close connection
$conn->close();
?>
