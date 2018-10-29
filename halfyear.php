<?php   session_start();  ?>
<?php
     
include "database_config.php";
include "session_login.php";  /* Contents information regarding session header */
	
/* Change current activity */

$current_activity = "At Half Year Setup Page";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

	
		  
?>

<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="UTF-8">
		
		
		
		
        <title>Half Year Setup</title>
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
		<script>
		function submitForm(action)
		{
			document.getElementById('form1').action = action;
			document.getElementById('form1').submit();
		}
	</script>
	<title>E-Feedback Form</title>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
	
    <body class="skin-black">

	<?php 
		if($_SESSION['type']=='admin')
			include "apanelelements.php";
		else if($_SESSION['type']=='student')
			include "spanelelements.php";
	?>
	
                <!-- Main content -->
			
			<section class="content">
            <?php
			
			

			if(isset($_POST['submit']))
			{
				/* Perform update */
			
		
	
				/* Get update data from table */
				$result=mysqli_query($con,"SELECT * from half_year_setup");
				$row=mysqli_fetch_array($result);
				$semtype=$row['semtype'];
				$nextupdate=$row['nextupdate'];
				$lastupdate=$row['lastupdate'];
	
		
	
				//	$lastdate=new DateTime($lastupdate);
				//$nextdate=new DateTime($nextupdate);
	
	
				$t=time();
				$datentime=date("Y-m-d h:i:s",$t);
			
				/* Update the changes */
				mysqli_query($con,"UPDATE half_year_setup set lastupdate='$datentime'");
		
				/* Set nextupdate date */
				mysqli_query($con,"UPDATE half_year_setup set nextupdate=ADDDATE( lastupdate, INTERVAL 6 MONTH )");
	
		
	
	
	
				/* Update semesters */ 
				mysqli_query($con,"UPDATE user set semester=semester+1");
				
				echo'<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Alert!</b> Semesters of students are updated!.
                                    </div>';
									
									
				mysqli_query($con,"UPDATE user set backyear='NO', allowed='YES',  status='PENDING'");
				echo'<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Alert!</b> Feedback Status of all Students Refreshed.
                                    </div>';
				
				/* Update sem type */
				if($semtype=='ODD')
					$semtype='EVEN';
				else
					$semtype='ODD';
				mysqli_query($con,"UPDATE half_year_setup set semtype='$semtype'");
				
				echo'<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Alert!</b> Sem Type Updated!
                                    </div>';
									
				
	
	
	
		
			}			
		
	
			
			?>
				 
			<?php
			
			/* Get update data from table */
			$result=mysqli_query($con,"SELECT * from half_year_setup");
			$row=mysqli_fetch_array($result);
			$semtype=$row['semtype'];
			$nextupdate=$row['nextupdate'];
			$lastupdate=$row['lastupdate'];
			$lastdate=new DateTime($lastupdate);
			$nextdate=new DateTime($nextupdate);
			$t=time();
			$datentime=date("Y-m-d h:i:s",$t);
			$todaydate = new DateTime($datentime);
			echo '<br><br><table style="width:500px" border=1 class="table">';
			echo '<tr class=alert-success><td>Current Semester Type : </td><td> ' . $semtype . ' Semester</td></tr>';
			echo '<tr class=alert-success><td>Previous Update on :  </td><td>' . date_format($lastdate,"d M Y, h:m:s") . '</td></tr>' ;
	
			if($todaydate>$nextdate)
			{
				echo '<tr class=alert-success><td>Next Update Allowed From: </td><td>' . date_format($nextdate,"d M Y, h:m:s") . '</td></tr>';
			}
			else
				echo '<tr class=alert-danger><td>Next Update Allowed From: </td><td>' . date_format($nextdate,"d M Y, h:m:s") . '</td></tr>';
			echo '<tr class=alert-success><td>Today\'s Date : </td><td> ' . date_format($todaydate,"d M Y, h:m:s") . '</td></tr>';
			echo'</table>';
			
			if($todaydate>$nextdate)
			{
				echo "<form action='' method='post'>
					  <input type='submit' name='submit' value='Click here to perform Half Year Update!'>
					  </form>";
			}
			else
			{
				echo '<div class="alert alert-danger alert-dismissable">
                                        <i class="fa fa-ban"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        <b>Alert!</b> Cannot perform update now, Please wait till ' . date_format($nextdate,"d M Y, h:m:s") , '  </div>';
				
			}
			
			?>
			
                </section><!-- /.content -->
            
				
				
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
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

<?php
include 'updatetimestamp.php';
?>
		
    </body>
</html>