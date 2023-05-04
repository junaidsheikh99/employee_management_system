<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/style5.css" rel="stylesheet" type="text/css"/>
</head>
<body>
                <div align="center">
        
                  <form action="deleteemp.php" method="post">
                    <table style="margin-top:10px; margin-left:150px;">
                    <tr>
                      <th>Employee ID  </th>
                      <td> <input type="text" name="empid" placeholder="Employee ID" required="required"/></td>
                      
                      <th>Enter Employee Name  </th>
                      <td><input type="text" name="fname" placeholder="Enter Employee Name" required="required"/></td>
                      
                      <td colspan="1"><input type="submit" name="submit" value="search" /></td>
                      
                    </tr>
                    
                    
                  </form>
                </table>
                </div>
          
                <div class="empdata" align="center">
                <table width="60%" border="1" style="margin-top:10px; margin-left:110px;"> 
                  <tr style="background-color:#000; color:#fff;">
                    <th>No</th>
                    <th>Image</th>
                    <th>Employee Name</th>
                    <th>Id No</th>
                    <th>Edit</th>
                  </tr> 
<?php                 
 if(isset($_POST['submit']))
  {
      include('../dbcon.php');
      $emp_id=$_POST['empid'];
      $fname=$_POST['fname'];
      $sql="SELECT * FROM `employee` WHERE emp_id='$emp_id' AND 'fname' LIKE '%fname%'";
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
                <td><?php echo $data['fname'] ?> <?php echo $data['lname'] ?></td>
                <td><?php echo $data['emp_id'] ?></td>
                <td><a href="empdeleteform.php?sid=<?php echo $data['emp_id']?>" onclick="return confirm('Are you sure you want to delete this record?');">
                <button style="color:white; background-color: #000; border-radius:5px;padding:5px 6px 4px 6px;">Delete</button></a></td>  
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