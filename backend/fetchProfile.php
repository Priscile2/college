<?php
// Include your database connection script
include 'connection.php';

header('Content-Type: application/json');

// Assuming you have a way to identify the current user, e.g., via session
$userId = $_SESSION['user_id'] ?? 0; // Make sure to validate and sanitize

// Adjusted SQL to perform a JOIN with the students table and CONCAT fname and lname
$sql = "SELECT 
            p.username, 
            p.bio, 
            p.receive_new_opportunity_email, 
            p.receive_deadline_email, 
            p.receive_monthly_update, 
            CONCAT(s.fname, ' ', s.lname) AS name, 
            s.email, 
        FROM 
            userProfile AS p
        JOIN 
            students AS s ON p.student_id = s.student_id
        WHERE 
            p.user_id = ?";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($profile = $result->fetch_assoc()) {
    echo json_encode([
        'username' => $profile['username'],
        'bio' => $profile['bio'],
        'name' => $profile['name'],
        'email' => $profile['email'],
    ]);
} else {
    echo json_encode(['error' => 'Profile not found']);
}

$conn->close();
?>
