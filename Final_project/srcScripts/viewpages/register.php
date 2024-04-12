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
$profile  ="";

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
    header("Location: ../viewpages/login.php?success=Registration successful");
    exit();
} else {
    // Redirect back to the registration page with an error message if the query failed
    echo "Error: " . $stmt->error;
    header("Location: ../viewpages/register.php?error=Failed to register");
    exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<style>
  body, html {
    height: 100%;
    margin: 0;
    background: linear-gradient( rgba(1, 70, 245, 0.5)),  no-repeat center center fixed; 
    background-image: url('../images/pic1.jpg');
    background-size: cover;

    font-family: 'Roboto', sans-serif; 
  }
  .register-container {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .card {
    width: 22rem;
    box-shadow: 0 4px 8px #039d10;
  }
  .card-header {
    background-color: #09a02a;
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0 4px 6px #028e31;
    transform: translateX(-50%);
    position: relative;
    top: -5px; 
    left: 50%; 
    width: 90%;
    align-items: center;   
  }

  .card-body {
    padding: 60px 15px 15px 15px; 
  }
  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }
  .form-label-group input {
    border-radius: 2px;
  }
  .form-label-group>input, .form-label-group>label {
    padding: 22px 20px;
  }
  .form-check-label {
    margin-top: -5px;
  }
  .btn.btn-primary.btn-block {
    background-color: #088e49;
    border: none;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 2px;
  }
  .bottom-text {
    text-align: center;
    margin-top: 16px;
  }
</style>
</head>
<body>
<div class="register-container">
  <div class="card">
    <div class="card-header">
      <h4>Join us today</h4>
      <p>Enter your email and password to register</p>
    </div>
    <div class="card-body">
      <form action='' id="registerForm" method="POST">
        <div class="form-label-group">
          <input name="fname" type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
        </div>
        <div class="form-label-group">
          <input name="lname" type="text" id="inputLastName" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-label-group">
          <input name="email" type="text" id="inputemail" class="form-control" placeholder="email" required>
        </div>
        <div class="form-label-group">
          <select name="yearGroup" id="inputYearGroup" class="form-control" required>
            <option value="">Select Year Group</option>
            <option value="2021">2027</option>
            <option value="2022">2026</option>
            <option value="2023">2025</option>
            <option value="2024">2024</option>
          </select>
        </div>
        <div class="form-label-group">
          <select name="major" id="inputMajor" class="form-control" required>
            <option value="">Select Major</option>
            <option value="Computer Science">Computer Science</option>
            <option value="MIS">MIS</option>
            <option value="BA">BA</option>
            <option value="Engineering">Engineering</option>
          </select>
        </div>
        <div class="form-label-group">
          <input name="telephone" type="tel" id="inputTelephone" class="form-control" placeholder="Telephone" required>
        </div>
        <div class="form-label-group">
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-label-group">
          <input name="confirmPassword" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
        </div>
        
        
        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
        <p class="bottom-text">Already have an account? <a href="../viewpages/login.php">Sign in</a></p>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.1.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  // JavaScript for form validation
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var form = document.getElementById('registerForm');
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }, false);
  })();
//AJAX

$(document).ready(function() {
  $('#registerForm').on('submit', function(e) {
    e.preventDefault();
    // Check if form is valid
    if (this.checkValidity()) {
      // Form data for submission
      var formData = {
        fname: $('#inputFirstName').val(),
        lname: $('#inputLastName').val(),
        email: $('#inputemail').val(),
        password: $('#inputPassword').val(),
        confirmPassword: $('#inputConfirmPassword').val(),
        yearGroup: $('#inputYearGroup').val(),
        major: $('#inputMajor').val(),
        telephone: $('#inputTelephone').val()
      };

      // Perform AJAX request
      $.ajax({
        type: 'POST',
        url: '../authentications/register.php', 
        data: formData,
        success: function(response) {
          // Parse the JSON response
          var data = JSON.parse(response);

          if (data.success) {
            alert('Registration successful');
            window.location.href = '../viewpages/login.php'; // Redirect on success
          } else {
            alert('Registration failed: ' + data.message); // Show error message
          }
        },
        error: function() {
          alert('An error occurred. Please try again.');
        }
      });
    } else {
      e.stopPropagation();
      $(this).addClass('was-validated');
    }
  });
});


</script>

</body>
</html>
