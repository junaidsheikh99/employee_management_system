<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/emdtai.css" rel="stylesheet" type="text/css"/>
        </head>
<body>

<div class="fitform" align="center">
   <h3>Employee Information</hr>         
    <form method="post" action="empdetail.php">
          <table>
         
        <tr>
            <th align="center">Id No</th>
           <td><input type="text" name="id" placeholder="Enter Id Number" required>
              </td>
    
          <th align="center">Employee Name</th>
          <td><input type="text" name="name" placeholder="Enter Employee Name" required></td>
   
            <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info" ></td>
</tr>
          </table>   
    </form>
</div>
</body>
</html> 
<?php

   if(isset($_POST['submit']))
  {
    $emp_id=$_POST['id'];
    $fname=$_POST['name'];
    include('../dbcon.php');
    include('function.php');
    showdetails($emp_id,$fname);
  }   
   
?>

