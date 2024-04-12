<?php
// Include the connection file
include '../config/connection.php';

if($_SERVER['REQUEST_METHOD']== 'POST'){
// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$yearGroup = $_POST['yearGroup'];
$major = $_POST['major'];
$password = $_POST['password'];
$passwordConfirmed = $_POST['confirmPassword'];
$telephone = $_POST['telephone'];


// Check if passwords match
if ($password !== $passwordConfirmed) {
    // Redirect back to the registration page with an error message
    header("Location: ../viewpages/register.php?error=Passwords do not match");
    exit();
}


// Encrypting the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert the new student
$sql = "INSERT INTO Students (fname, lname, email,tel, yearGroup, major, pwords ) VALUES (?, ?, ?, ?, ?, ?, ?)";


// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("sssssss", $fname, $lname, $email,$telephone, $yearGroup, $major, $hashedPassword);

// Execute the statement
if ($stmt->execute()) {
    // Redirecting to login page after successful registration
    header("Location: login.php?success=Registration successful");
    exit();
} else {
    // Redirect back to the registration page with an error message if the query failed
    echo "Error: " . $stmt->error;
    // header("Location: ../register.php?error=Failed to register");
    exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
}
?>