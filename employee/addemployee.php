<?php
   session_start();
       if(isset($_SESSION['uid']))
       {
        echo "";
      }
      else{
            header('location:login.php');
          }
?>

  <div class="">
<form method="post" action="addemployee.php" enctype="multipart/form-data">

  <table align="center" border="1" style="width:40%; margin-top:40px; background-color:rgb(100,100,100);">
    <tr>
        <th>Employee Name</th> 
        <td><input type="text" name="name" placeholder="enter name" required/> </td>
        </tr>    
        <tr>
        <th>Email</th>
        <td><input type="text" name="email" placeholder="Enter email" required/> </td>
        </tr>    
       
        <tr>
        <th>password</th> 
        <td><input type="text" name="password" placeholder="Enter password" required/> </td>
        </tr>    
       
        <tr>
        <th>role</th> 
        <td><input type="number" name="role" placeholder="Enter emp role" required/> </td>
        </tr>   
       
        <tr>
        <th><th>Image</th>
        <td><input type="file" name="simg" required/> </td>
        </tr>

        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
        </tr>
</table>

</form>
</div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
     {
        include('db.inc.php');

        $name= $_POST['name'];
        $email= $_POST['email'];
        $pass= $_POST['password'];
        $role= $_POST['role'];
        
        
        $imagename =$_FILES['simg']['name'];
        $tempname =$_FILES['simg']['tmp_name'];

        move_uploaded_file($tempname,"dataimg/$imagename");
        

        $qry="INSERT INTO `employee`(`name`, `email`, `password`, `role`, `image`) VALUES ('$name','$email','$pass','$role','$imagename')";
        
        $run= mysqli_query($con,$qry);
         
        if($run==true)
        {
            ?>
          <script>  
               alert('Data Inserted Successfully...');
          </script>
          <?php          
        }
        
      }
?>