<?php   session_start();  

//include 'analysis_header.php';


include 'database_config.php';


$username=$_SESSION['use'];

$result=mysqli_query($con,"Select * from user where username='$username'");
$row=mysqli_fetch_array($result);
if($row['viewresult']==0)
{
	echo "You are not allowed to view this page!";
	exit;
}


/* Change current activity */


$current_activity = "At Results Page";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

	

?>




<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="UTF-8">
		
		
		
		
        <title>E-Feedback Form</title>
         
 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>		 <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
		 <link href="css/ionslider/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
        <!-- ion slider Nice -->
        <link href="css/ionslider/ion.rangeSlider.skinNice.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap slider -->
        <link href="css/bootstrap-slider/slider.css" rel="stylesheet" type="text/css" />
		<link href="css/formcontrol.css" rel="stylesheet" type="text/css" />       
		
		
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
		<script src="js/sortTable.js"></script>
		
		<script src="js/AdminLTE/app.js" type="text/javascript"></script>

		
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
		
		
        <!-- Bootstrap slider -->
        <script src="js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>

		
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
				 
					$resultsperpage=10;
					/* Get total pages */
					$result=mysqli_query($con,"SELECT count(*) from analysis_data");
					$row=mysqli_fetch_array($result);
					$total=$row['count(*)'];
					$totalpages=0;
					if($total%$resultsperpage==0)
						$totalpages=$total/$resultsperpage;
					else
						$totalpages=($total-$total%$resultsperpage)/$resultsperpage + 1; 
					//echo '<script>alert("' . $total . ' ' . $totalpages . ' ");</script>';
					/* Get all the analysis report data */
					
					if(isset($_POST['currentpagesubmit']))
						$currentpage=$_POST['currentpage'];
					else if(isset($_POST['previouspagesubmit']))
						$currentpage=$_POST['previouspage'];
					else
						$currentpage=1;
				
					echo "Page : " . $currentpage;
					echo '<form action="" method="post">
						  <input type="hidden" name="currentpage" value=' . ($currentpage + 1) . '>
						  <input type="hidden" name="previouspage" value=' . ($currentpage - 1 ) . '>';
					if($currentpage!=1)
						echo '	
						  <input  class="alert-success" type="submit" name="previouspagesubmit" value="PreviousPage">	';
					if($currentpage!=$totalpages)
					echo '
						  <input class="alert-success"  type="submit" name="currentpagesubmit" value="NextPage">	';
					echo '</form>  ';
				
				echo '<table class="table" border=1>';
				
				
				/* Get lower n upper limit on the basis of current page n results per page */
				
				$LOWER_LIMIT=($currentpage-1)*$resultsperpage;
				$UPPER_LIMIT=$currentpage*$resultsperpage;
				
				$result=mysqli_query($con,"SELECT * from analysis_data LIMIT $LOWER_LIMIT, $UPPER_LIMIT");
				 
				while($row=mysqli_fetch_array($result))
				{
					$sno=$row['no'] ;
					echo '<tr><td onmouseover=\'$("#a' .$sno .  '").show()\' onmouseout=\'$("#a' .$sno .  '").hide()\' >' . $row['header'];
					
					echo "<div id='a" . $sno . "' style='display:none'>
						 <form target=\"_blank\" action=\"createpdf.php\" method=\"post\">
							<input type=\"hidden\" name=\"sno\" value='" . $sno . "'>
						<input type=\"submit\"  class=\"btn btn-info\" value=\"Generate PDF\"></form>
					
					<br>
						<form target=\"_blank\" action=\"createdoc.php\" method=\"post\">
							<input type=\"hidden\" name=\"sno\" value='" . $sno . "'>
						<input type=\"submit\"  class=\"btn btn-success\" value=\"Generate DOC\"></form>
						</div>
						";
					
					echo '</td></tr><br>';
				
				}
				echo '</table>';
					
				 
				 
				 ?>
		
			   
                </section><!-- /.content -->
            
								
				
			</aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

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

            function labelFormatter(label, series) {
                return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
                        + label
                        + "<br/>"
                        + Math.round(series.percent) + "%</div>";
            }
        </script>
		
		<!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
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

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
 
        <!-- Bootstrap slider -->
        <script src="js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function() {
                /* BOOTSTRAP SLIDER */
                $('.slider').slider();

                
                
               
               
            });
        </script>
		<script>
		function beforesubmit()
		{	
			//alert("");
			var value1=document.getElementsByClassName("tooltip-inner");
			document.getElementById('input1').value=value1[0].innerHTML;
			document.getElementById('input2').value=value1[1].innerHTML;
			
			
			
		}
		
		
		
		</script> 
<?php
include 'updatetimestamp.php';
?>
		</body>
</html>