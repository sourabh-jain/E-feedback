<?php   session_start(); 
ob_start(); ?>

<html>
  <head>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">
  
  <title> Home </title>
  </head>
  <body>
  
<?php

include "database_config.php";

$user = $_SESSION['use'];
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
		   

		   
		if($_SESSION['type']=='admin')
			header("Location:adminpanel.php");  
		else if($_SESSION['type']=='student')
			header("Location:studentpanel.php");  
		
		
          echo '<div class="alert alert-success">Welcome ' . $_SESSION['use'];
		  echo '<br> You logged in as : ' . $_SESSION['type'] . '</div>';

        //  echo "Login Success";
		
		

          echo "<br><a href='logout.php'> Logout</a> "; 
		  
		  
		  /* Check the feedback fill status of the user */
		 $result=mysqli_query($con,"SELECT * from user where username='$user'");
	
	 $row=mysqli_fetch_array($result);
	 $STATUS=$row['status'];
	 if($STATUS=='OK')
	   echo "<br><div class='alert alert-warning'>You have already filled the feedback form!</div>";
	 else
	   echo "<br><div class='alert alert-info'><a href='form_2.php'>Click here</a> to fill the feedback form now.</div>";
	  
	  
	  
	 if($_SESSION['type']=='admin') /* Give admin interface */
	 {
		echo "<br><div class='alert alert-info'><a href='feedback_statistics.php'>Click here</a> to access the feedback statistics page.</div>";
	 }
  
		  
?>
<br>

</body>
</html>