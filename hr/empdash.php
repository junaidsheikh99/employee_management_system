<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['user_id'])) {
  header("Location:../login.php");
  exit;
}
require_once "../dbcon.php";

$user_id = $_SESSION['user_id'];
$sql = "SELECT fname,lname,image FROM employee WHERE emp_id = $user_id";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/style2.css" rel="stylesheet" type="text/css"/>
         <link href="../css/style3.css" rel="stylesheet" type="text/css"/>
         <link href="../css/style4.css" rel="stylesheet" type="text/css"/>
         <!-- <link href="../css/butdrpdwn.css" rel="stylesheet" type="text/css"/> -->
         <link href="../css/exper.css" rel="stylesheet" type="text/css"/>
         <link href="../css/dashow.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
         
        </head>
<body class="active"> 
      <div class="admintitle" align="center">
      <h4><a href="../logut.php" ><button class="logout-btn">Logout</button></a></h4>
            <h1>HR Dashboard</h1>
             
                  </div>
                  <div class="wrapper">
              
                           
                 <div class="sidebar">
                 <div class="profile">
                <img src="../dataimg/<?php echo $user['image']; ?>" alt="profile_picture">
            <h3><?php echo $user['fname']." ".$user['lname'];?></h3>         
                        <p>HR DASHBOARD</p>
                            </div>
                                <ul>
                                    <li>
                                        <a href="../admin/hrdash.php">
                                            <span class="icon"><i class="fas fa-home"></i></span>
                                            <span class="item">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/edetailframe.php">
                                            <span class="icon"><i class="fas fa-user-friends"></i></span>
                                            <span class="item">Employees Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/adempfram.php">
                                            <span class="icon"><i class="fas insert-icon"></i></span>
                                            <span class="item">Insert Employees</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="../admin/upempfrm.php">
                                            <span class="icon"><i class="fas update-icon"></i></span>
                                            <span class="item">Update Employees</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="../admin/delefrm.php">
                                            <span class="icon"><i class="fas delete-icon"></i></span>
                                            <span class="item">Delete Employees</span>
                                        </a>
                                    </li>
  
                                    <li>
                                        <a href="#">
                                            <span class="icon"><i class="fas fa-cog"></i></span>
                                            <span class="item">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
</div>
    <!-- new code -->
    <div id="content">
  

<script>
                    var hamburger = document.querySelector(".hamburger");
                    hamburger.addEventListener("onclick", function(){
                        document.querySelector("body").classList.toggle("active");
                    })
                    </script>
                   <script src="../js/acordin.js"></script>
                