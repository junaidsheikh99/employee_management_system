<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <meta charset="UTF-8">
  <title>Employee Management System</title>
  <link href="../css/tskcs.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <form action="tskman.php" method="POST" class="task-form">
    <label for="task-name">Task Name:</label>
    <input type="text" id="task-name" name="task_name"/><br>
    <label for="task-desc">Task Description:</label>
<textarea id="task-desc" name="task_description"></textarea><br><br>

<label for="manager">Assign to Manager:</label>
<input type="text" id="assigned_manager" name="assigned_manager"/><br>
 
<input type="submit" name="submit" value="Assign Task">
</form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
    include('../dbcon.php');

  $task_name = $_POST['task_name'];
  $task_description = $_POST['task_description'];
  $assigned_manager = $_POST['assigned_manager'];
  // insert task assignment into database
  $sql = "INSERT INTO `task`(`tsknm`, `tskdes`, `assman`) VALUES ('$task_name', '$task_description', '$assigned_manager')";
  $run= mysqli_query($con,$sql);
         
        if($run==true)
        {
            ?>
             <script>  
           alert('Task Assigned Successfully...');
      </script>
      <?php          
    }
    
  }
?>
