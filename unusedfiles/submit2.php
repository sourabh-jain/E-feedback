<?php   session_start();  ?>
<?php
	include "database_config.php";
	include "session_login.php";	
	include "subjects_faculties.php";         	
	$username=$_SESSION['use'];
	$programme_name=$_SESSION['programme_name'];
	$semester=$_SESSION['semester'];
		  
   

/* Change current activity */

$current_activity = "Submitted Feedback Form";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE activesession set activity='$current_activity' where username='$user'");

	/* Check the status of the user */

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
				 
				 $result=mysqli_query($con,"SELECT status from user where username='$username'");
	$row=mysqli_fetch_array($result);
	if($row['status']=='OK')
	  echo "<div class='alert alert-danger'> You have already submitted the data!</div>";
	else
	{
	
		$_SESSION['status']='OK';
		/* MARK STATUS AS OK FOR THE USER */
		$result=mysqli_query($con,"UPDATE user SET status='OK' where username='$username'");
		echo "<div class='alert alert-success'>Data Submitted Successfully!</div>";
	
		  
		  
		  
		  
		  
		$data='';	  
//		$data .='{';
		for($i=1;$i<=$NO_OF_IQUESTIONS;$i++)
		{
			if($i!=1)
			$data .=',';

			$data .=getvalue($_POST['i' . ($i) ]);
		
		}
		$data .='#';
		/*
		$data .='{' . getvalue($_POST['books']) . ',' . getvalue($_POST['basic']) . ',' .  getvalue($_POST['tech']) . ',' . getvalue($_POST['photocopy']) . ',' . getvalue($_POST['internet']) . ',' . getvalue($_POST['room']) . '}'; 
		
*/		
		
		
		
		
		
		
		
		
		/* For faculty */
		for($i=1;$i<=$NO_OF_QUESTIONS;$i++)
		{
	//		$data .='{';
	
			for($j=1;$j<=$NO_OF_SUBJECTS;$j++)
			{
				if($j!=1)
					$data .=',';
				$data .=$_POST['f' . $i . $j];
			}
			$data .='#';
				
		}
		  
		  
		  
		  
		  
		 $username=$_SESSION['use'];
		 /* Get cgpa n attendance of user */
		 $result=mysqli_query($con,"SELECT * from user where username='$username'");
		 $row=mysqli_fetch_array($result);
		 $cgpa=$row['cgpa'];
		 $attendance=$row['attendanceperc'];
		 
		/* Write feedback data to feedback_data table */
			
		$result=mysqli_query($con,"INSERT INTO feedback_data VALUES('$programme_name','$semester','$data','$cgpa','$attendance')");
			
		  
		  
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
        <script type="text/javascript">

		
		
            $(function() {


                var donutData = [
                    {label: "Filled", data: <?php echo (100*$TOTAL_FILLED/$TOTAL_REGISTERED);?>, color: "#3c8dbc"},
                
                    {label: "Not Filled", data: <?php echo (100*$TOTAL_LEFT/$TOTAL_REGISTERED);?>, color: "#00c0ef"}
                ];
                $.plot("#donut-chart", donutData, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            innerRadius: 0,
                            label: {
                                show: true,
                                radius: 1 / 3,
                                formatter: labelFormatter,
                                threshold: 0.1
                            }

                        }
                    },
                    legend: {
                        show: false
                    }
                });
                /*
                 * END DONUT CHART
                 */

            });

            /*
             * Custom Label formatter
             * ----------------------
             */
            function labelFormatter(label, series) {
                return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
                        + label
                        + "<br/>"
                        + Math.round(series.percent) + "%</div>";
            }
        </script>
    </body>
</html>