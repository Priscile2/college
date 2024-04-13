<?php
// Assuming you have a way to connect to your database
include 'connection.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['Password'];

// Use prepared statements to prevent SQL injection
$query = "SELECT student_id, passwrd FROM Students WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($student_id, $hashedPassword);
$stmt->fetch();
if ($stmt->num_rows > 0) {
    // User found, verify password
    if (password_verify($password, $hashedPassword)) {
        // Password is correct, set session or cookie for authentication
        session_start();
        $_SESSION['student_id'] = $student_id;
        $_SESSION['email'] = $email;
        
        // Redirect to dashboard or any other authenticated page
        header("Location: ../frontend/dashboard.php");
        exit();
    } else {
        // Password is incorrect
        echo "Invalid credential";
        header("Location: ../frontend/sign-in.php?error=invalid_credentials");
        exit();
    }
} else {
    // User not found
    header("Location: ../frontend/sign-in.php?error=user_not_found");
    exit();
}

// Close statement and database connection
$conn->close();
?>
