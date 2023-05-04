<?php
include('dbcon.php');

// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute MySQL query
$result = mysqli_query($con, "SELECT * FROM employee");

// ...
?>