
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body {
    background-image: url('../images/pic1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  .login-container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .card {
    width: 300px;
    margin-top: -60px; 
  }
  .card-header {
    background: #03a346; 
    color: white;
    padding: 10px 20px;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    position: absolute;
    top: -5px; 
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    text-align: center;
    box-shadow: 0 4px 6px #02a934;
  }
  .card-body {
    padding: 2rem 1rem 1rem;
    position: relative;
    top: 40px; 
  }
  .btn.btn-primary.btn-block {
    background-color: #088e49;
    border: none;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 2px;
  }
</style>
</head>
<body>
<div class="login-container">
  <div class="card text-center">
    <div class="card-header">
      Sign in
    </div>
    <div class="card-body">
    <!-- Login Form -->
    <form action='../authentications/login.php' method="POST" id="loginForm" novalidate>
      <div class="form-group">
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      <p class="bottom-text">Don't have an account? <a href="../viewpages/register.php">Sign up</a></p><br>
    </form>

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.1.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var form = document.getElementById('loginForm');
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }, false);
  })();

  
  $(document).ready(function() {
  $('#loginForm').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize(); 

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'), 
      data: formData,
      success: function(response) {
        // Assuming response is JSON
        var data = JSON.parse(response);
        if (data.success) {
          alert('Login successful');
          window.location.href = '../viewpages/dashboard.php';
        } else {
          alert('Login failed: ' + data.message);
        }
      },
      error: function() {
        alert('An error occurred. Please try again.');
      }
    });
  });
});

</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 

</body>
</html>
