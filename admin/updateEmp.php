<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/style5.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="updemp" align="center">
        
        <form action="updateEmp.php" method="post">
          <table style="margin-top:10px; margin-left:150px;">
          <tr>
            <th>HR ID  </th>
            <td> <input type="text" name="hr_id" placeholder="HR ID" required="required"/></td>
            
            <th>Enter HR Name  </th>
            <td><input type="text" name="fname" placeholder="Enter HR Name" required="required"/></td>
            
            <td colspan="1"><input type="submit" name="submit" value="search" /></td>
            
          </tr>
          
          
        </form>
      </table>
      </div>

      <div class="empdata" align="center">
      <table width="60%" border="1" style="margin-top:10px; margin-left:110px;"> 
        <tr style="background-color:#000; color:#fff;">
          <th>Id</th>
          <th>Image</th>
          <th>HR Name</th>
          <th>Id No</th>
          <th>Action</th>
        </tr> 
        <?php

  if(isset($_POST['submit']))
  {
      include('../dbcon.php');
      $id=$_POST['hr_id'];
      $fname=$_POST['fname'];
      $sql="SELECT * FROM `hr_table` WHERE hr_id='$id' AND 'fname'  LIKE '%fname%'";
      $run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
          {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
          }
      else
      {
         $count=1;
         while($data=mysqli_fetch_assoc($run))
          {
            $count++;
             ?>
             <tr align="center">
               <td><?php echo $count; ?></td>
                <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:110px;" /></td>
                <td><?php echo $data['fname'] ?></td>
                <td><?php echo $data['hr_id'] ?></td>
                 <td><a href="empupdateform.php?sid=<?php echo $data['hr_id']?>" style="color:white; background-color: #000; border-radius:5px;padding:5px 6px 4px 6px;">Update</a></td>
               </tr> 
              <?php
            }
         }
      }
?>
      </table>
    </div>
    </body>
    </html>
    