<?php
  include("managerdash.php")
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Projects</title>
    <script >
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
    }
    #sidebar{
      position: fixed;
      /* width: 330px;    */
      height: 85%;
      background: #fff;
      left: -330px;
      transition: 0.4s;
      margin-top:95px;
      z-index:10;
    }
    #sidebar.active{
      left: 0;
    }
    .toggle-btn{
      position: absolute;
      top: 30px;
      left: 330px;
      z-index: 2;
    }
    .toggle-btn span{
      width: 45px;
      height: 4px;
      background: #000;
      display: block;
      margin-top: 4px;
    }
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
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
      margin-top: -30px;   //
      margin-bottom: 26px;
          
    }
    .form {
      position:absolute;
      z-index: 1;
      background: #FFFFFF;
      max-width: 340px;  //
      margin: 0 auto 50px;
      padding: 40px;
      /* text-align: center; */
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      margin-top:30px;    //
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
          /*background-color: #b9dcb9;
          color: #0e0e0e;*/
          background: #3a2d81;
          color: #000000; 
        }
        
    body {
          background-color: #328f8a;
          background-color:Beige;
  } 
    </style>         

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
                <h3 align="center">Assigned Project</h3>
             </div>
            </div>

          <form class="login-form" method="post" action="asgnP.php" >
           
              <label for="t_name">Team Name :</label>
              <input type="text" name="t_name" list="Team" placeholder="Select Team Name">

              <label for="p_name">Project Name :</label>
              <input type="text" name="p_name" placeholder="Enter Project Name"/>
              
              
              <label for="date">Assigned Date:</label><br>
              <input type="date" name="s_date" />
              
              <label for="Deadline">Deadline:</label><br> 
              <input type="date" name="deadline" />

              <button class="btn" name="submit">Submit</button>
              
            </form>
          </div>
      </div>
    
  </body>
</html> 

<?php
if (isset($_POST["submit"]))
{
  include('dbcon.php');
  $TMname = $_POST['t_name'];   
  $Name = $_POST['p_name'];
  $date = $_POST['s_date'];
  $deadline = $_POST['deadline'];
  
  $qry = "INSERT INTO `asgn_project`(`t_name`, `p_Name`, `s_date`, `deadline`) VALUES ('$TMname','$Name','$date','$deadline')";
  $result = mysqli_query($con,$qry);
 
    if($result==TRUE)
   {
    ?>
        <script>
          alert ("Assigned Successfully.."); 
        
        </script>
      
      <?php
   }
}
?>

<?php
include("display.php");
?>
 