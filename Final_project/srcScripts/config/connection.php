<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CollegeEngagementTracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

echo $mysqli->host_info . "\n";

if ($mysqli->connect_error){
    die("connection failed: " . $mysqli->connect_error);
}

?>
