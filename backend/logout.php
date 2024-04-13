<?php
// Start the session
session_start();
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page
header("Location: ../frontend/sign-in.php");
exit();
?>
