  <?php
  include("../admin/admin.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Projects</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    header .header{
      background-color: #fff;
      height: 45px;
    }
    .sidebar {
  height: 100%;              /* 100% Full-height */
  width: 0;                 /* 0 width - change this with JavaScript */
  position: fixed;         /* Stay in place */
  z-index: 1;             /* Stay on top */
  top: 15.5%;
  left: 0;
  background-color: #111;      /* Black*/
  /* overflow-x: hidden; Disable horizontal scroll */
  padding-top: 60px;          /* Place content 60px from the top */
  transition: 0.5s;            /* 0.5 second transition effect to slide in the sidebar */
}
.sidebar a:hover {
  color: #f1f1f1;
}
.sidebar .closebtn {
  position: absolute;
  top: 0px;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  margin-top:45px
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;  
  border: none;
  margin-top:100px;  //
}
.openbtn:hover {
  background-color: #444;
}
  .login-page {
      width: 360px;
      padding: 4% 0 0;
      /* margin-left: 550px; */
      /* margin-top: 50px;  //.. */
      position:relative;  //
      padding-left:100px;
    }
    .login-page .form .login{
      margin-top: -20px; //
      margin-bottom: 10px;
    }
    .form {
      position:relative;
      z-index:-1;
      background-color: #FFFFFF; 
      max-width: 360px;
      /* margin: 0 auto 100px; */
      padding: 35px;//
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      margin-top:100px;
    }
    .form input {
      font-family: sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }
    /* css for LOGIN BUtton*/
    .form button {
      font-family: Georgia, serif;
      text-transform: uppercase;
      outline: 0;
      /* background-color: #328f8a;
      <!-- background-image: linear-gradient(45deg,#328f8a,#08ac4b); */
      background: linear-gradient(90deg, #673ab7 0%, #512da8);
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
      /*background: #b9dcb9;
      color: #0e0e0e;*/
      background: #3a2d81;
      color: #000000;  
    }
     .dropdown:hover .dropdown-content {
      display: block;
}

/* .sidebar .closebtn {
  position: absolute;
  top: 0px;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  margin-top:45px
} */
.main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}
  
    body {
     /* background-color: #328f8a;*/
     background-color:Beige;
    /*background: rgba(178, 182, 182, 0.641);*/
    /* font-family: "Roboto", sans-serif; */
}  
</style>
</head>

<body>
  
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)"></a>
     <button class="closebtn" onclick="closeNav()">&times;</button>
      
       <div class="login-page">
          <div class="form">
            <div class="login">
              <div class="login-header">
                <h3 align="center">Add Project</h3>
                <!-- <p>Please enter your details to login.</p> -->
              </div>
               <form class="login-form" method = "post" action ="add_P.php">

              <input type="text" name="P_Name" placeholder="Enter Project Name"/>
              
              <label for="P_decp">Project Description:</label>
              <textarea name="P_decp" id="" cols="32" rows="5"></textarea>

              <label for="date"> <br> Date:</label><br>
              <input type="date" name="date" placeholder="">

              <label for="Deadline">Deadline:</label><br> 
              <br><input type="date" name="deadline" placeholder="Deadline"/>

              <button class="btn" name="submit" >Submit</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰ </button>
    </div>

    <script>
          function openNav(){
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";  
        }
        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }
</script>

</body>
</html>

<?php

include('C:\xampp\htdocs\emp_system\dbcon.php');

if(isset($_POST['submit'])){
    
    $P_name = $_POST['P_Name'];
    $P_decp = $_POST['P_decp'];
    $Date   =  $_POST['date'];
    $deadline = $_POST['deadline'];

    $qry = "INSERT INTO `add_project`(`P_Name`,`P_decp`,`date`,`deadline`) VALUES ('$P_name','$P_decp','$Date ','$deadline')";
    $run = mysqli_query($con,$qry);  
    // $row = mysqli_num_rows($run);

    ($run ==TRUE)
        ?>
        <script>
            alert ("Inserted Successfully..");
          // window.open('login.php','_self');
        </script>
       <?php 
    }
?>

<?php
include("disadd.php");
?>  
