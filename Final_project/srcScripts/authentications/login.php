<?php
session_start();
include "../config/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signInButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo $password;

    // Check if email exists in the database
    $query = "SELECT student_id, pwords FROM Students WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, fetch the user data
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password matches, set session and redirect
            $_SESSION['student_id'] = $user['student_id'];
            header("Location: ../viewpages/dashboard.php");
            exit();
        } else {
            // Password does not match
            echo "Invalid password.";
            exit();
        }
    } else {
        // Email not found
        echo "User not found.";
        exit();
    }
} else {
    // Login button not clicked or improper request
    echo "Login button not clicked or improper request.";
    exit();
}
?>
