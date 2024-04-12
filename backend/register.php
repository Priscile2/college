<?php
// Assuming you have a way to connect to your database
include 'connection.php';

// Check if the request method is POST

    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $yearGroup = $_POST['yearGroup'];
    $major = $_POST['major'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password!=$confirmPassword){
        echo "Password mismatch";
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Use prepared statements to prevent SQL injection
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
        echo json_encode(['error' => 'Failed to register user']);
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();

?>
