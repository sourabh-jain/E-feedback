<?php   session_start();  ?>
<?php

include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */


if(isset($_POST['submit']))
{
	@$fillfeedbackform='off';
	@$viewfeedbackstats	='off';
	@$performanalysis='off';
	@$viewresult='off';
	
	
	
	/* Update the changes */
	@$fillfeedbackform=$_POST['fillfeedbackform'];
	@$viewfeedbackstats	=$_POST['viewfeedbackstats'];
	@$performanalysis=$_POST['performanalysis'];
	@$viewresult=$_POST['viewresult'];
	$username=$_POST['username'];
	echo  $fillfeedbackform . $viewfeedbackstats . $performanalysis . $viewresult;
	//echo'<script>alert("'.$fillfeedbackform . $viewfeedbackstats . $performanalysis . $viewresult.'");</script>';
	$r1=0;
	$r2=0;
	$r3=0;
	$r4=0;
	
	if($fillfeedbackform=='on')
		$r1=1;
	if($viewfeedbackstats=='on')
		$r2=1;
		
	if($performanalysis=='on')
		$r3=1;
	if($viewresult=='on')
		$r4=1;

	//echo '<script>alert("'.$r1. $r2 . $r3. $r4.'");</script>';	
	mysqli_query($con,"update user set fillfeedbackform=$r1, viewfeedbackstats=$r2, performanalysis=$r3,viewresult='$r4' where username='$username'");
	
//	$result=mysqli_query($con,"update user set s
	
	
}

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
				
				$username=$_POST['username'];
				/* Check if the username is admin or not */
/*				$result=mysqli_query($con,"SELECT * from user where username='$username'");
				$row=mysqli_fetch_array($result);
				if($row['typeofaccount']=='0')
				{
					echo"<br><b><div class='alert alert-danger'>ERROR: $username needs to be admin first inorder to modify his access !</div></b>";
				}
				//echo $username;
				/* Fetch the access rights of that user and other details*/
				
				
				/* Promote him as admin */
				mysqli_query($con,"update user set typeofaccount='1' where username='$username'");
				
				$r=mysqli_query($con,"select * from user where username='$username'");
				$row=mysqli_fetch_array($r);
				echo '<form action="" method="post">';
				echo '<table class="table">';
				echo "<tr>
							<td class='alert-info'>Username : </td>
							<td class='alert-success'> $username</td>
							<td class='alert-warning'></td><td></td></tr>
					<tr>";
				
						
							
				echo " <tr>
							<td class='alert-info'>Can Fill The Feedback Form : </td>";
							if($row['fillfeedbackform']==0)	
								echo "<td  class='alert-danger'>NO</td>";
							else
								echo "<td  class='alert-success'> YES</td>";
							echo "<td><input type='checkbox' class='checkbx' name='fillfeedbackform'></td></tr>";
							
				echo"<tr>
							<td class='alert-info'>Can access Feedback Statistics : </td>";
							if($row['viewfeedbackstats']==0)	
								echo "<td  class='alert-danger'>NO</td>";
							else
								echo "<td  class='alert-success'>YES</td>";
							echo "<td><input type='checkbox' class='checkbx' name='viewfeedbackstats'></td></tr>";
				echo"<tr>
							<td class='alert-info'>Can Perform Analysis : </td>";
							if($row['performanalysis']==0)	
								echo "<td  class='alert-danger'>NO</td>";
							else
								echo "<td  class='alert-success'>YES</td>";
							echo "<td><input type='checkbox' class='checkbx' name='performanalysis' ></td></tr>";
							
				echo"<tr>
							<td class='alert-info'>Can access Results : </td>";
							if($row['viewresult']==0)	
								echo "<td  class='alert-danger'>NO</td>";
							else
								echo "<td  class='alert-success'>YES</td>";
							echo "<td><input type='checkbox' class='checkbx' name='viewresult' ></td></tr>";
						echo "</table>";
						echo '<input type="hidden" name="username" value='.$username.'><input type="submit" name="submit" value="Edit" class="btn-success"></form>';
					
				
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