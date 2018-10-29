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

/*if($_SESSION['type']!='admin')
	header("Location:Login.php"); 
*/

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
	
/* Change current activity */

$current_activity = "At StudentPanel";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

	
	
?>

<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="UTF-8">
		
		
		
		
        <title>Student Panel | Dashboard</title>
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
    <body class="skin-black" onLoad='callme()'>
        <!-- header logo: style can be found in header.less -->
        <header style='position:fixed' class="header">
            <a href="studentpanel.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
		Student Panel
		
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
                            <a href="studentpanel.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						 <li>
							<?php $username=$_SESSION['use']; ?>
							
                             <a href="
								<?php 
								
								
								/* Find out it this user is allowed to fill feedback or not */
								$result=mysqli_query($con,"SELECT * from user where username='$username'");
								$row=mysqli_fetch_array($result);
								
								 if($row['allowed']=='NO') echo '#';
								
								else if($_SESSION['status']=='PENDING') echo 'form2.php';
								
								else echo '#';
								
								?>
			"
			
								onclick="
								
								<?php if($_SESSION['status']=='OK') echo "alert('Sorry, You have already submitted your feedback form!')";
								
								
								$username=$_SESSION['use'];
								
								/* Find out it this user is allowed to fill feedback or not */
								$result=mysqli_query($con,"SELECT * from user where username='$username'");
								$row=mysqli_fetch_array($result);
								if($row['allowed']=='NO')
								{
									echo "alert('Sorry, You are a back year student, so you are not allowed to fill the feedback form!')";
								}
								else echo "";
								?>
								
								">
                                <i class="fa fa-laptop"></i> <span>Fill The Feedback Form</span> 
                            </a>
                        </li>
                       
                       
					  
                        
                        
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
                       
                        
                    </h1>
                    
                </section>

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
                                <a href="
								<?php 
								
								
								/* Find out it this user is allowed to fill feedback or not */
								$result=mysqli_query($con,"SELECT * from user where username='$username'");
								$row=mysqli_fetch_array($result);
								
								 if($row['allowed']=='NO') echo '#';
								
								else if($_SESSION['status']=='PENDING') echo 'form2.php';
								
								else echo '#';
								
								?>
			"
			
								onclick="
								
								<?php if($_SESSION['status']=='OK') echo "alert('Sorry, You have already submitted your feedback form!')";
								
								
								$username=$_SESSION['use'];
								
								/* Find out it this user is allowed to fill feedback or not */
								$result=mysqli_query($con,"SELECT * from user where username='$username'");
								$row=mysqli_fetch_array($result);
								if($row['allowed']=='NO')
								{
									echo "alert('Sorry, You are a back year student, so you are not allowed to fill the feedback form!')";
								}
								else echo "";
								?>
								
								"
								class="small-box-footer">
                                    Click here <i class="fa fa-arrow-circle-right"></i>
                                </a>
                    </div>
				</div>
				  <div class='col-lg-3 col-xs-6'>
				 
				 <div style="display:none" class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                       2 <sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                       Your Feedback Status
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
						
						
				
				<br><br><br><br><br><br><br><br>
				 <div id='fstats'>
				 <!--style='
				 
				 
				 <?php
				//  if(!isset($_POST['showstats']))
				  
					//echo 'display:none';
				
				 
				 ?>
				 '-->
				 
				 
				 
								
				 
				 <?php
				 $status=$_SESSION['status'];
				 
				 /* Find out it this user is allowed to fill feedback or not */
								$result=mysqli_query($con,"SELECT * from user where username='$username'");
								$row=mysqli_fetch_array($result);
								if($row['allowed']=='NO')
								{
									echo '<b><div class="alert alert-danger">Sorry, You are a back year student, so you are not allowed to fill the feedback form!</div>';
								}
								
				 else
				 if($status=='OK')
					echo '<b><div class="alert alert-success">Congrats. Your Feedback Status is OK. <br> That means you have submitted your feedback.</div></b>"';
				else if($status=='PENDING')
					echo '<b><div class="alert alert-danger">Ohh. Your Feedback Status is PENDING. <br> That means you have not submitted your feedback.</div></b>';
					
					
				 ?>
				 
				 </div>
				 
				 
		
				
			
						
			  
			
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
 s                       + Math.round(series.percent) + "%</div>";
            }
        </script>
				  <script>
 $.post( "settimestamp.php", 
{
	username: "<?php echo $_SESSION['use']; ?>" 
	
	
}


)
  .done(function( data ) {
   // alert( "Adding timestamp");
	//$("#writeme").html(data);
  });

</script>

		
<?php
include 'updatetimestamp.php';
?>
	



    </body>
</html>