<html>
    <head>
        <title>displaying data</title>
        <style>
          table{
            margin-top:500px;
            border-collapse:collapse;
            padding:
          }
          th,td{
            padding:12px;
          }
          .head{
            background:linear-gradient(90deg,#673ab7 0%, #512da8);
            color:white;
          }
          .count p{
            margin-top:-170px;
            
            /* padding-left:50px; */
          }
          .count h3  {
            /* background:linear-gradient(90deg,#673ab7 0%, #512da8); */
            background:black;
            color:white; 
            padding-left: 20px;
            margin-left:500px;
            margin-right:500px;
          } 
        </style>
    </head>        
<body>
   
</body>
</html>

<?php
    include("../dbcon.php");
    $qry = "SELECT * FROM asgn_project";
    $data = mysqli_query($con,$qry);

    if(!$data){
        die("Query failed: ".mysqli_error($con));
        }
     
    $total = mysqli_num_rows($data);

     if($total>0){
        echo "
           
           <table align='center' border ='1'>
           <th class='head' colspan='6' align='center'><b>Assigned Project</b></th>
            <tr>
               <th>ID</th>
               <th>Team Name</th>
               <th>Project Name</th>
               <th>Assigned Date</th>
               <th>Deadline</th>
              
            </tr>
            ";
     while($result = mysqli_fetch_assoc($data))
     {
        echo "
        
          <tr>
           <td>" . $result['p_id']."</td>
           <td>" . $result['t_name']."</td>
           <td>" . $result['p_Name']."</td>
           <td>" . $result['s_date']."</td>
           <td>" . $result['deadline']."</td>
          </tr> 
        
        ";
     }
        echo "</table>";
    } else {
      echo "No data found.";
    }
     
?>

<?php
// database connection code goes here

// select all rows from the table
$result = mysqli_query($con, "SELECT * FROM asgn_project");

// count the number of rows
$count = mysqli_num_rows($result);

// display the count
// echo "Number of Projects in the table: " </th> . $count;

// close database connection
mysqli_close($con);
?>
<div class="count" style="text-align:center;">
  <p><b><h3>Number of projects in the table: <?php echo $count; ?><h3></p>
</div>

    

