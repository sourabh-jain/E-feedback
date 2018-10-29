<?php

include 'database_config.php';
$username=$_POST['username'];
$result=mysqli_query($con,"SELECT * from USER where username='$username'");
$@row=mysqli_fetch_array($result);
if(!row)
{
	echo "<div class='alert-success'>Valid</div>";
	
}
else
	
	echo "<div class='alert-danger'>Already Used</div>";
	