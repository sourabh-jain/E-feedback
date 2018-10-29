<?php   session_start();  ?>

<?php
function getvalue($grade)
{	
	
	switch($grade)
	{
		case 'Very Poor': return '1';
		case 'Poor': return '2';
		case 'Average': return '3';
		case 'Good' : return '4';
		case 'Excellent' : return '5';
	}
}
	include "database_config.php";
	include "session_login.php";	
	include "subjects_faculties.php";         	
	$username=$_SESSION['use'];
	$programme_name=$_SESSION['programme_name'];
	$semester=$_SESSION['semester'];
		  
   
	/* Check the status of the user */
			
	$result=mysqli_query($con,"SELECT status from user where username='$username'");
	$row=mysqli_fetch_array($result);
	if($row['status']=='OK')
	  echo "<div class='alert alert-danger'> You have already submitted the data!</div>";
	else
	{
		/* MARK STATUS AS OK FOR THE USER */
		$result=mysqli_query($con,"UPDATE user SET status='OK' where username='$username'");
		echo "<div class='alert alert-success'>Data Submitted Successfully!</div>";
	
		  
		  
		  
		  
		  
		$data='';	  
		
		/* For infrastructure */
		$data .='{' . getvalue($_POST['books']) . ',' . getvalue($_POST['basic']) . ',' .  getvalue($_POST['tech']) . ',' . getvalue($_POST['photocopy']) . ',' . getvalue($_POST['internet']) . ',' . getvalue($_POST['room']) . '}'; 
		
		
		
		
		
		
		
		
		/* For faculty */
		for($i=1;$i<=$NO_OF_QUESTIONS;$i++)
		{
			$data .='{';
	
			for($j=1;$j<=$NO_OF_SUBJECTS;$j++)
			{
				if($j!=1)
					$data .=',';
				$data .=$_POST['f' . $i . $j];
			}
			$data .='}';
				
		}
		  
		  
		  
		  
		  
		  
		/* Write feedback data to feedback_data table */
			
		$result=mysqli_query($con,"INSERT INTO feedback_data VALUES('$programme_name','$semester','$data')");
			
		  
		  
	}	  
		  
		  
		  
		  
		  
		  
		 
	
?>

<html>
  <head>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">
  
  <title> Submitted Success</title>
  </head>
  <body>
  <br><br>
<?php
include 'updatetimestamp.php';
?>
