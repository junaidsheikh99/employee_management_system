<?php

 include('../dbcon.php');
 $emp_id=$_REQUEST['sid'];
 if(isset($emp_id))
 {
  $qry="DELETE FROM `employee` WHERE emp_id='$emp_id'";
  $run= mysqli_query($con,$qry);

  if($run==true)
  {
    ?>
<script>  
     alert('Data Deleted Successfully...');
     window.open('deleteemp.php','_self');
</script>
<?php 

}
}
else
{
echo "<script>alert('Something went wrong. Please try again.');</script>";
}
?>




