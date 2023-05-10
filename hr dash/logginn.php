<?php
session_start();

// Redirect to profile page if user is already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: admin/hrdash.php");
  exit;
}

// Check if login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once "dbcon.php";

  $username = $_POST['email'];
  $password = $_POST['pass'];

  // Validate login credentials
  $sql = "SELECT emp_id FROM employee WHERE email = '$username' AND pass = '$password'";
  $result = mysqli_query($con, $sql);
  $user_id = mysqli_fetch_assoc($result)['emp_id'];

  if ($user_id) {
    $_SESSION['user_id'] = $user_id;
    header("Location: admin/hrdash.php");
    exit;
  } else {
    $error = "Invalid username or password.";
  }
}
?>
<!DOCTYPE HTML>
<html lang="en_US" dir="ltr">
    <head>
         <meta charset="UTF-8">
         <title>Admin Login</title>
         
                  
     
    </head>
<body>
   <a href="admfr.php"><img src=""/></a>
   <a href=""><img src=""/></a>
   <a href=""><img src=""/></a>
   <a href=""><img src=""/></a>
  </body>
</html>
