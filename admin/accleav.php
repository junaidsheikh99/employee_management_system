<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $status = $_POST['submit'];

    // update the status in the database
    require('../dbcon.php');
    $query = "UPDATE leavhr SET status='$status' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        echo "<script>alert('Leave request updated successfully.');</script>";
    }
    else{
        echo "<script>alert('Failed to update leave request.');</script>";
    }
}

?>
<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/accleave.css" rel="stylesheet" type="text/css"/>
        </head>
<body>
  <div class="container">
    <h2>HR Leave Request Dashboard</h2>
    <table >
      <tr>
      <th>Id NO</th>
        <th>HR Name</th>
        <th>HR Id</th>
        <th>Leave Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Reason</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <tr>
      <?php
            require('../dbcon.php');
            $query="SELECT *, IFNULL(status, 'Pending') as status FROM leavhr ORDER by id desc ";
            $query_run=mysqli_query($con,$query);
            $check_faculty=mysqli_num_rows($query_run)>0;
            if($check_faculty){
                while($row=mysqli_fetch_array($query_run))
                { 
                    ?>
                    <td> <?php echo $row['id'];?></td>
                   <td> <?php echo $row['ename'];?></td>
                   <td> <?php echo $row['emp_id'];?></td>
                   <td> <?php echo $row['leavtyp'];?></td>
                   <td> <?php echo $row['sdate'];?></td>
                   <td> <?php echo $row['edate'];?></td>
                   <td> <?php echo $row['reason'];?></td>
                   <td><?php echo $row['status'];?></td>
                   
                  <td>
                  <form method="post" action="">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  <div class="btn">
                        <button type="submit" name="submit" value="Approved">Approve</button>
                        <button type="submit" name="submit" value="Rejected">Reject</button>
                </div>
                    </form>
                </td>
            </tr>
            <?php
        }
    }
    else{
        echo "<tr><td colspan='9'>No records found.</td></tr>";
    }
    ?>
    </table>
</div>
  <script src="../js/acleav.js"></script>
</body>
</html>
