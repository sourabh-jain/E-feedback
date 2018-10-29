<?php
/* For using form validation u will need to put input elements inside a form, and add an attribute required in that element */

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
		
		$pass2=hash('sha512', $pass, false);

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
	   
	/* Correct the format of rollno */
	
	else if($rollno[0]!='I' /*|| $rollno[1]!='C' || $rollno[1]!='T' /* || $rollno[2]!='-' || $rollno[3]!='2' || $rollno[4]!='K'/* || !($rollno[6]>='0' && $rollno[6]<='9') || !($rollno[5]>='0' && $rollno[5]<='9') || $rollno[7]!='-'*/ )
	{	$error_message='Rollno must should be in proper format of Ix-2Knn-nn where x is either C or T and n is a number from  0 to 9!';
	echo $rollno[0];
	 //echo '<div class="alert-danger">' . $error_message . '</div>';
	 echo "<br><b><div class='alert alert-danger'>ERROR: $error_message !</div></b>";
//	exit;
	 }
	 
	 

	 else
	 {
	 echo "Creating your entry ";
	 mysqli_query($con,"INSERT INTO user values('$user','$pass2','$rollno','$section','$name','$gender','$programme_name','$year','$semester','PENDING',
	 '$datentime','9','90','NO','YES',0,'',0,1,0,0,0)");
	 echo '<script type="text/javascript"> window.open("registered.php","_self");</script>';            //  On Successfull Registration redirects to registered.php
	 }
		
	 
	 
	 

	 
        
		

}        

 ?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black" style="background:url('image/iips5.jpg') no-repeat center center fixed; 
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
            <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
					
                        <input class="form-control" type="text" onfocusout="nameCheck()" required="" data-cip-id="cIPJQ342845640" id="username" name="user" value="<?php if(isset($user)) echo $user; ?>" class="form-control" placeholder="Username"/>                    </div>
					
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required="" data-cip-id="cIPJQ342845640">
                    </div>
					
					
					<div class="form-group">
					
						<input type="name" value="<?php echo $name; ?>" placeholder="Name" class="form-control" name="name" required="" data-cip-id="cIPJQ342845640">
						
                        
                    </div>
					
					
					<div class="form-group">
					
                        <label> Gender</label>
			
						<select class="form-control" name="gender">
						<option id='1' value='M' <?php if($gender=='M') echo 'selected' ?>>Male</option>
						<option id='2' value='F' <?php if($gender=='F') echo 'selected' ?>>Female</option>
						</select>
						
                    </div>
					
					
					<div class="form-group">
					
                        <input type="text" value="<?php echo $rollno; ?>" name="rollno" class="form-control" placeholder="Rollno">
						
                    </div>
					
					<div class="form-group">
					
                        <label>Name Of Programme</label>
						<select class="form-control" name="programme">
						<option id='1' value='M.Tech(IT) 5 + 1/2 Years' <?php if($programme_name=='M.Tech(IT) 5 + 1/2 Years') echo 'selected' ?>>M.Tech(IT) 5 + 1/2 Years</option>
						<option id='2' value='MCA 6 Years(Section A)'  <?php if($programme_name=='MCA 6 Years(Section A)') echo 'selected' ?>>MCA 6 Years (Section A)</option>
						<option id='3' value='MCA 6 Years(Section B)'<?php if($programme_name=='MCA 6 Years(Section B)') echo 'selected' ?>>MCA 6 Years(Section B)</option>
						<option id='4' value='MBA 5 Years'<?php if($programme_name=='MBA 5 Years') echo 'selected' ?>>MBA 5 Years</option>
						</select>
                    </div>
					<div class="form-group">
					<label> Year Of Admission</label>
						<select class="form-control" name="year_of_admission">
						<option id='1' value='2014' <?php if($year=='2014') echo 'selected' ?>>2014</option>
						<option id='2' value='2013' <?php if($year=='2013') echo 'selected' ?>>2013</option>
						<option id='3' value='2012' <?php if($year=='2012') echo 'selected' ?>>2012</option>
						<option id='4' value='2011' <?php if($year=='2011') echo 'selected' ?>>2011</option>
						<option id='5' value='2010' <?php if($year=='2010') echo 'selected' ?>>2010</option>
						<option id='6' value='2009' <?php if($year=='2009') echo 'selected' ?>>2009</option>
						<option id='7' value='2008' <?php if($year=='2008') echo 'selected' ?>>2008</option>
						</select>
                        
                    </div>
					<div class="form-group">
					<label> Semester</label>
			
						<select class="form-control" name="semester">
						<option id='1' value='2' <?php if($semester=='2') echo 'selected' ?>>2</option>
						<option id='2' value='4' <?php if($semester=='4') echo 'selected' ?>>4</option>
						<option id='3' value='6' <?php if($semester=='6') echo 'selected' ?>>6</option>
						<option id='4' value='8' <?php if($semester=='8') echo 'selected' ?>>8</option>
						<option id='5' value='10' <?php if($semester=='10') echo 'selected' ?>>10</option>
						<option id='6' value='12' <?php if($semester=='12') echo 'selected' ?>>12</option>
						
						</select>
                        
                    </div>
					<div class="form-group">
					
                        
                    </div>
					<div class="form-group">
					
                        
                    </div>
					
					
					
					
					
                </div>
				
				
				
				
				
                <div class="footer">                    

                    <button type="submit" name='register' class="btn bg-olive btn-block">Sign me up</button>

                    <a href="login.php" class="text-center">I already have a membership</a>
                </div>
            </form>

        </div>


            
        </div>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        
		<script>
		function nameCheck()
		{
			var f=$("#username").val();
			
			//alert(f);
			$.post( "verifyusername.php", 
			{
				username: f
	
			}


			)
				.done(function( data ) {
					alert( "Data Loaded: " + data );
				$("#nameStatus").html(data);
				});
			}


		
		</script>
    </body>
</html>