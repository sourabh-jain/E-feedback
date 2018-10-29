<?php
include 'database_config.php';
$username=$_POST['username'];
/*  Get the time */
$t=time();

/* Update the time stamp */

$result=mysqli_query($con,"UPDATE user set lastloggedin='$t' where username='$username'");


?>