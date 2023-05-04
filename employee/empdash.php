<?php
session_start(); // Add this line to start the session

// Your existing code goes here

?>


<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Student Management Sysetem</title>
         
         <link href="style2.css" rel="stylesheet" type="text/css">
         <link href="style3.css" rel="stylesheet" type="text/css">
         <!-- <link rel="stylesheet" href="table.css"> -->
         <link rel="preconnect" href="https://fonts.googleapis.com">

         <!-- new fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@800&display=swap" rel="stylesheet">

         <!-- new fonts end -->

         
        
        </head>
<body>
    <header class="admintitle" align="center">
    <div>
        <a href="logout.php"><button class="logout-btn">Logout</button></a>
        <!-- <h4><a href="#" style="float:right; margin-right:30px; color:#fff; font-size:20px;">LogOut</a></h4>  -->
        <h1 style="font-family: 'Overpass', sans-serif;">Employee Management System</h1>
        
    </div>
    </header>          
              
<div class="wrapper">
   
    <div class="sidebar">
        <div class="profile">
            <img src="user.jpg" alt="profile_picture">
                        <h3>EMP1</h3>
                        <p>Employee Dashboard</p>
        </div>
            <ul>
                <li>
                    <a href="index.php" >
                        <span class="icon"></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="taskframe.php">
                        <span class="icon"></span>
                        <span class="item">My Task</span>
                    </a>
                </li>
                <li>
                <a href="leavesframe.php" id="self">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">My Leave History</span>
                    </a>
                </li>

                <li>
                <a href="leaveformframe.php" id="self">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Apply For Leave</span>
                    </a>
                </li>

                
                
                
                
                
            </ul>
        </div>
        <!-- new code -->

        <div id="content">
			<!-- <h1>Welcome to my webpage</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod commodo urna, at posuere justo aliquet ac.</p> -->
		

    

        
    
    <script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    </script>
