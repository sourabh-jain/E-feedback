<?php   session_start(); 
ob_start(); ?>
<?php

if($_SESSION['type']!='admin')
	header("Location:studentpanel.php");
	


include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */
include "get_statistics.php";  /* Get details of students who total students registered, no of students who filled feedback and not filled feedback */
/*	Variables:
		$TOTAL_REGISTERED : Total students who have registered in our system
		$TOTAL_FILLED : Total students who have filled there feedback form
		$TOTAL_LEFT : Total students who are left to fill the feedback form

*/

/*if($_SESSION['type']!='admin')
	header("Location:Login.php"); 
*/

	
/* Change current activity */

$current_activity = "At AdminPanel";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE activesession set activity='$current_activity' where username='$user'");

	






$NO_OF_ROWS_TO_DISPLAY = $TOTAL_REGISTERED; /* Default */

$LOWER_RANGE = 1;  /* Upper range of rows to view */
$UPPER_RANGE = $TOTAL_REGISTERED; /* Lower range of rows to view */

$PFILTER1=''; /* Programme Name filter */
$PFILTER2=''; /* Programme Name filter */
$PFILTER3=''; /* Programme Name filter */
$PFILTER4=''; /* Programme Name filter */

$STATUS1='OK';
$STATUS2='PENDING';
$SORT_BY_NAME='asc';
if(isset($_POST['filter_submit']))
{
	/* Get upper lower range */

	$data = $_POST['input1'];
	$range = explode(" ", $data);
	
	
	$LOWER_RANGE=$range[0];
	$UPPER_RANGE=$range[2];
	
	$LOWER_RANGE=$LOWER_RANGE-1;  /* As MYSQL rows starts from index 0 */
	/*echo '<script>alert("' . $LOWER_RANGE . '");</script>';
	echo '<script>alert("' . $range[1] . '");</script>';

	//	echo '<script>alert("' . $UPPER_RANGE . '");</script>'; */



	
	
	
	//$NO_OF_ROWS_TO_DISPLAY=$UPPER_RANGE-$LOWER_RANGE;
	//$PFILTER1=$_POST['c1'];
	$SORT_BY_NAME=$_POST['sortbyname'];
	if($_POST['status']=='BOTH')
	{
		$STATUS1='OK';
		$STATUS2='PENDING';
	}
	else
	{
		$STATUS1=$_POST['status'];
		$STATUS2=$_POST['status'];
	}
		
		
		
	
	
		
	
	
	
}
	

	
/* Track all users in activesession */

$result = mysqli_query($con,"SELECT * from activesession");	
$ACTIVEUSERS=array();
$USERACTIVITY=array();
$i=0;
while(true)
{
	$row=mysqli_fetch_array($result);
	if(!$row)
		break;
	$ACTIVEUSERS[$i]=$row['username'];
	$USERACTIVITY[$i]=$row['activity'];
	$i++;
	
}


include "checkhalfyearsetup.php";  /* Check if its time for half year setup or not */
	
	


?>

<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="UTF-8">
		
		
		
		
        <title>Admin Panel | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
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

		
		<script src="js/sortTable.js"></script>
		<script type="text/javascript">
		
		function close(divname) {
		alert('a');
        if(document.getElementById(divname).style.display=='block') {
          document.getElementById(divname).style.display='none';
        }
    }  
		</script>
        
        
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
    <body class="skin-black" onLoad='initTable("table0")'>
