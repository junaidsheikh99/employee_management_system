<?php
  include("managerdash.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Teams</title>
    <!-- <link rel="stylesheet" href="createTm.css">-->
    <script>
    function show(){
      var sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('active');
    }
    </script>
    <style>

    *{
      margin: 0;
      padding:0;
    }
    .body{
      font-family: Source Sans Pro;
      background-color:Beige;
    }
      #sidebar{
      position: fixed;
      width: 350px;   
      height: 100%;
      background: #000;
      left: -350px;
      transition: 0.4s;
      margin-top:6%;
    }
      #sidebar.active{
      left: 0;
    }
    #sidebar .toggle-btn{
      position: absolute;
      top: 10px;
      left: 340px;
    }
    .toggle-btn span{
      width: 45px;
      height: 4px;
      background: #000;
      display: block;
      margin-top: 5px;
    }
    header .header{
      background-color: #fff;
      height: 45px;
    }
    .login-page {
      width: 360px;
      padding: 8% 0 0;
      margin: auto;
    }
    .form {
      position:absolute;
      z-index:1;    //
      top:-10%;
      left:25.5%;
      transform: translate(-30%, -30%);
      background: #FFFFFF;
      width: 300px;
      margin: 0 0 100px;
      padding: 35px;
      margin-top: 200px;
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
      background: #3a2d81;
      color: #000000; 
    }
      
    </style>
</head>
<body>
  
<div id="sidebar">
    <div class="toggle-btn" onclick="show()">
    <span></span>
    <span></span>
    <span></span>
  </div>
  
  <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3 align="center">Create Team</h3>
       </div>
      </div>
      
      <form class="login-form" method ="post" action="create_team.php">
      
      <label>Team Name :</label>
        <input type="text" name="team" placeholder="Team name"/>
        
        <label>Team Leader :</label>
        <input type="text" name="leader" placeholder="Team Leader Name">
        
        
        <label>Team member (1) :</label>
        <input type="text" name="member1" placeholder="Enter Name">
        
        <label>Team member (2) :</label>
        <input type="text" name="member2" placeholder="Enter Name">
        
      <button class="btn" name="submit">Submit</button>
      </form>  
      </div>
  </div>
</div>

</body>
</html>

<?php
  if(isset($_POST['submit']))
  {
   
  include('../dbcon.php');

   $team = $_POST['team'];
   $leader = $_POST['leader'];
   $member1 =$_POST['member1'];
   $member2 =$_POST['member2'];

   $qry="INSERT INTO `createtm`(`team`,`leader`, `member1`, `member2`) VALUES ('$team','$leader','$member1','$member2')";
  
   $run = mysqli_query($con,$qry);  
  //  $row = mysqli_num_rows($run);

    if($run ==TRUE){

     ?>
        <script>
            alert ("Inserted Successfully..");
        </script>
       <?php 
 }
}   
?>
<?php
  include("display2.php")
?>