<?php
// Assuming you have a way to connect to your database
include 'connection.php';


// Retrieve form data
$email = $_POST['email'];
$password = $_POST['Password'];

// Use prepared statements to prevent SQL injection
$query = "SELECT * FROM Students WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['passwrd'])) {
        // Password is correct, set session or cookie for authentication
        session_start();
        $_SESSION['user_id'] = $row['student_id'];
        // Redirect to dashboard or any other authenticated page
        header("Location: ../frontend/dashboard.php");
        exit();
    } else {
        // Password is incorrect
        header("Location: ../frontend/sign-in.php?error=invalid_credentials");
        exit();
    }
} else {
    // User not found
    header("Location: ../frontend/sign-in.php?error=user_not_found");
    exit();
}
// Close statement and database connection
$stmt->close();
$conn->close();
?>
