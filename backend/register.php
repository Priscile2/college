<?php
// Assuming you have a way to connect to your database
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $yearGroup = trim($_POST['yearGroup']);
    $major = trim($_POST['major']);
    $telephone = trim($_POST['telephone']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate First Name and Last Name for alphabetic characters
    if (!ctype_alpha(str_replace(' ', '', $firstName)) || !ctype_alpha(str_replace(' ', '', $lastName))) {
        die('First name and last name must only contain letters.');
    }

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@ashesi\.edu\.gh$/', $email)) {
        die('Invalid Ashesi University email address.');
    }

    // Validate Telephone for numeric characters and length
    if (!ctype_digit($telephone) || strlen($telephone) > 10) {
        die('Telephone must contain only numbers and be no more than 10 digits long.');
    }

    // Check Passwords Match
    if ($password !== $confirmPassword) {
        echo "Invalid password";
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $query = "INSERT INTO Students (fname, lname, email, yearGroup, major, phone, passwrd) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $firstName, $lastName, $email, $yearGroup, $major, $telephone, $hashedPassword);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Registration successful
        header("Location: ../frontend/sign-in.php");
        exit();
    } else {
        // Registration failed
        http_response_code(500); // Internal Server Error
        echo 'Failed to register user';
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Not a POST request
    http_response_code(405); // Method Not Allowed
    echo 'Method Not Allowed';
    exit();
}
?>
