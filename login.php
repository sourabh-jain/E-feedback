<?php
 // session starts with the help of this function 
  session_start(); 
ob_start();


	/* If a user is trying to register and in case some error occures, he must see the create account tab again. for this there is the fellow session variable */
	$_SESSION['isregister']=0;
	
	$user = '';
     $pass = '';
	 $type = '';
	 $rollno ='';
	 $name = '';
	 $programme_name='';
	 $year = '';
	 $semester = '';
	 $gender='';
	 
	 
	
?> 
<?php
include "database_config.php";



if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

 
 if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
	 $type = $_POST['type'];
	 
	 
	/* If a user is trying to register and in case some error occures, he must see the create account tab again. for this there is the fellow session variable */
	$_SESSION['isregister']=0;
	
	
     $result=mysqli_query($con,"SELECT * from user where username='$user'");
	
	 $row=mysqli_fetch_array($result);
 
	 $USERNAME=$row['username'];
	 
	 $PASSWORD=$row['password'];
	 $pass=hash('sha512', $pass, false);
    echo $USERNAME . $PASSWORD . '<br>' . $user . $pass;
    if($user == $USERNAME && $pass == $PASSWORD)  
    {                                  
	
	
		$flag=0;

		/* Check if a session for that user is already open 
			if no, then make an entry in activesession table, else show error.
		 Make an entry in activesessions */

		$result = mysqli_query($con,"SELECT * from user where username='$USERNAME'");
		/* Get current time */
		$t=time();
		$row = mysqli_fetch_array($result);
		//echo '<script>alert("' . $t .  ':' . $row['lastloggedin'] . '");</script>';
		if($t < 10 + $row['lastloggedin'])
											/* Check if the user's session was closed due to some problems like : 		browserclosed, or internet disconnected, in this case let the user loggin if this activities exceeded 10 seconds */
		{
			echo "<br><b><div class='alert alert-danger'>ERROR: A session with your username is already active. Please close it before login!</div></b>";
	
			
		}
		else
		{
			/* Write entry in activesessions */
			mysqli_query($con,"INSERT INTO user activity='Logged In' where username='$USERNAME')");

		
		
		
		
			if($type=='admin')/* Check if user how wants to be admin, actually has admin privileges or not */
			{
	        
				$result=mysqli_query($con,"SELECT * from user where typeofaccount=1 OR typeofaccount=2");
				while(1)
				{
					$row=mysqli_fetch_array($result);
					if(!$row)
					break;
					if($row['username']==$USERNAME)
					$flag=1;
				}
				if($flag==1)
				{
					$result=mysqli_query($con,"SELECT * from user where username='$user'");
					$row=mysqli_fetch_array($result);
					$_SESSION['use']=$user;
					$_SESSION['type']=$type;
					$_SESSION['programme_name']=$row['programme_name'];
					$_SESSION['semester']=$row['semester'];
					$_SESSION['rollno']=$row['rollno'];
					$_SESSION['section']=$row['section'];
					$_SESSION['status']=$row['status'];
					$_SESSION['name']=$row['name'];
					$_SESSION['gender']=$row['gender'];
					echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successfull Login redirects to home.php
				}
				else
				{
					/* Remove his session */
					mysqli_query($con,"DELETE from activesession where username='$USERNAME'");
					echo "<br><b><div class='alert alert-danger'>ERROR: You do not have admin privileges! <br>Please login as a student!</div></b>";
				}
		
			}	   
			if($type=='student')
			{
				$result=mysqli_query($con,"SELECT * from user where username='$user'");
				$row=mysqli_fetch_array($result);
				$_SESSION['use']=$user;
				$_SESSION['type']=$type;
				$_SESSION['programme_name']=$row['programme_name'];
				$_SESSION['semester']=$row['semester'];
				$_SESSION['rollno']=$row['rollno'];
				$_SESSION['section']=$row['section'];
				$_SESSION['name']=$row['name'];
				$_SESSION['status']=$row['status'];
				$_SESSION['gender']=$row['gender'];
				echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successfull Login redirects to home.php
			}
		}
	}
    else
    {
            echo "<br><b><div class='alert alert-danger'>ERROR: Invalid Username or Password</div></b>";

    }
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
	 $gender=$_POST['gender'];
	 $semester = $_POST['semester'];
	 $section='-';
	 
	 
	if($programme_name=='MCA 6 Years(Section A)')
		$section='A';
	else if($programme_name=='MCA 6 Years(Section B)')
		$section='B';


		
		
		/* hash the password */
		
		$pass=hash('sha512', $pass, false);

	/* Current date and time */
	$t=time();
	$datentime=date("Y-m-d h:i:s",$t);
	 
	 
	 
	 
	 
	 
	 

	
	/* If a user is trying to register and in case some error occures, he must see the create account tab again. for this there is the fellow session variable */
	$_SESSION['isregister']=1;
	
     $result=mysqli_query($con,"SELECT * from user where username='$user'");
	
	 $row=mysqli_fetch_array($result);
 
	 $USERNAME=$row['username'];
	 
	$result=mysqli_query($con,"SELECT * from user where rollno='$rollno'");
	
	$row=mysqli_fetch_array($result);
	 
	 $ROLLNO=$row['rollno'];

	 if($USERNAME!=NULL)
	   echo "<br><b><div class='alert alert-danger'>ERROR: Username already in use, please use different username!</div></b>";
 
	 else if($ROLLNO!=NULL)
	   echo "<br><b><div class='alert alert-danger'>ERROR: Rollno already in use, please use different Roll No!</div></b>";
	 else
	 {
	 echo "Creating your entry ";
	 mysqli_query($con,"INSERT INTO user values('$user','$pass','$rollno','$section','$name','$gender','$programme_name','$year','$semester','PENDING',
	 '$datentime','9','90','NO','YES')");
	 echo '<script type="text/javascript"> window.open("registered.php","_self");</script>';            //  On Successfull Registration redirects to registered.php
	 }
		
	 
	 
	 

	 
        
		

}        

 ?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black" style="background:url('image/iips.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    
   ">
<style>
.form-box:hover
{
	opacity:1.0;
}
</style>

        <div onmouseover="$(this).css('opacity','0.9')" onmouseout="$(this).css('opacity','0.2')" style="opacity:0.2;" class="form-box" id="login-box">
            <div class="header">Login</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        		<label class="control-label" for="password">Type of Account</label>
								<div class="controls">
								
									<select class="form-control" name="type">
									<option id='1' value='student'>Student</option>
									<option id='2' value='admin'>Admin</option>
									</select>
								</div>

                    </div>          
                    
                </div>
                <div class="footer">                                                               
                    <button type="submit" name='login' class="btn bg-olive btn-block">Login</button>  
                    
                    
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>

           
        </div>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        
	
    </body>
</html>