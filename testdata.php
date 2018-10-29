<?php
/* This file has details of database configuration */


$server = "";
$username = "root";
$password = "";
$database_name = "feedback";



$con=mysqli_connect($server,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}





	
/* Track all users in activesession */

$result = mysqli_query($con,"SELECT * from user ");	
$ACTIVEUSERS=array();
$USERACTIVITY=array();
$i=0;
while(true)
{
	$row=mysqli_fetch_array($result);
	if(!$row)
		break;
	$t=time();
	
	if($row['activity']!=null && $t<$row['lastloggedin']+20)
	{
		$ACTIVEUSERS[$i]=$row['username'];
		$USERACTIVITY[$i]=$row['activity'];
		$i++;
	}
	
}






/* Get all post data */
$SORT_BY_NAME=$_POST['SORT_BY_NAME'];
$STATUS1=$_POST['STATUS1'];
$STATUS2=$_POST['STATUS2'];
$LOWER_RANGE=$_POST['LOWER_RANGE'];
$UPPER_RANGE=$_POST['UPPER_RANGE'];
$NO_OF_ROWS_TO_DISPLAY=$_POST['NO_OF_ROWS_TO_DISPLAY'];

?>   <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
							else if(preg_match("/Submit/",$USERACTIVITY[$index]))	
							{
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
			<img id='studentpanel' style='display:none;position:fixed;top:100px;left:220px' src='image/studentpanel.jpg' width='60%' height='60%'/> 
				<img id='adminpanel' style='display:none;position:fixed;top:100px;left:220px' src='image/adminpanel.jpg' width='60%' height='60%'/> 
				<img id='form' style='display:none;position:fixed;top:100px;left:220px' src='image/form.jpg' width='60%' height='60%'/> 
				<img id='edit' style='display:none;position:fixed;top:100px;left:220px' src='image/edit.jpg' width='60%' height='60%'/> 				
				<img id='verify' style='display:none;position:fixed;top:100px;left:220px' src='image/verify.jpg' width='60%' height='60%'/> 
				
				 
			

</html>