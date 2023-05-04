<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="table.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leave Form</title>
    <style>

      body{
        background-color: white;
      }

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
}

nav li {
  margin: 0 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-size: 18px;
  padding: 10px;
  transition: all 0.2s ease-in-out;
}

nav a:hover {
  background-color: #fff;
  color: #333;
  border-radius: 5px;
}

.th1{
      text-align: center;
    }
        nav {
        background-color: #333;
        height: 50px;
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        height: 80px;
        /* position: fixed;
        top: 0;
        width: 100%; */

      }

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
}

nav li {
  margin: 0 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

.nav-left a {
  color: #fff;
  font-size: 20px;
  text-decoration: none;
}

.nav-right a {
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  padding: 10px 20px;
  background-color: #f00;
  border-radius: 5px;
}

.nav-right a:hover {
  background-color: #c00;
}

.div1 {
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

.div1 h1 {
  font-size: 40px;
  font-weight: bold;
  color: #333;
  margin-top: 0;
  margin-bottom: 10px;
}

.div1 p {
  font-size: 16px;
  line-height: 1.5;
  color: #666;
  margin-top: 0;
  margin-bottom: 10px;
}

.div1 a {
  color: #f00;
  text-decoration: none;
  font-weight: bold;
}

.info{
  text-align: center;
}



.btn1 {
    color: #fff;
    background-color:rgb(28, 96, 255);
    border-color: #000000;
    padding-left: 130px;
    padding-right: 180px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: 500px;
    margin-top: 20px;
    border-radius: 20px;

    
}

.btn2 {
    color: #fff;
    background-color:rgb(28, 96, 255);
    border-color: #000000;
    padding-left: 130px;
    padding-right: 160px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: 500px;
    margin-top: 50px;
  
    margin-bottom: 300px;
    border-radius: 20px;
    
    
    
}
.btna:hover{
  background-color: rgb(93, 107, 255);
  cursor: pointer;
  color: #000000;
}
.btna:hover{
  
}

/* .footer{
  background-color: #f0f0f0;
  max-width: 100%;
  padding-left: 100px;
  margin-bottom: 10px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
  grid-area: footer_section;
} */
		
.footer {
    background-color: #f0f0f0;
    border: 1px solid #f0f0f0;
    
    margin-bottom: 1px;
    /* box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); */
    grid-area: footer_section;
    max-width: 100%;
    height: 100px;
}
.copy{
  font-family: 'Times New Roman', Times, serif;
  text-align:center;
  margin-top: 65px;
  border-top: #fff;
  
}


.table1 img{

}
/* mark{
  background-color:rgb(255, 232, 232);
} */

/* CSS for Table */

.form-control {
  border-radius: 0.5rem;
}

.form-group label {
  font-weight: bold;
}

.form-group textarea {
  resize: none;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  font-size: 1.1rem;
  font-weight: bold;
  padding: 0.5rem 1.5rem;
  border-radius: 0.5rem;
  margin-top: 1rem;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
  color: #fff;
  cursor: pointer;
}
/* 0000000000000000000000000 */

.leave-table {
  border-collapse: separate;
  border-spacing: 0 0.75rem;
}

.leave-table th {
  font-weight: bold;
  text-align: center;
  background-color: #e9ecef;
}

.leave-table td {
  text-align: center;
}

.leave-summary td {
  font-weight: bold;
  text-align: right;
  background-color: #e9ecef;
}

.leave-summary td::before {
  content: "\f24e";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.5rem;
  margin-right: 0.5rem;
}

.leave-summary td::after {
  content: "\f24e";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.5rem;
  margin-left: 0.5rem;
}

.leave-summary td::before,
.leave-summary td::after {
  color: #007bff;
}

.btn-apply {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-apply:hover {
  background-color: #0069d9;
}

.leaveform{
  padding-left: 200px;
}
.mb-0{
  text-align: center;
}

.form-control-label{
  margin-left: 400px;
  
}

.card1 {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 80%;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
    margin-left: 60px;
    margin-top: 50px;
}

.card-header1 {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.sbmt-btn{
  color: white;
  background-color: #007bff;
  border-color: black;
  align-items: center;
  width: 20%;
  height: 30px;
  margin-left: 430px;
  margin-bottom: 20px;
  border-radius: 20px;
}
.sbmt-btn:hover{
  background-color: #0069d9;
  border-color: #0062cc;
  cursor: pointer;
  color: black;
}

.card-body{
  width: 80%;
  margin-right: 200px;
}
    </style>
    

  

    
</head>

<?php
  error_reporting(0);
   session_start();
       if(isset($_SESSION['uid']))
       {
        echo "";
      }
      else{
            header('location:login.php');
          }
?>
<body>
  

  

    <!-- <div class="body-div"> -->
            
            
          
          <!-- <div class="card-body"> -->
          <h2 class="mb-0">Leave Application</h2><br>
            <!-- <form class="leaveform"> -->
            <form method="post" action="leave_form2.php">
              <div class="form-group">
              
             

              <label class="form-control-label">Leave Type</label>
                <select name="leave_type" class="form-control" id="leave-type" required>
                  <option value="">Select Leave</option>
                  <option value="Sick Leave">Sick Leave</option>
                  <option value="Casual Leave">Casual Leave</option>
                  <option value="Emergency Leave">Emergency Leave</option>
                </select>

                <!-- <input type="text" name="leave_type" placeholder="Leave Type"> -->
              </div><br>
              
                <label class=" form-control-label" name="date">Start Date</label>
                <input type="date" name="leave_from" class="form-control" id="start-date" required>
              </div><br><br>

              <div class="form-group">
                <label class="form-control-label">To Date</label>
                <input type="date" name="leave_to" class="form-control" required>
              </div><br>

              <div class="form-group">
                <label class="form-control-label">Reason</label>
                <textarea placeholder="write valid reason for leave" name="leave_description" class="form-control" id="reason" rows="3" required></textarea>
              </div><br>

              <!-- <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" rows="3"></textarea>
              </div> -->
              <button type="submit" name="submit" value="submit" class="sbmt-btn">Submit</button>
            </form>
          </div>
        </div>
      </div></div><br><br><br><br>
      
      

<?php
    if(isset($_POST['submit']))
     {
        include('db.inc.php');

        $leave= $_POST['leave_type'];
        $fromdt= $_POST['leave_from'];
        $todt= $_POST['leave_to'];
        $reason= $_POST['leave_description'];
        
        

        $qry="INSERT INTO `leaves`(`leave_type`,`leave_from`,`leave_to`,`leave_description`) VALUES ('$leave','$fromdt','$todt','$reason')";

       

        $run= mysqli_query($con,$qry);
         
        if($run==true)
        {
            ?>
          <script>  
               alert('Leave Submit Successfully...');
          </script>
          <?php          
        }
        
     }