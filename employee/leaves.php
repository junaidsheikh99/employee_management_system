<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="table.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>

  <style>
  




  .footer1 {
    background-color: #f0f0f0;
    border: 1px solid #f0f0f0;
    
    
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
  .sbmt{
        color: #333;
        
        padding-left: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;

  }


  nav {
        background-color: #333;
        height: 50px;
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 20px;
        height: 80px;
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

body{
  box-sizing: border-box;
}

a{
  
  color: rgb(248, 248, 255);
}

a:hover{
  color: black;
}

.nbm {
  color: #ffffff; 
  text-decoration: none;
  font-size: 18px;
  padding: 10px;
  transition: all 0.2s ease-in-out;
}

.nbm:hover {
  background-color: #fff;
  color: #333;
  border-radius: 5px;
}
		
td:first-child {
    width: 5%;
  }


  </style>
</head>
<body>

    <!-- <div class="main-content">
        <div class="container mt-7"> -->
          

        <!-- <br><br>
        <div class="col"> -->
          <!-- <div class="d-flex justify-content-end">
            <button class="btn btn-primary"><a href="leave_form2.php">Apply</a></button>
          </div> -->

          <!-- <div class="card shadow"> -->
            
            <div class="card-header border-0">
              <h3 class="mb-0">Leaves</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="col-1">ID</th>
                    <th scope="col" class="col-4">Leave Type</th>
                    <th scope="col" class="col-7">From Date</th>
                    <th scope="col" class="col-7">To Date</th>
                    <th scope="col" class="col-7">Reason</th>
                    <th scope="col" class="col-1">Status</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php

                    include 'db.inc.php';
                    // require('db.inc.php')

                    $selectquery = "select *, IFNULL(status, 'Pending') as status from leaves ORDER by id desc";

                    $query = mysqli_query($con,$selectquery);

                    $nums = mysqli_num_rows($query);

                    while($res = mysqli_fetch_array($query)){
                      ?>
                    
                  
                  <tr>
                    <td><?php echo $res['id']?></td>
                    <td><?php echo $res['leave_type']?></td>
                    <td><?php echo $res['leave_from']?></td>
                    <td><?php echo $res['leave_to']?></td>
                    <td><?php echo $res['leave_description']?></td>
                    <td><?php echo $res['status']?></td>
                    
                  </tr>
                  <?php
                    }
                    ?>
                  


                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
            </div>
          </div>
        </div>
        
        
