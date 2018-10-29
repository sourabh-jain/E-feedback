<?php   session_start();  ?>
<?php

if($_SESSION['type']!='admin')
	header("Location:studentpanel.php");
	


include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */
include "get_statistics.php";  /* Get details of students who total students registered, no of students who filled feedback and not filled feedback */
/*
	Variables:
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
$PFILTER1=''; /* Programme Name filter */
$PFILTER2=''; /* Programme Name filter */
$PFILTER3=''; /* Programme Name filter */
$PFILTER4=''; /* Programme Name filter */

$STATUS1='OK';
$STATUS2='PENDING';
$SORT_BY_NAME='asc';
if(isset($_POST['filter_submit']))
{
	
	if($_POST['no']>$TOTAL_REGISTERED)
	{
		echo '<div class="alert alert-danger">No of Rows selected is less than total registered users!</div>';
		$NO_OF_ROWS_TO_DISPLAY=0;
	}
	else if($_POST['no']<0)
		$NO_OF_ROWS_TO_DISPLAY=0;
	else
	{
		$NO_OF_ROWS_TO_DISPLAY=$_POST['no'];
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




	
/*
				function getfacultynames($sem,$programme_name)
				{	
							
					$programme_filter='';	
	
					$section_filter='-';
	
					$subject_filter='';
					if(preg_match("/mtech/",$programme_name))
					{	
				
						$programme_filter='%IT';
					}
					else if(preg_match("/mca/",$programme_name))
					{	
					
						$programme_filter='%IC';
						if(preg_match("/Section A/",$programme_name))
							$section_filter='A';
						else
							$section_filter='B';
					}
					else if(preg_match("/mba/",$programme_name))
					{	
						$programme_filter='%IM';
					}
					
					$programme_filter=$programme_filter . '-' . $sem . '%';
					
					/* Generate subject codes and faculty names */	  
	/*				$r=mysqli_query($con,"SELECT * 
												FROM faculty
												WHERE faculty_id
												IN (
		
												SELECT faculty_id
												FROM subjects
												WHERE subject_id LIKE  '$programme_filter' AND section='$section_filter' 
												)order by subject_id asc");
					$FACULTY_NAMES=array();
					
					
					$i=0;	
					while(1)
					{	
						$row=mysqli_fetch_array($r);
						if($row==NULL)
							break;
						$FACULTY_NAMES[$i]=$row['faculty_name'];
						
			
						$i++;
			//echo $row['faculty_id'] . $row['faculty_name'] . $row['subject_id'] . '<br>';
					}
					
					
					
					return $FACULTY_NAMES;
					
					
				}
*/


	
	
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
    <body class="skin-black" onLoad='initTable("table0")'>
        <!-- header logo: style can be found in header.less -->
        <header style='position:fixed' class="header">
            <a href="adminpanel.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
		Admin Panel
		
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li style='display:none' class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="avatar5.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <i class="ion ion-ios7-people success"></i> <?php echo $TOTAL_REGISTERED; ?> new members joined.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <i class="ion ion-ios7-people info"></i><?php echo $TOTAL_FILLED; ?> members filled the feedback.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <i class="fa fa-warning danger"></i> <?php echo $TOTAL_LEFT; ?> members left to fill the feedback.
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <i class="ion ion-ios7-cart success"></i> System Installed!
                                            </a>
                                        </li>
                                        <li style='display:none'>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#" onclick='alert("Please wait!. This page is still under construction!")'>View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">2</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 2 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <h3>
                                                    View Feedback Data.
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <h3>
                                                    Perform Analysis. 
                                                    <small class="pull-right">0%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 0%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li style='display:none'><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li style='display:none'><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['name'];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar<?php if($_SESSION['gender']=='M') echo '5'; else echo '3';?>.png" class="img-circle" alt="User Image"  />
                                    <p>
                                        <?php  echo $_SESSION['name'];   echo ' - '. $_SESSION['type']; ?>
                                      <!--
									  <small>Member since Nov. 2012</small>
									  --->
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                              <!--  <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div> -->
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img style='position:fixed' src="img/avatar<?php if($_SESSION['gender']=='M') echo '5'; else echo '3';?>.png"" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info" style='position:fixed'> 
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Hello, &nbsp;<?php echo $_SESSION['use'];?></p>
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form style='visibility:hidden;' action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
					
					
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" style='position:fixed'>
                        <li>
                            <a href="adminpanel.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						 <li>
                            <a href="<?php
							if($_SESSION['status']=='PENDING') echo 'form2.php';
							else echo '#';
					
							?>
						"
						
					   onclick="
					   
					   <?php
							if($_SESSION['status']=='OK') echo "alert('Sorry! You have already filled the feedback!')";
							else echo '';
								
						?>
					   
					   
					   ">
						
                                <i class="fa fa-laptop"></i> <span>Fill The Feedback Form</span> 
                            </a>
                        </li>
                       
                       
					   <li>
                            <a href="#" onclick="$('#fstats').toggle(1000)">
                                <i class="fa fa-th"></i> <span>Feedback Stats</span> 
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#chart1"><i class="fa fa-angle-double-right"></i> Feedback Track Chart</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Chart 2</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Chart 3</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Feedback Data</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> All Feedback Data</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Feedback Data By Course</a></li>
                                <li><a onclick='alert("Please wait!. This page is still under construction!")' href="#"><i class="fa fa-angle-double-right"></i> Feedback Data by Sem</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Analysis</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Quick Analysis</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Advanced Analysis</a></li>
								<li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Custom Analysis</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Results</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Full Result</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Faculty Wise Result</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Top 10 Faculties</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Course Wise Results</a></li>
                            </ul>
                        </li>
						
						<!-- Some master admin functions -->
						<?php
						

						$flag=0;
						
						
						
						$result = mysqli_query($con,"SELECT * FROM masteradmin");
			
						while($row = mysqli_fetch_array($result))
						{
							
							if($row['username']==$_SESSION['use'])
							{
								$flag=1;
								break;
							}
							
						}
						
						if($flag==0)
							echo 'U r not master admin.';
						else
							echo 'U are master admin.';
							
						
						
						
						if($flag==1)
						echo '
                        <li>
                            <a href="makeadmin.php">
                                <i class="fa fa-calendar"></i> <span>Make Admin</span>
                                
                            </a>
                        </li>';
						
                        
						?>
						<!-- <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>                                
                                <li class="active"><a href="blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
						-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin Page
                        
                    </h1>
                    
                </section>

				
				
                <!-- Main content -->
			
			
				
				
                <section class="content">
               	
				<form name='feedbackdata' action='' method='post'>
				<table class="table" border=1>
				
					<tr>
						<td width='100px'>
							 Course : &nbsp;
						</td>
						
						<td>
						<select name="programme">
						<option id='1' value='M.Tech(IT) 5 + 1/2 Years'>M.Tech(IT) 5 + 1/2 Years</option>
						<option id='2' value='MCA 6 Years(Section A)'>MCA 6 Years (Section A)</option>
						<option id='3' value='MCA 6 Years(Section B)'>MCA 6 Years(Section B)</option>
						<option id='4' value='MBA 5 Years'>MBA 5 Years</option>
						</select>

						</td>
					</tr>
					
					
					
					<tr>
						<td width='100px'>
							 Semester : &nbsp;
						</td>
						
						<td>
						<select name="semester">
						<option id='1' value='2'>2</option>
						<option id='2' value='4'>4</option>
						<option id='3' value='6'>6</option>
						<option id='4' value='8'>8</option>
						<option id='5' value='10'>10</option>
						<option id='6' value='12'>12</option>
						
						</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type='submit' value='Submit' name='submit'>
						</td>

				
				
				</table>
				
				
				</form>





				<?php
				
				$count=0;
				$TOTAL_DATA = array();
				
				
				
				if(isset($_POST['submit']))
				{
					
				
					$course=$_POST['programme'];
					$sem=$_POST['semester'];
					
					
					$result=mysqli_query($con,"SELECT * from feedback_data where programme_name='$course' AND semester='$sem'");
					echo '<table class="table table-stripped" border=1>';
					
					//$FEEDBACK_DATA =array();
					$FACULTY_DATA = array();
					$i=0;
				
					
					while($row=mysqli_fetch_array($result))
					{	
						
						echo '<tr>';
						
						$isnotfirst=0;
						
						$FEEDBACK_DATA = array();
						foreach (explode("#",$row['data']) as $rd)
						{	
							if($isnotfirst==1)   /* Remove the first row ie. Infrastructure details row */
								$FEEDBACK_DATA[] = explode(",",$rd);
							$isnotfirst=1;
						}
						
						$TOTAL_DATA[$count++]=$FEEDBACK_DATA;
						
						
						echo '<td>				
										' . $row['programme_name']  . 
								'</td>';
							
						
							echo '<td>'				
										 . $row['semester']  . 
								'</td>';
									
							
					/*		echo '<td>				
										' . $row['data']  . 
								'</td>';
						*/

						$j=0;
						echo "<td>";
						
						//$len=count($FACULTY_DATA);
							foreach($FEEDBACK_DATA as $RFD)
							{
								foreach($RFD as $CFD)
								
									echo $CFD . " ";
								echo "<br>";
							}
						echo '</td>';
						echo '</tr>';
						$i++;
					}
					
					
				}
				?>
				<br><br><br><br><br>
			  <table class='table' border=1>
				<?php	

					foreach ($TOTAL_DATA as $totalrows)
					{
						echo '<tr>';
						
						foreach($totalrows as $totalcols)
						{
							
							echo '<td>';
							
							foreach($totalcols as $totalelements)
							{
								echo $totalelements . " " ;
							}
								
							echo '</td>';
						}
							
						echo '</tr>';
						
					}
					?>
					</table>

				<?php
				
				
				/* Transpose rows */
				$i=0;
				foreach($TOTAL_DATA as $TOTALROWS)
				{
					$TOTAL_DATA[$i]=transpose($TOTALROWS);
					$i++;
				}
				function transpose($array) 
				{
					array_unshift($array, null);
					return call_user_func_array('array_map', $array);
				}

				$TOTAL_DATA = transpose($TOTAL_DATA);
				
				for($k=0;$k<count($TOTAL_DATA);$k++)
				{
					$avgcount=0;
					$avg=0;
					echo 'For faculty ' . (1+$k) . ' : ' ; 
					for($i=0;$i<count($TOTAL_DATA[$k]);$i++)
					{
						echo '&nbsp;&nbsp;&nbsp;&nbsp;';
						for($j=0;$j<count($TOTAL_DATA[$k][$i]);$j++)
						{	
							echo $TOTAL_DATA[$k][$i][$j] . ' ' ;
							if($TOTAL_DATA[$k][$i][$j]>=1 && $TOTAL_DATA[$k][$i][$j] <=5)
							{
								$avg = $avg + $TOTAL_DATA[$k][$i][$j] ;
								$avgcount++;
							}
						
						}
					}
					echo ' Avg : ' . $avg . ' ' .$avgcount . ' ' . $avg/$avgcount. '<br>';
					
				}
				
				
				
				/*	foreach($TOTAL_DATA as $TOTALROWS)
					{
					
						
				/*		foreach($TOTALROWS as $ROWS)
						{
						
								echo $ROWS[$i] . '<br>';
								
						}
				*/
/*					$TOTALROWS=transpose($TOTALROWS);


						for($i=0;$i<count($TOTALROWS);$i++)
						{
							
							echo 'For faculty ' . ($i+1) . " : ";
						
							for($j=0;$j<count($TOTALROWS[$i]);$j++)
							
							{	
							
								echo $TOTALROWS[$i][$j] . ' ';
							}
							echo '<br>';
						}
						echo '<hr><br><br>';
						$i++;
					}
*/				?>
				
			
            





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
    </body>
</html>