<?php
$host ='localhost';
$dbname = 'emp_system';
$username = 'root';
$password = '';

$con = new mysqli($host, $username, $password, $dbname);

   if ($con->connect_error)
   {
    die ("Connection is not done..!".$con->connect_error);
   }
   // else{
   //  echo "Done..";
   ?>