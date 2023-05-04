<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
         <link href="../css/style4.css" rel="stylesheet" type="text/css"/>
        </head>
<body>
            <div class="empad">
                <form autocomplete="off" method="post" action="addemplyee.php" enctype="multipart/form-data">
                
                  <table border="1" style="background-color: #f9cd5e;">
                    <h2>Employee Form</h2>
                           <tr>
                                <th colspan="4" style="padding:20px;"><strong>Personal Information</strong></th>    
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><input type="text" name="fname" placeholder="First Name"></td>

                                <th>Middle Name</th>
                                <td><input type="text" name="mname" placeholder="Last Name"></td>
                            <tr>
                                <th>Last Name</th>
                                <td><input type="text" name="lname" placeholder="Last Name"></td>
                                <th>Email</th>
                                <td><input type="email" name="email" placeholder="abc@gmail.com"></td>
                            </tr>
                           
                            <tr>
                                <th>Phone Number</th>
                                <td><input type="text" name="phone" maxlength="10" pattern="\d{10}" placeholder="Enter 10 Digit Number"></td>
                                <th>Experience</th>
                                <td>
                                  <select name="exp" onclick="showExperienceYears(this)" style="margin-right:22px; margin-left: 10px; height:30px; width:125px; background:#eedeabee;font-weight: bold;">
                                    <option value="fresher">Fresher</option>
                                    <option value="experienced">Experienced</option>
                                  </select>
                                </td>
                              </tr>
                              <tr id="experience-years">
                                <th>Experience Years</th>
                                <td><input class="exp" type="number" name="expyr" placeholder="Experience"></td>
                              </tr>
                            <tr>
                                <th>City</th>
                                <td><input type="text" name="city" placeholder="City Name"></td>
                                <th>District</th>
                                <td><input type="text" name="dist" placeholder="Enter District"></td>
                            </tr>
                           
                            <tr>
                                <th>State</th>
                                <td><input type="text" name="ste" placeholder="Enter State"></td>
                                <th>Country</th><td>
                                <div class="autocomplete" style="width:300px;">
                                    <input id="myInput" type="text" name="mycon" placeholder="Country">
                                  </div>
                                </td>

                                <tr>
                                    <th>DOB</th><td><input type="date" id="birthday" name="bdy"></td>
                                    <th>Gender</th>
                                    <td>
                                        <input list="genders" name="gender" id="gender" placeholder="Gender">
                                              <datalist id="genders">
                                              <option value="Female">
                                              <option value="Male">
                                              <option value="Other">
                                             </datalist>
                                        </td>
                            </tr>
                        
                            <tr>
                                <th colspan="4" style="padding:20px;"><strong>Employment Information</strong></th>
                            </tr>
                            <tr>
                                <th>Employee ID</th>
                                <td><input type="text" name="empid" placeholder="Employee Id"></td>
                                <th>Department</th>
                                <td><input type="text" name="dept" placeholder="Department"></td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td><input type="text" name="pstn" placeholder="Job Title"></td>
                                <th>Start Date</th>
                                <td><input type="date" name="sdate"></td> <tr>
                            </tr>
                            
                                <tr>
                                    <th>Salary</th>
                                    <td><input type="text" name="salary" placeholder="Enter Salary"></td>
                                    <th>Image</th>
                                    <td><input type="file" name="simg" required/> </td>     
                </tr>
                            <tr><th colspan="4">Password <input type="password" name="pass" class="input" data-type="password" maxlength="20" pattern="\d{@0-9a-z}"/></th>
                            
                                 </tr>

                          <tr>
                          <td colspan="4" align="center"><input type="submit" name="submit" value="Submit"/>                      
                        </td> 
                        </tr>
                </table>
            
                </form>
</div>


<script src="../js/experi.js"></script>
<script src="../js/counauto.js"></script>
<!-- <footer class="footer">
    <div class="copy">
        <p>&copy; 2023 Employee Management System</p>
    </div>
</footer> -->
</body>
</html>


<?php
    if(isset($_POST['submit']))
     {
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
        $pass= $_POST['pass'];
        $imagename =$_FILES['simg']['name'];
        $tempname =$_FILES['simg']['tmp_name'];
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        
        $qry="INSERT INTO `employee`(`fname`, `mname`, `lname`, `email`, `mob`, `experience`, `expyr`, `city`, `dist`, `state`, `country`, `dob`, `gender`, `emp_id`, `dept`, `position`, `sdate`, `salary`, `image`, `pass`) VALUES ('$fname','$mname','$lname','$email','$phone','$exp','$expyr','$city','$dist','$ste','$mycon','$bdy','$gender','$empid','$dept','$pstn','$sdate','$salary','$imagename','$pass')";
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