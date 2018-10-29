<?php   session_start();  ?>
<?php
     
include "database_config.php";
include "session_login.php";  /* Contents information regarding session header */
include "feedback_status.php"; /* Check the feedback fill status of the user */  
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
	
		

/* Change current activity */

$current_activity = "Verifying/Previewing Feedback Form";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

		  
?>
<?php
/* Writing data to session */


for($i=1;$i<=$NO_OF_IQUESTIONS;$i++)
{
	$_SESSSION['i' . $i] = $_POST['i' . $i ];
}
/*
$_SESSION['books']=$_POST['books'];
$_SESSION['basic']=$_POST['basic'];
$_SESSION['tech']=$_POST['tech'];
$_SESSION['photocopy']=$_POST['photocopy'];
$_SESSION['internet']=$_POST['internet'];
$_SESSION['room']=$_POST['room'];
*/

for($i=1;$i<=$NO_OF_QUESTIONS;$i++)
   for($j=1;$j<=$NO_OF_SUBJECTS;$j++)
       $_SESSION['f' . $i .$j ] = $_POST['f' . $i . $j];

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
					include "feedbackform.php";
				?>
                </section><!-- /.content -->
            			  
			
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
		<?php
include 'updatetimestamp.php';
?>

    </body>
</html>