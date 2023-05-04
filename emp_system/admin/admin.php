<?php
   session_start();

   if(!isset($_SESSION['user_id'])){
    header("Location:../login.php");
   exit;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Login</title>
    <style>
    body{
    overflow: auto;
    /* background-color:rgb(235, 231, 231); */
    background-color:Beige;
    }
  
  .navbar::before{
      content: "";
      background-color:black;
      position:fixed;
      /* overflow-y: scroll; */
       padding: 10px;
       height: 10%;
       width: 10%;
       z-index: -1;
       opacity: 0.4;
       padding-left: 88.4%; 
       border-radius: 10px;
       box-shadow: #333; 
  }
  .navbar ul{
    position:fixed;
    /* position:relative; */
    display: flex;
    padding-left:7px;
   }
  .navbar ul li{
  list-style: none;
  font-size: 1rem;
  }
  .navbar ul li a{
  /* color: #000408;*/
  display: block;
  padding: 9px 5px;
  border-radius: 10px;
  text-decoration: none;
  background-color:white ;
  color: #000408;
  border-spacing: 20px;
  margin-top: 10px;
  margin-right: 4px;
 }
.navbar ul li a:hover{
   background-color: #09090a;
   color: white;
  }
  .button a{
    position:fixed;
    z-index:1;
    background: linear-gradient(90deg, #673ab7 0%, #512da8);
    color: beige;
    /* other gradient we can use: #6a3093 0%, #a044ff); */
    float:right;  
    padding-left: 5px;
    font-size:20px;
    border-radius:30px;
    padding: 10px 30px;
    border-radius: 20px;
    text-decoration: none;
    margin-top: 20px;
    margin-left:90%;  ///
   } 
   .button :hover{
      background: red;
      color: black;
    }
    </style>
  
</head>
<body>

  <!-- <form action="admin.php" method="post"> -->
  <nav class="navbar">
    <!-- <div class="title">  
       <h1> Manager Dashboard</h1>
    </div> -->
    <div class="button">
        <a href="Logout.php">LogOut</a>
     </div>
    
        <!-- <div class="sidebar" align="left"> -->
        <ul>
            <li><a href="admin.php">Home</a></li>
           <li><a href="create_team.php">Create Teams</a></li>
           <li><a href="add_P.php">Add Projects</a></li>
           <li><a href="asgnP.php">Assigned Projects</a></li>
           <li><a href="#">Perfomance</a></li>
        </ul>
        </nav>
</form>
</body>
</html>



     

    <!-- <form action="login.php" method="post"> -->
    <!-- <nav class="navbar">
    <div class="title">  
       <h1> Manager Dashboard</h1>
    </div>
    <div class="button">
        <a href="../Login.php">LogOut</a>
     </div>
    </nav>
         
        <div class="sidebar" align="left">
            <ul>
            <li><a href="admin.php">Home</a></li>
           <li><a href="create_team.php">Create Teams</a></li>
           <li><a href="add_P.php">Add Projects</a></li>
           <li><a href="asgnP.php">Assigned Projects</a></li>
           <li><a href="#">Perfomance</a></li>
                     
            </ul>
        </div>
        
</form>
</body>
</html>

      -->