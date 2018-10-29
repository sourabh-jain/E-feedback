<?php

$user = $_SESSION['use']; 
$result=mysqli_query($con,"SELECT * from user where username='$user'");
	
	 $row=mysqli_fetch_array($result);
	 $STATUS=$row['status'];
	 if($STATUS=='OK')
	    echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  If feedback status is OK for that user than it redirects him to home.php

?>