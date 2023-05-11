<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse:collapse;
            border-width: 2px;
            margin-top:300px;
            margin-right:16.5%;
            position:relative;
         }
         th , td {
              padding:12px;
            }
        
        tr {
            border-spacing: 5px;
          }
         .head{
            background:linear-gradient(90deg, #673ab7 0%, #512da8);
            color:white;
        }
         .count p{
            color:white;
            /* margin-top:-100px; */
           }
           .count{
            height:13vmin;
            width: 22vmin;
            border:1px solid black;
            position:fixed;
            /* background-color:#21242b; */
            background-color:#483d8b	;
            border-radius:0.5em;
            margin-top:-490px;
            margin-left:85.8%;
            /* padding-top:5px; */
            /* font-family: sans-serif; */
            font-family:poppins;
        }
        .php{
            color:white;
            font-size:20px;
        }
        /* .php b{
             margin-top:15px;
             padding-top:10px;
           } */
</style>
</head>

<body>
    
<?php
include("dbcon.php");
$qry = "SELECT * FROM add_project";
$data = mysqli_query($con,$qry);

if(!$data){
    die("Query failed :".mysqli_error($con));
}
$total = mysqli_num_rows($data);

if($total>0){
echo"
<table align='center'border='1'>
   <th class='head' colspan='6' align='center'>Project List</th>
<tr>
   <th>Sr.No.</th>
   <th>Project Name</th>
   <th>Project Description</th>
   <th>Date</th>
   <th>Deadline</th>
</tr>
";
while($result=mysqli_fetch_assoc($data)){
    echo"
    <tr>
       <td>" .$result['id'] ."</td>
       <td>" .$result['P_Name'] ."</td>
       <td>" .$result['P_decp'] ."</td>
       <td>" .$result['date'] ."</td>
       <td>" .$result['deadline'] ."</td>
    </tr>
    ";
}

echo "</table>";
}else{
   echo "No data found.";
}
?>
<?php
// database connection code goes here

// select all rows from the table
$result = mysqli_query($con, "SELECT * FROM add_project");

// count the number of rows
$count = mysqli_num_rows($result);

// display the count
// echo "Number of Projects in the table: " </th> . $count;

// close database connection
mysqli_close($con);
?>

<div class="count" style="text-align:center;">
  <p>Number of projects in the table:</p><b class="php"><?php echo $count; ?>
</div>

</body>
</html>
