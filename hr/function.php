<?php
  function showdetails($emp_id,$fname)
   {
    include('../dbcon.php');
    
    $sql="SELECT * FROM `employee` WHERE emp_id='$emp_id' AND fname='$fname'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>
        <div class="glassmorphic-form" style="padding-top:30px;margin-top:120px;">
<form>
        <table border="2"style="width:98%; margin-top:13px; background-color:#f1d79bce;border-color:#f9cd5e;">
             <tr>
                <th colspan="5">Employees Details</th></tr>
                <tr>
                <td rowspan="6"><img src="../dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-widht:10px;" /></td>
    </tr>
    <tr> <th>Employee Id</th>  
                <td><?php echo $data['emp_id'];?></td>        
            </tr>
            <tr>
                <th>Name</th>  
                <td colspan="3"><?php echo $data['fname'];?> <?php echo $data['lname'];?></td>      
            </tr>
            
            <tr>
                <th>Department</th>  
                <td><?php echo $data['dept'];?></td>     
                <th>Position</th>  
                <td><?php echo $data['position'];?></td>   
            </tr>

            <tr>
                <th>Contact NO</th>  
                <td><?php echo $data['mob'];?></td> 
                <th>DOB</th>  
                <td><?php echo $data['dob'];?></td>       
            </tr>

            <tr>
                <th>City</th>  
                <td><?php echo $data['city'];?></td>     
                <th>Country</th>  
                <td><?php echo $data['country'];?></td>   
            </tr>
            </table>
    </form>
    </div>
        <?php
    }
        else
        {
           echo "<script>alert('No Employee Data Found...');</script>";
        }
    }


?>