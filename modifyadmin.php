<?php   session_start();  ?>
<?php

include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */

include "get_statistics.php";  /* Get details of students who total students registered, no of students who filled feedback and not filled feedback */



/*
	Variables:
		$TOTAL_REGISTERED : Total students who have registered in our system
		$TOTAL_FILLED : Total students who have filled there feedback form
		$TOTAL_LEFT : Total students who are left to fill the feedback form

*/


include "subjects_faculties.php";
	
	


	
/* $QUESTIONS is an array of strings containing all faculty questions 
  $NO_OF_QUESTIONS contains no of faculty questions.
  $IQUESTION is an array of strings containing all infrastructure questions 
   $NO_OF_IQUESTIONS contains no of infrastructure questions
   $FACULTY_NAMES is an array of strings containing all faculty names
   $SUBJECT_CODES is an array of strings containing all subject codes
   $SUBJECT_NAMES is an array of strings containing all subject names
   $NO_OF_SUBJECTS contains no of subjects
   

*/


	$current_activity = "At Modify Admin Page";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");


   /* Find if user is a master admin or not */
   
   $result = mysqli_query($con,"SELECT * from user where typeofaccount=2");
   $MASTERADMINS=array();
	$i=0;
	while($row = mysqli_fetch_array($result))
	{
		$MASTERADMINS[$i++]=$row['username'];
		//echo '<script>alert("'. $MASTERADMINS[$i-1] . '");</script>';
	}
	
	
	if(!in_array($_SESSION['use'],$MASTERADMINS))
		header("Location:adminpanel.php");
	

    /******** Get list of names in $ADMINS who are given admin rights */
	$result = mysqli_query($con,"SELECT * from user where typeofaccount=1 OR typeofaccount=2");
			
				
	$ADMINS=array();
	$i=0;
	while($row = mysqli_fetch_array($result))
	{
		$ADMINS[$i++]=$row['username'];
	}
	$NO_OF_ADMINS=$i;
	
	/***************************************************/
	
	
	
			

	$result = mysqli_query($con,"SELECT * from user");
	
	while(1)
	{
					
					
						
		$row = mysqli_fetch_array($result);
		if(!$row)
			break;
		
		
		if(!in_array($_SESSION['use'],$MASTERADMINS))
			break;
		if(isset($_POST[$row['username']]))
		{	
			$username=$row['username'];
			//echo 'alert("");';
			
			/* Check if that user is already admin or not */
			
			if(in_array($row['username'],$ADMINS))
				$ISADMIN='y';
			else
				$ISADMIN='n';
			
			if($ISADMIN=='y') /* Now take his admin rights */
				mysqli_query($con,"update user set typeofaccount=0 where username='$username'");
			else 
				mysqli_query($con,"update user set typeofaccount=1 where username='$username'");
			
			
			break;
				     
				
		}
		
	}
	

	
	
	




?>
<?php
/*if($_SESSION['type']!='admin')
	header("Location:Login.php"); 
*/
?>

<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="UTF-8">
		
		
		
		
        <title>E-Feedback Form</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
		<script src="js/sortTable.js"></script>
		<script type="text/javascript">
		
		function close(divname) {
		alert('a');
        if(document.getElementById(divname).style.display=='block') {
          document.getElementById(divname).style.display='none';
        }
    }  
		</script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black" onLoad="validate(document.myForm)">

	<?php 
		if($_SESSION['type']=='admin')
			include "apanelelements.php";
		else if($_SESSION['type']=='student')
			include "spanelelements.php";
	?>
	
                <!-- Main content -->
			
			
				
				
                <section class="content">
            
				 
				<?php
				
				
				
					
					echo '<form name="makeadmin" method="post" action="">';
				echo "<b><table border='2'>";
				echo "<tr>
					<td>Username</td>
					<td width='100px'>Admin?</td>
					<td> Give / Take Admin Rights </td>
					<td> View Access </td>
					</tr>
					";
					
			
				/* Reload list of admins */		
				//$ADMINS=array();
				$result = mysqli_query($con,"SELECT * from user where typeofaccount=1 or typeofaccount=2");
			
				
				$ADMINS=array();
				$i=0;
				while($row = mysqli_fetch_array($result))	
				{
					$ADMINS[$i++]=$row['username'];
				}
				$NO_OF_ADMINS=$i;
	
				/***************************************************/
	
			
				$result = mysqli_query($con,"SELECT * from user");
				
				$ISADMIN='n';
				while(1)
				{
					
					
						
					$row = mysqli_fetch_array($result);
					if(!$row)
						break;
				
					if(in_array($row['username'],$ADMINS))
						$ISADMIN='y';
					else
						$ISADMIN='n';
				     
				
					
					if($ISADMIN=='y')
						echo "<tr class='alert alert-success'>";
					else
						echo "<tr class='alert alert-danger'>";
						
					echo "<td>" . $row['username'] . "</td>";
					
					$disabled="disabled";
					if($ISADMIN=='y')
							$disabled="enabled";
				
					if($ISADMIN=='y')
						echo '<td>Yes</td><td>Take Admin Rights&nbsp;&nbsp;&nbsp;<button name="' . $row['username'] . '" class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip" title="Take Admin Rights"><i class="fa fa-minus"></i></button></td>';
					else
						echo '<td>No</td><td>Give Admin Rights&nbsp;&nbsp;&nbsp;&nbsp;<button  name="' . $row['username'] . '" class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Give Admin Rights"><i class="fa fa-plus"></i></button></td>';
						
					echo '<td><form action="viewaccess.php" method="post"><input type="hidden" name="username" value=' . $row['username'] .  '><button name="' . $row['username'] . '" class="btn btn-info btn-sm" title="View/Modify Access" '.$disabled.'>View/Modify Access</button></td></form>';
					
					
				}
				
	
				?>
						
			  
			
                </section><!-- /.content -->
            
								
				
			</aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- FLOT CHARTS -->
        <script src="js/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="js/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="js/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="js/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>


		<script src="js/timer.js"></script>
		<!-- Timer on Submit -->
        <!-- Page script -->
<?php
include 'updatetimestamp.php';
?>
	
		
    </body>
</html>