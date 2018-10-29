<?php
/* This file has details of database configuration */


$server = "";
$username = "root";
$password = "";
$database_name = "feedback";



$con=mysqli_connect($server,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}


?>