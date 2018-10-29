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

$current_activity = "Editing Feedback Form";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

		
		
		  
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
					include "feedbackform.php";
				?>
                </section><!-- /.content -->
            
				
				
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

<script type="text/javascript">
			function checkBoxes()
			{
				
				
						
			var boxes = $('.input-small').filter(function()
			{ 
				$value=$(this).val(); 
				if($value>=1 && $value<=5)
				{
					//$(this).focus();
					return $value;
				}
				return;
			});	
			
			var fbox=boxes.length;
			
			
			var tbox=$('.input-small').length;
			
			/*if(fbox!=tbox)
			{
				$('[name=wrongsubmit']).css('display','block');
			/*	sleep(100);
				$('[name=wrongsubmit']).css('display','none');
				*/
				
		//	}
			if(fbox==tbox)
			 return true;
			else
			{
				alert('You need to fill all the textboxs below with values 1 to 5 before submitting! ');
				
				return false;
			}
	
			}
				

			function getBoxes(inputname) {
            
			
			
			
			var value=$('[name=' + inputname.name + ']').val();
			var color='';
			if(value<0 || (value !=1 && value!=2 && value!=3 && value!=4 && value!=5))
				color='#FF8282';
			else if(value<=2)
				color='#FFC266';
			else if(value<=4)
				color='#C299FF';
			else
				color='#C2FFAD';
				
				
			var boxes = $('.input-small').filter(function()
			{ 
				$value=$(this).val(); 
				if($value>=1 && $value<=5)
				{
					//$(this).focus();
					return $value;
				}
				return;
								
			
			
			});		
			
			$('[name=' + inputname.name + ']').css('border-color',color);
			var fbox=boxes.length;
			
			
			var tbox=$('.input-small').length;
			//var tbox=totalboxes.length;
	
	
	
	
            //$('[name=progressbar]').html(fbox*100/tbox + "% complete");
			var perc=fbox*80/tbox;
			$('[name=progress_bar]').css('width',perc + '%');
			$('[name=completed_perc]').html(Math.floor(perc) + '% Compeleted');
			
			if(perc<33)
				$('[name=progress_bar]').removeClass('progress-bar progress-bar-danger').removeClass('progress-bar progress-bar-warning').removeClass('progress-bar progress-bar-success').addClass('progress-bar progress-bar-danger');
			
			if(perc>33)
				$('[name=progress_bar]').removeClass('progress-bar progress-bar-danger').addClass('progress-bar progress-bar-warning');
			
			if(perc>66)
				$('[name=progress_bar]').removeClass('progress-bar progress-bar-warning').addClass('progress-bar progress-bar-success');
		
				
			
			
			
			
        }
    </script>
	
	<?php
include 'updatetimestamp.php';
?>

		
    </body>
</html>