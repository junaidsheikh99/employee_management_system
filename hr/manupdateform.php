<?php
 include('../dbcon.php');
 $sid = $_GET['sid'];
 $sql ="SELECT * FROM `manager` WHERE emp_id='$sid'";
 $run =mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE HTML>
<html lang="en_US">
    <head>
         <meta charset="UTF-8">
         <title>Employee Management Sysetem</title>
      <link href="hr/css/upform.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="upfm">
                <form autocomplete="off" method="post" action="updatedata.php" enctype="multipart/form-data">
                
                  <table border="1" style="background-color: #f1d98bee;">
                    <h2>Manager Form</h2>
                           <tr>
                                <th colspan="4" style="padding:20px;"><strong>Personal Information</strong></th>    
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><input type="text" name="fname" placeholder="First Name" value=<?php echo $data['fname']; ?> required /></td>

                                <th>Middle Name</th>
                                <td><input type="text" name="mname" placeholder="Last Name" value=<?php echo $data['mname']; ?> required /></td>
                            <tr>
                                <th>Last Name</th>
                                <td><input type="text" name="lname" placeholder="Last Name" value=<?php echo $data['lname']; ?> required /></td>
                                <th>Email</th>
                                <td><input type="email" name="email" placeholder="abc@gmail.com" value=<?php echo $data['email']; ?> required /></td>
                            </tr>
                           
                            <tr>
                                <th>Phone Number</th>
                                <td><input type="text" name="phone" maxlength="10" pattern="\d{10}" placeholder="Enter 10 Digit Number" value=<?php echo $data['mob']; ?> required /></td>
                                <th>Experience</th>
                                <td>
                                  <select name="exp" onchange="showExperienceYears(this)" style="margin-left:10px;height:50px; width:245px; background:#eedeabee;font-weight: bold;">
                                    <option value="fresher">Fresher</option>
                                    <option value="experienced">Experienced</option>
                                  </select>
                                </td>
                              </tr>
                              <tr id="experience-years">
                                <th>Experience Years</th>
                                <td><input class="exp" type="number" name="expyr" value=<?php echo $data['expyr']; ?> required /></td>
                              </tr>
                            <tr>
                                <th>City</th>
                                <td><input type="text" name="city" placeholder="City Name" value=<?php echo $data['city']; ?> required /></td>
                                <th>District</th>
                                <td><input type="text" name="dist" placeholder="Enter District" value=<?php echo $data['dist']; ?> required /></td>
                            </tr>
                           
                            <tr>
                                <th>State</th>
                                <td><input type="text" name="ste" placeholder="Enter State" value=<?php echo $data['state']; ?> required /></td>
                                <th>Country</th><td>
                                <div class="autocomplete" style="width:300px;">
                                    <input id="myInput" type="text" name="mycon" placeholder="Country" value=<?php echo $data['country']; ?> required />
                                  </div>
                                </td>

                                <tr>
                                    <th>DOB</th><td><input type="date" id="birthday" name="bdy" value=<?php echo $data['dob']; ?> required /></td>
                                    <th>Gender</th>
                                    <td>
                                        <input list="genders" name="gender" id="gender" placeholder="Gender" value=<?php echo $data['gender']; ?> required />
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
                                <td><input type="text" name="empid" placeholder="Employee Id" value=<?php echo $data['emp_id']; ?> required /></td>
                                <th>Department</th>
                                <td><input type="text" name="dept" placeholder="Department" value=<?php echo $data['dept']; ?> required /></td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td><input type="text" name="pstn" placeholder="Job Title" value=<?php echo $data['position']; ?> required /></td>
                                <th>Start Date</th>
                                <td><input type="date" name="sdate" value=<?php echo $data['sdate']; ?> required /></td> <tr>
                            </tr>
                            
                                <tr>
                                    <th>Salary</th>
                                    <td><input type="text" name="salary" placeholder="Enter Salary" value=<?php echo $data['salary']; ?> required /></td>
                                    <th>Image</th>
                                    <td><input type="file" name="simg" value=<?php echo $data['image']; ?> required /> </td>     
                </tr>
                            <tr><th colspan="4">Password <input  type="password" name="pass" class="input" data-type="password" maxlength="20" pattern="\d{@0-9a-z}"value=<?php echo $data['pass']; ?> required /></th>
                            
                                 </tr>

                          <tr>
                          <input type="hidden" name="sid" value="<?php echo $data['emp_id']; ?>" /> 
                          <td colspan="4" align="center"><input type="submit" name="submit" value="Submit"/> 
                                              
                        </td> 
                        </tr>
                </table>
            
                </form>
</div>


<script src="hr/js/experi.js"></script>
<script src="hr/js/counauto.js"></script>

</body>

</html>
