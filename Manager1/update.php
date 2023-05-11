<?php
 include('../dbcon.php');

$tname =  isset ($_GET['team']) ? $_GET['team'] : null;
$leader = isset($_GET['leader']) ? $_GET['leader'] : null;
$member1 = isset($_GET['member1']) ? $_GET['member1'] : null;
// $member1 = $_GET['member1'];
$member2 = isset($_GET['member2']) ? $_GET['member2'] : null;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      header .header{
          background-color: #fff;
          height: 45px;
        }
       .login-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
        }
        .login-page .form .login{
          margin-top:-30px;
          margin-bottom: 20px;
        }
        .form {
          position:relative;
          z-index:1;
          background: #FFFFFF;
          max-width: 360px;
          margin: 0 0 100px;
          padding: 35px;
          margin-top: 155px;
          /* text-align: center; */
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
          /* font-family:sans-serif; */
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 25px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        /* css for LOGIN BUtton*/
        .form button {
          font-family:Georgia, serif;
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
          /*background-color: #b9dcb9;
          color: #0e0e0e;*/
          background: #3a2d81;
          color: #000000; 
          
        }
      body {
          /*background-color: #328f8a;*/
          background-color:Beige;
          
          /* font-family: "Roboto", sans-serif; */
          
        } 

    </style>
</head>
<body>
    
    <!-- <form class="login-form" method ="post" action="create_team.php"> -->
    <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3 align="center">Create Team</h3>
       </div>
      </div>
      
      <label>Team Name :</label>
        <input type="text" name="team" placeholder="Team name" value=<?php echo $tname ?> >
        
        <label>Team Leader :</label>
        <input type="text" name="leader" placeholder="Team Leader Name" value=<?php echo $leader ?> >
        
        
        <label>Team member (1) :</label>
        <input type="text" name="member1" placeholder="Enter Name" value= <?php echo $member1 ?> >
        
        <label>Team member (2) :</label>
        <input type="text" name="member2" placeholder="Enter Name" value =<?php echo $member2 ?> >
        
        
        <button class="btn" name="submit">Submit</button>
        <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
      </form>
    
</body>
</html>