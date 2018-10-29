<?php  session_start(); 
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
	 
	 
	
?>  // session starts with the help of this function 

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
    
    if($user == $USERNAME && $pass == $PASSWORD)  
    {                                  
	
	
		$flag=0;

		/* Check if a session for that user is already open 
			if no, then make an entry in activesession table, else show error.
		 Make an entry in activesessions */

		$result = mysqli_query($con,"SELECT * from activesession where username='$USERNAME'");
		
		$row = mysqli_fetch_array($result);
		if($row['username']!=null)
		{
			echo "<br><b><div class='alert alert-danger'>ERROR: A session with your username is already active. Please close it before login!</div></b>";
	
			
		}
		else if($row['username']==null)
		{
			/* Write entry in activesessions */
			mysqli_query($con,"INSERT INTO activesession VALUES('$USERNAME','Logged In')");

		
		
		
		
			if($type=='admin')/* Check if user how wants to be admin, actually has admin privileges or not */
			{
	        
				$result=mysqli_query($con,"SELECT * from user where username='$user' AND typeofaccount=1 OR typeofaccount=2");
				while(1)
				{
					$row=mysqli_fetch_array($result);
					if(!$row)
						break;
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
<html>
<head>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min2.css">

<link rel="stylesheet" href="css/bootstrap-responsive.min2.css" class="cssdeck">


<title> Login Page   </title>

</head>

<body>

<div class="" id="loginModal">
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="<?php if($_SESSION['isregister']==0) echo 'active' ; ?>"><a href="#login" data-toggle="tab">Login</a></li>
				<li class="<?php if($_SESSION['isregister']==1) echo 'active' ; ?>"><a href="#create" data-toggle="tab">Create Account</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane  <?php if($_SESSION['isregister']==1) echo 'fade' ;else echo 'active in'; ?>"id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
									<input type="text" id="username" name="user" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="pass" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
							
								<label class="control-label" for="password">Type of Account</label>
								<div class="controls">
								
									<select name="type">
									<option id='1' value='student'>Student</option>
									<option id='2' value='admin'>Admin</option>
									</select>
								</div>
							</div>
							
							
							
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success" name="login">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				
				<div class="tab-pane  <?php if($_SESSION['isregister']==0) echo 'fade' ;else echo 'active in'; ?>" id="create">


				<form id="tab" action='' method="post">
						<label>Username</label>
						<input type="text" value="<?php if(isset($user)) echo $user; ?>" name="user" class="input-xlarge">
						<label>Password</label>
						<input type="password" value="" name="pass" class="input-xlarge">
						<label>Type of Account</label>
						<select name="type">
						<option id='1' value='student'
						<?php if($type=='student') echo 'selected' ?>>
						Student</option>
						<option id='2' value='admin' <?php if($type=='admin')
						echo 'selected' ?>>Admin</option>
						</select>
						<label>Name</label>
						<input type="text" value="<?php echo $name; ?>" name="name" class="input-xlarge">
						<label> Gender</label>
			
						<select name="gender">
						<option id='1' value='M' <?php if($gender=='M') echo 'selected' ?>>Male</option>
						<option id='2' value='F' <?php if($gender=='F') echo 'selected' ?>>Female</option>
						</select>
						<label>RollNo</label>
						<input type="text" placeholder="IT-2K11-01" value="<?php echo $rollno; ?>" name="rollno" class="input-xlarge">
						<label>Name Of Programme</label>
						<select name="programme">
						<option id='1' value='M.Tech(IT) 5 + 1/2 Years' <?php if($programme_name=='M.Tech(IT) 5 + 1/2 Years') echo 'selected' ?>>M.Tech(IT) 5 + 1/2 Years</option>
						<option id='2' value='MCA 6 Years(Section A)'  <?php if($programme_name=='MCA 6 Years(Section A)') echo 'selected' ?>>MCA 6 Years (Section A)</option>
						<option id='3' value='MCA 6 Years(Section B)'<?php if($programme_name=='MCA 6 Years(Section B)') echo 'selected' ?>>MCA 6 Years(Section B)</option>
						<option id='4' value='MBA 5 Years'<?php if($programme_name=='MBA 5 Years') echo 'selected' ?>>MBA 5 Years</option>
						</select>

						<label> Year Of Admission</label>
						<select name="year_of_admission">
						<option id='1' value='2014' <?php if($year=='2014') echo 'selected' ?>>2014</option>
						<option id='2' value='2013' <?php if($year=='2013') echo 'selected' ?>>2013</option>
						<option id='3' value='2012' <?php if($year=='2012') echo 'selected' ?>>2012</option>
						<option id='4' value='2011' <?php if($year=='2011') echo 'selected' ?>>2011</option>
						<option id='5' value='2010' <?php if($year=='2010') echo 'selected' ?>>2010</option>
						<option id='6' value='2009' <?php if($year=='2009') echo 'selected' ?>>2009</option>
						<option id='7' value='2008' <?php if($year=='2008') echo 'selected' ?>>2008</option>
						</select>

						<label> Semester</label>
			
						<select name="semester">
						<option id='1' value='2' <?php if($semester=='2') echo 'selected' ?>>2</option>
						<option id='2' value='4' <?php if($semester=='4') echo 'selected' ?>>4</option>
						<option id='3' value='6' <?php if($semester=='6') echo 'selected' ?>>6</option>
						<option id='4' value='8' <?php if($semester=='8') echo 'selected' ?>>8</option>
						<option id='5' value='10' <?php if($semester=='10') echo 'selected' ?>>10</option>
						<option id='6' value='12' <?php if($semester=='12') echo 'selected' ?>>12</option>
						
						</select>

	
	
						
						<div>
							<button class="btn btn-primary" name="register">Create Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



<script class="cssdeck" src="js/jquery.min.js"></script>
<script class="cssdeck" src="js/bootstrap.min.js"></script>
</body>
</html>