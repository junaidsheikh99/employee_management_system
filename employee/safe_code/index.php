<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="table.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>

  <style>

    /* NEW CSS for NAVBAR */
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
/* 000000000000 */
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

.menu{
  
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
/* .btna:hover{
  
} */

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

.table1{
  background-color: rgb(255, 254, 238);
  text-align: left;
  text-indent: 5%;
  
}
.table1 img{

}
/* mark{
  background-color:rgb(255, 232, 232);
} */


/* css for glass effect table */

.glassmorphism-table {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 15px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
  }

  .glassmorphism-table th,
  .glassmorphism-table td {
    padding: 10px;
  }
/* 0000000 */

  </style>
</head>
<body>

  <nav>
    <div class="nav-left">
      <a href="employeedash.php">Employee Management System</a>
    </div>

    <div class="menu">
      <ul>
        <li class="nbm"><a href="#">Home</a></li>
        <li class="nbm"><a href="about.php">About</a></li>
        
      </ul>
    </div>
    

    <div class="nav-right">
      <a href="logout.php">Logout</a>
    </div>
  </nav>

  <div class="div1">

    <h1 align="center">Employee Dashboard</h1>
  </div>

  <!-- New Table Start-->
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <h3 class="mb-0"></h3>
      </div>
      

<!-- <div class="info">
  <h2>Personal Information:</h2>

  <table class="table1" border="2" align="center" style="width:50%; margin-top:40px;">
    <tr>
       <th class="th1" colspan="3" >My Profile</th>
    </tr>
       <tr>
       <td rowspan="5"><img src="employee2.jpg" style="max-height:200px; max-width:200px;" /></td>
             
   </tr>
   <tr>
       <th>Name</th>  
       <td>Junaid A Sheikh</td>        
   </tr>
   
   <tr>
       <th>Job Title</th>  
       <td>Software Developer</td>        
   </tr>

   <tr>
       <th>Contact NO</th>  
       <td>7887424274</td>        
   </tr>

   <tr>
       <th>City</th>  
       <td>Warud</td>        
   </tr>
   </table>
  </div>
  <br><br>
   <hr> -->

   <!-- Glassmorphism Table Starts-->

   <div class="info">
  <h2>Personal Information:</h2>

  <table class="table1 glassmorphism-table" border="2" align="center" style="width:50%; margin-top:40px;">
    <tr>
      <th class="th1" colspan="3">My Profile</th>
    </tr>
    <tr>
      <td rowspan="5"><img src="employee2.jpg" style="max-height:200px; max-width:200px;" /></td>
    </tr>
    <tr>
      <th>Name</th>
      <td>Junaid A Sheikh</td>
    </tr>
    <tr>
      <th>Job Title</th>
      <td>Software Developer</td>
    </tr>
    <tr>
      <th>Contact NO</th>
      <td>7887424274</td>
    </tr>
    <tr>
      <th>City</th>
      <td>Warud</td>
    </tr>
  </table>
</div>
<br><br>
<hr>

<div>
  <a href="emptask.php" class="btn1 btna">My Task</a>
</div><br>

<div>
  <a href="leaves.php" class="btn2 btna">My Leaves</a><br><br><br><br>
</div>
</div></div>

  

   <!-- Glassmorphism table end -->

   <!-- <div>
    <a href="emptask.php" class="btn1 btna">My Task</a>
 </div><br>

 <div>
  <a href="leaves.php" class="btn2 btna">My Leaves</a>
</div><br><br>

   </div>
  </div> -->

   
 

 <footer class="footer">
  <div class="copy">
    <p>&copy; 2023 Employee Management System</p>
  </div>
</footer>


 
   
   

   
   </body>
   </html>