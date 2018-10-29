<?php 
include "database_config.php";
/*
$result=mysqli_query($con,"SELECT * from user");
while(true)
{

	$row=mysqli_fetch_array($result);
	if(!$row)
		break;
	
	
	$username=$row['username'];

	$data = $row['password'];


    $s = hash('sha512', $data, false); 
	
	mysqli_query($con,"UPDATE user SET  password='$s' where username='$username'");
	
		
		
}		
  */

echo hash('sha512','diwan',false);  
	;

?>