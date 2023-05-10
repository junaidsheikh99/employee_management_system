<?php

include('../dbcon.php');

$fname= $_POST['fname'];  
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$exp= $_POST['exp'];
$expyr= $_POST['expyr'];
$city= $_POST['city'];   
$dist= $_POST['dist'];
$ste= $_POST['ste'];
$mycon= $_POST['mycon'];
$bdy= $_POST['bdy'];
$gender= $_POST['gender'];
$empid= $_POST['empid'];
$dept= $_POST['dept'];   
$pstn= $_POST['pstn'];
$sdate= $_POST['sdate'];
$salary= $_POST['salary'];
$imagename =$_FILES['simg']['name'];
$tempname =$_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimg/$imagename");
$pass=$_POST['pass'];
$qry="UPDATE `employee` SET fname='$fname',mname='$mname',lname='$lname',email='$email',mob='$phone',experience='$exp',expyr='$expyr',city='$city',dist='$dist',state='$ste',country='$mycon',dob='$bdy',gender='$gender',emp_id='$empid',dept='$dept',position='$pstn',sdate='$sdate',salary='$salary',image='$imagename',pass='$pass' WHERE emp_id=$empid";

$run= mysqli_query($con,$qry);

if($run==true)
{
  ?>
<script>  
     alert('Data Updated Successfully...');
     window.open('manupdateform.php?sid=<?php echo $empid; ?>','_self');
</script>
<?php          
} 


?>
