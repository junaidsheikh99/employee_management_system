<?php
session_start();

if(isset($_SESSION['user_id'])){
  header('location:admin/admin.php');
  exit;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
require_once"dbcon.php";

$username = $_POST["uname"];
$password = $_POST["pass"];

$qry = "SELECT * FROM `login` WHERE uname ='$username' AND pass ='$password'";

$run=mysqli_query($con,$qry);
$user_id = mysqli_fetch_assoc($run)['id'];

if($user_id){
  $_SESSION['user_id']=$user_id;
  header("location:admin.php");
  exit;
}else{
  $error = "Invalid Username or Password.";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
  header .header{
    background-color: #fff;
    height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.btn:hover{
  background-color: #b9dcb9;
  color: #0e0e0e;
  
}
.form .message {
  margin: 15px 0 0;
  color: #0a0a0a;
  font-size: 12px;
}
.form .message a {
  color: #50b450;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  /* background-image: linear-gradient(45deg,#328f8a,#08ac4b); */
  background: rgba(178, 182, 182, 0.641);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
    </style>
</head>

<body>
    
<form method="post" action="Login.php" >
<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your details to login.</p>
          </div>
        </div>
        <form class="login-form">
          <input type="text" name="uname" placeholder="Username"/>
          <input type="password" name ="pass" placeholder="Password"/>
          <button class="btn" name="login">LOGIN</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>   
    



