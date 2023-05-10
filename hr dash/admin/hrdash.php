<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['user_id'])) {
  header("Location:../login.php");
  exit;
}

// Get user info from database
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
       
         <link href="../css/style2.css" rel="stylesheet" type="text/css">
         <link href="../css/style3.css" rel="stylesheet" type="text/css">
         
         <link href="../css/leavHm.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        </head>
<body class="active">
   
<header class="admintitle" align="center">
    <div>
        <h4><a href="../logut.php" ><button class="logout-btn">Logout</button></a></h4> 
        <h1>HR Dashboard</h1>
    </div>
    </header>          
            <div class="wrapper">
            <div class="sidebar">
                <div class="profile">
                <img src="../dataimg/<?php echo $user['image']; ?>" alt="profile_picture">
            <h3><?php echo $user['fname']." ".$user['lname'];?></h3>
            <p>Dashboard</p>
        </div>
            <ul>
                <li>
                    <a href="../admin/hrdash.php" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/accelevframe.php">
                    <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                
                <li>
                
         <a href="../admin/empdash.php" id="self">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Employees</span>
                    </a>
                                
                </li>
                <li>
                    <a href="../manager/mandash.php">
                    <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Manager</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/hrleaifram.php" >
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Leaves Board</span>
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

        <!-- new code -->
                    <div id="content">
        
    <script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
})

    </script>




