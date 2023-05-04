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
         <style>
                  
     /* body { 
        background-color: rgb(221, 210, 141);
        
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        
      } */

      <style>
        /* Style the body */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

/* Style the form */
form {
  width: 50%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

/* Style the form header */
h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Style the form fields */
label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

input[type="text"],
input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

    </style>
          </style>
       <!-- <link rel="stylesheet" type="text/css" href="../hr dash/css/log.css"> -->
    </head>
<body>      
<div class="glassmorphic-form">
             <form method="post" action="login.php" enctype="multipart/form-data">
             <h2 align="center">Log In</h2>
             <table border="1" style="background-color: #f1d98bee;">
             
             <tr><th>Username</th>
                 <td><input type="text" name="email" class="input"></td>
              </tr> 
              <tr>
             <th>Password</th>
                <td> <input type="password" name="pass" class="input" data-type="password" maxlength="20" pattern="\d{@0-9a-z}"></td>
              </tr>
               
              <tr>
                          <td colspan="4" align="center"><input type="submit" name="submit" value="Submit">                      
                        </td> 
                        </tr>
              </table>
              </form>                    
       </div>
   
  </body>
</html>
