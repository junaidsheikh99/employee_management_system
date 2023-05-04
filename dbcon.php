<?php
// Define database connection parameters
$host = 'localhost';
$dbname = 'hr_dash';
$username = 'root';
$password = '';

// Create a new mysqli object
$con = new mysqli($host, $username, $password, $dbname);

// Check for errors in connecting to the database
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>