<?php
				include "apanelelements.php";
				?>
                <!-- Main content -->
			
			
				
				
                <section class="content">
				
                 <div class='col-lg-3 col-xs-6'>
					<div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        1
                                    </h3>
                                    <p>
                                       Fill The Feedback
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a    <a href="<?php
							if($_SESSION['status']=='PENDING') echo 'form2.php';
							else echo '#';
							?>
						"
						
					   onclick="
					   
					   <?php
							if($_SESSION['status']=='OK') echo "alert('Sorry! You have already filled your feedback form!')";
							else echo '';
								
						?>
					   
					   
					   " class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                    </div>
				</div>
				  <div class='col-lg-3 col-xs-6'>
				  
				 <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                       2 <sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                       Feedback Statistics
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                     </div>
                                <a href="#" onclick="$('#fstats').toggle(1000)" class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
						</div>
				<div class='col-lg-3 col-xs-6'>
				<div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        3
                                    </h3>
                                    <p>
                                        Charts
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a onclick='alert("Please wait!. This page is still under construction!")' href="#" class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                </div>		
				</div>
				<div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>
                                        4<sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                        Feedback Data
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-briefcase-outline"></i>
                                </div>
                                <a onclick='alert("Please wait!. This page is still under construction!")' href="#" class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


				 <div class='col-lg-3 col-xs-6'>
				  
				 <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                       5 <sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                       Analysis
                                    </p>
                                </div>
							
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                     </div>
                                <a onclick='alert("Please wait!. This page is still under construction!")' href="#" class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
						</div>
						
						
				
				<div class='col-lg-3 col-xs-6'>
				<div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>
                                        6
                                    </h3>
                                    <p>
                                        Results
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a onclick='alert("Please wait!. This page is still under construction!")' href="#" class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                </div>		
				</div>


				
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				<div class="box box-success" id="loading-example">
                                <div class="box-header" style="cursor: move;">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <div class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></div>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Feedback Statistics</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="row">
									<div class="col-sm-12">

				
								<div style='<?php if(isset($_POST['filter_submit'])) echo'display:block';  else echo 'display:none';?>' id='fstats' class='alert alert-info   alert-dismissable'>
				 
				 <form name='filter_stat' onsubmit='beforesubmit()' action='' method='post'>
				 <input type='text' name='input1' id='input1' style='display:none'>
				 <b>FILTER: <b><br>
				 
									
                                            
                                        
				 <table>
				 <tr>
				 <td>No of Rows to view : </td>
				 
				 <td width='300px'>
				 
				 
				 
				 <div class="col-sm-15">
				                        <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="<?php echo $NO_OF_ROWS_TO_DISPLAY ;?>" data-slider-step="1" data-slider-value="[1,<?php echo $NO_OF_ROWS_TO_DISPLAY ;?>]" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show" data-slider-id="red">                           
                 </div>
									  
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 <!--<br>Programme_name to view : &nbsp;<input type='checkbox' name='c1' value='M.Tech(IT) 5 + 1/2 Years'>M.Tech(IT) 5 + 1/2 Years
				 &nbsp;&nbsp;&nbsp;<input type='checkbox' name='c2' value='MCA 6 Years (Section A)'>MCA 6 Years (Section A)
				 &nbsp;&nbsp;&nbsp;<input type='checkbox' name='c3' value='MCA 6 Years (Section B)'>MCA 6 Years (Section B)
				-->
				
				</td>
				</tr>
				<tr>
				<td>
				<br> Status of Feedback : &nbsp;</td>
				
				<td>
				<select name='status' class='form-control'>
												  <option value='OK'>Filled</option>
												  <option value='PENDING'>Not Filled</option>
												  <option value='BOTH'>Both</option>
												</select>
												</td>
												</tr>
				<tr>
				<td>
				<br> Sort By Name : &nbsp; </td><td><select name='sortbyname' class='form-control'>
												  <option value='asc'>Ascending</option>
												  <option value='desc'>Descending</option>
												 
												</select>
				</td>
				</tr>
				</table>
				

				 <input type='submit' value='Filter' class="btn btn-primary" name='filter_submit'>


				</form>				 
				 <?php

					/*echo "<br>Total students registered in our system :  " . $TOTAL_REGISTERED . "<br>
					No of students who filled the feedback : " .$TOTAL_FILLED . "<br>
					No of students left to fill the feedback : " . $TOTAL_LEFT . "<br><br>
					";
*/

					
					if($SORT_BY_NAME=='desc')
						$result = mysqli_query($con,"SELECT * from user where (status = '$STATUS1' OR status = '$STATUS2') ORDER BY name DESC LIMIT $LOWER_RANGE, $UPPER_RANGE ;");
					else
					$result = mysqli_query($con,"SELECT * from user where (status = '$STATUS1' OR status = '$STATUS2') LIMIT $LOWER_RANGE, $UPPER_RANGE;");
					
					
					echo '<BR><BR>';
					echo '<div class="alert alert-success">CURRENT RESULTS : Viewing <font color="red">' . $NO_OF_ROWS_TO_DISPLAY . '</font> rows of users';
					echo ' who have ';
					echo '<font color="red">';
					if($STATUS1!=$STATUS2)
						echo 'filled or not filled';
					else if($STATUS1=='PENDING')
						echo 'not filled';
					else if($STATUS1=='OK')
						echo 'filled';
					echo '</font>';
					echo ' there feedback, in ';
					echo '<font color="red">';
					if($SORT_BY_NAME=='asc')
						echo 'ascending';
					else
						echo 'descending';
					echo '</font>';
					echo ' order by there name. ';
					
					
					
					echo '</div>';
					
					
					
					echo "<table id=table0' border='5' class='table table-bordered table-hover' >";
					echo "<tr>
					



					
						<td>Username</td>	
						<td>Name</td>
						<td>Programme_Name</td>
						<td>Feedback Filled? </td>
						<td>Status</td>
						<td>Current Activity</td>
						</tr>
					";
			
					$count=0;
					$uppercount=0;
					$lowercount=0;
					while(1)
					{
					
						$row = mysqli_fetch_array($result);
						
						if(!$row)
							break;
						
						/* If there is some upper limit, first skip that many rows */
						/*if($lowercount<$LOWER_RANGE)
						{	
						
							
						
							$count++;
							$lowercount++;
							continue;
						}*/						
					//	if($count>=$NO_OF_ROWS_TO_DISPLAY)
						//	break;
						if($row['status']=='OK')
							echo "<tr class='alert alert-success'>";
						else
							echo "<tr class='alert alert-danger'>";
						echo "<td>" . $row['username'] . "</td><td>" . $row['name'] . "</td><td>" . $row['programme_name'] . "</td>";
		
						if($row['status']=='OK')
							echo "<td align='center'>YES</td>";
						else
							echo "<td align='center'>NO</td>";
							
							
							
						$username = $row['username'];
						/* Add online / offline status */
						
						if(in_array($username,$ACTIVEUSERS))
						{
							echo "<td><i class='fa fa-circle text-success'></i> Online</td>";
						}
						else
						{
							echo "<td><i class='fa fa-circle text-danger'></i> Offline</td>";
						}
						
						
						
						/* Write the activity */
						if(in_array($username,$ACTIVEUSERS))
						{
							
							
							
							//$index = array_search($username, $ACTIVEUSERS);
							$index=0;
							while($username != $ACTIVEUSERS[$index])
								$index++;
							$imgcode='';  /* Display a loading gif */
							
							
							if(preg_match('/Student/',$USERACTIVITY[$index]))							
							{	$page='studentpanel';						}
							else if(preg_match("/Admin/",$USERACTIVITY[$index]))	
							{	$page='adminpanel';							}
							else if(preg_match("/Edit/",$USERACTIVITY[$index]))	
							{
								$imgcode="<img src='img/ajax-loader.gif' width='25' height='25'>";
								$page='edit';
							}
							else if(preg_match("/Preview/",$USERACTIVITY[$index]))	
							{
								$imgcode="<img src='img/ajax-loader.gif' width='25' height='25'>";
								$page='verify';
							}
							else 	
							{
								$imgcode="<img src='img/ajax-loader.gif' width='25' height='25'>";
								$page='form';
							}
								
							
							
							
							
							
														
							echo "<td onmouseover='$(\"#" . $page . "\").show(100)' onmouseout='$(\"#" . $page . "\").hide(100)'>" . $USERACTIVITY[$index] . " &nbsp;&nbsp;" .  $imgcode . "</td>";
							
							
							
							
						
							
						}
						else
						{
							echo "<td></td>";
						}
						
						echo "</tr>";
						$count=$count+1;
					}
					
					echo '</table>';
	
	
	



			?>
				 
			
						

				</div>		
				 
				<img id='studentpanel' style='display:none;position:fixed;top:100px;left:220px' src='image/studentpanel.jpg' width='60%' height='60%'/> 
				<img id='adminpanel' style='display:none;position:fixed;top:100px;left:220px' src='image/adminpanel.jpg' width='60%' height='60%'/> 
				<img id='form' style='display:none;position:fixed;top:100px;left:220px' src='image/form.jpg' width='60%' height='60%'/> 
				<img id='edit' style='display:none;position:fixed;top:100px;left:220px' src='image/edit.jpg' width='60%' height='60%'/> 				
				<img id='verify' style='display:none;position:fixed;top:100px;left:220px' src='image/verify.jpg' width='60%' height='60%'/> 
				
				
				 
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			     <div class="row" id="chart1"> 
                        <div class="col-md-6">
                            
                            <!-- Donut chart -->
                            <div class="box box-primary">  
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Feedback Track Chart</h3>
                                </div>
                                <div class="box-body">
                                    <div id="donut-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body-->
                           </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
				
				
			
						
			  
			
                </section><!-- /.content -->
            
								
				
			</aside><!-- /.right-side -->
        
		
		

</div>
                                      </div><!-- /.row - inside box -->
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="row">
                                        
                                        
                                    </div><!-- /.row -->
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->        
                            
		
		
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
		
		<!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
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
			document.getElementById('input1').value=value1[0].innerHTML;;
			
			
			
			
		}
		
		
		
		</script>
    </body>
</html>