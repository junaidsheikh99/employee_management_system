<html>
    <head>
        <title>displaying data</title>
        <style>
            table{
                border-collapse:collapse;
                margin-top:50px;
                position:absolute;
                margin-left:500px;
                /* width: 300px; */
            }
            .head{
              background:black; 
            }
            th , td {
              padding:12px;
            }
            th{
              background: linear-gradient(90deg,#673ab7 0%, #512da8);
              color: white;
              font-weight:bold;
            }
            td{
                border:2px solid #ddd;
            }
            .update{
              background-color:#009900;
            }
            .update:hover{
              background-color:black;
            }
            .update a{
              text-decoration:none;
              color:white;
            }
            .td2{
              background-color:red;
              /* color:white; */
          }
            .td2 a{
              text-decoration:none;
              color:white;
            }
            .td2:hover{
              background-color:#E60026;
            }
        </style>
    </head>        
<body>
    
</body>
</html>

<?php
include("../dbcon.php");
$qry = "SELECT * FROM createtm";
$data = mysqli_query($con, $qry);

if (!$data) {
  die("Query failed: ".mysqli_error($con));
}

$total = mysqli_num_rows($data);

if ($total > 0) {
  echo "
 <table border='1' align='center'>
      <th class='head' align ='center' colspan='8'> Team Details</th>
      <tr>
          <th align='center'>Team ID</th>
          <th>Team Names</th>
          <th>Leader </th>
          <th>Member 1</th>
          <th>Member 2</th>
          <th colspan='2'>Make Changes</th>
          
        </tr>
         ";
  while ($result = mysqli_fetch_assoc($data)) {
    echo "
      <tr>
         <td>" . $result['Team_ID']." </td>
         <td>" . $result['team'] . "</td>
         <td>" . $result['leader'] . "</td>
         <td>" . $result['member1'] . "</td>
         <td>" . $result['member2'] . "</td>
         <td class='update' align='center'><a href = 'update.php?tname=$result[team]&leader=$result[leader]member1=$result[member1]member2=$result[member2]'>Edit</td>
         <td align='center' class='td2'><a href='#'>Delete</td>
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
$result = mysqli_query($con, "SELECT * FROM createtm");

// count the number of rows
$count = mysqli_num_rows($result);

// display the count
// echo "Number of Projects in the table: " </th> . $count;

// close database connection
mysqli_close($con);
?>
<div style="text-align:center;">
  <p><b>Number of projects in the table: <?php echo $count; ?></p>
</div>
