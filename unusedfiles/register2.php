<?php  session_start(); ?>  // session starts with the help of this function 

<?php
include "database_config.php";



if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['register']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
	 $type = $_POST['type'];
	 $rollno =$_POST['rollno'];
	 $name = $_POST['name'];
	 $programme_name=$_POST['programme'];
	 $year = $_POST['year_of_admission'];
	 $semester = $_POST['semester'];
	 $gender = $_POST['gender'];
	 
	 

	
     $result=mysqli_query($con,"SELECT * from user where username='$user'");
	
	 $row=mysqli_fetch_array($result);
 
	 $USERNAME=$row['username'];
	 
	
	$result=mysqli_query($con,"SELECT * from user where rollno='$rollno'");
	
	 $row=mysqli_fetch_array($result);
	 
	 $ROLLNO=$row['rollno'];

	 if($USERNAME!=NULL)
	   echo "<br><b><font color='red'>ERROR: Username already in use, please use different username!</b></font>";
 
	 else if($ROLLNO!=NULL)
	   echo "<br><b><font color='red'>ERROR: Rollno already in use, please use different Roll No!</b></font>";
	 else
	 {
	 echo "Creating your entry ";
	 mysqli_query($con,"INSERT INTO user values('$user','$pass','$rollno','-','$name','$gender','$programme_name','$year','$semester','PENDING')");
	 
	 }
		
	 
	 
	 

	 
        
		echo '<script type="text/javascript"> window.open("registered.php","_self");</script>';            //  On Successfull Registration redirects to registered.php

}        


 ?>
