<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/emdtai.css" rel="stylesheet" type="text/css">
        </head>
<body>
  <div class="glassmorphic-form">           
    <form method="post" action="leaveHR.php" enctype="multipart/form-data">
          <table border="1" align="center" style="width:30%; margin-left:2px; margin-top:35px; background-color:#f1d98bee;">
            <h2>Leave Application</h2>
          <tr>
           <td colspan="4" align="center" style="padding:4px; color:#000000"><h3>Information</h3></td>
       </tr>
        <tr>
           
             
            <th align="center">Employee Name</th>
          <td><input type="text" name="name" placeholder="Enter Employee Name" required></td>
        </td>
        <th align="center">Id No</th>
           <td><input type="text" name="emp_id" placeholder="Enter Id Number" required>
    </tr>
    <tr>
        <th>Department</th> 
            <td>
                <input type="text" name="dept" placeholder="Department">
            </td>
            <th>Position</th>
            <td><input type="text" name="pstn" placeholder="Job Title"></td>
    </tr>
    <tr>
        <th>Email</th>
         <td><input type="text" name="email" placeholder="abc@gmail.com"></td>
        <th>Leave Type</th><td>
            <input list="leaves" name="leave" id="leave" placeholder="Leaves">
                  <datalist id="leaves">
                  <option value="">Sick Leave</option>
                  <option value="">Casual Leave</option>
                  <option value="">Hourly Leave</option>
                    <option value="">Emergency Leave</option>
                 </datalist>
            </td>  
    </tr>
    <tr>
        <th>Start Date</th>
        <td><input type="date" name="sdate"></td>
        <th>End Date</th>
         <td><input type="date" name="edate"></td>
    </tr>
    <tr>
        <th>Reason</th>
        <td colspan="3"><textarea class="textbox" id="reason" name="reason" rows="4" cols="90" placeholder="Reason for Leaves"></textarea></td>
    </tr>
    <tr>
            <td colspan="4" align="center"><input type="submit" name="submit" value="Sent"></td>
    </table>   
    </form>
</div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
     {
        include('../dbcon.php');
        $name= $_POST['name'];
        $id= $_POST['emp_id'];
        $dept= $_POST['dept'];
        $pstn= $_POST['pstn'];
        $email= $_POST['email'];
        $lev= $_POST['leave'];
        $sdate= $_POST['sdate'];
        $edate= $_POST['edate'];
        $reson= $_POST['reason'];

        $qry="INSERT INTO `leavhr`(ename, emp_id, dpt, position, email, leavtyp, sdate, edate, reason) VALUES ('$name','$id','$dept','$pstn','$email','$lev','$sdate','$edate','$reson')";
        $run= mysqli_query($con,$qry);
         
        if($run==true)
        {
            ?>
          <script>  
               alert('Application sent Successfully...');
          </script>
          <?php          
        }
        
      }
?>
</body>
</html>
