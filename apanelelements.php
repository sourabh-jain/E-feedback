<?php

include "currentfilename.php"; /* $basefilename has value of current file name */
require_once("get_statistics.php");  /* Get details of students who total students registered, no of students who filled feedback */

?>


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
                                                    Perform Analysis. 
                                                    <!--<small class="pull-right">0%</small>-->
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 0%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#" onclick='alert("Please wait!. This page is still under construction!")'>
                                                <h3>
                                                    View Results.
                                                   <!-- <small class="pull-right">20%</small>-->
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
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
                            <a href="form2.php">
                                <i class="fa fa-laptop"></i> <span>Fill The Feedback Form</span> 
                            </a>
                        </li>
                       
                       
					   <li>
                            <a href="#" onclick="$('#fstats').toggle(1000)">
                                <i class="fa fa-th"></i> <span>Feedback Stats</span> 
                            </a>
                        </li>
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="charts.php#chart1"  onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Feedback Track Chart</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Chart 2</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Chart 3</a></li>
                            </ul>
                        </li>
                        <!--<li class="treeview">
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
                        </li>-->
						
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Analysis</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="quickanalysis.php" ><i class="fa fa-angle-double-right"></i> Quick Analysis</a></li>
                                <li><a href="advancedanalysis.php" ><i class="fa fa-angle-double-right"></i> Advanced Analysis</a></li>
								<li><a href="customanalysis.php" ><i class="fa fa-angle-double-right"></i> Custom Analysis</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Results</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="fullresult.php" ><i class="fa fa-angle-double-right"></i> Full Result</a></li>
                               <!-- <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Faculty Wise Result</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Top 10 Faculties</a></li>
                                <li><a href="#" onclick='alert("Please wait!. This page is still under construction!")'><i class="fa fa-angle-double-right"></i> Course Wise Results</a></li>
								-->
                            </ul>
                        </li>
						<!-- One time half year setup to update the semester and feedback status of students -->
						 <li>
                            <a href="halfyear.php">
                                <i class="fa fa-calendar"></i> <span>Half Year Setup</span>
                                
                            </a>
                        </li>
						<!-- Update the list of failure students to downgrade there sem, n  know if they are allowed to fill feedback or not--->
						 <li>
                            <a href="updatefailures.php">
                                <i class="fa fa-calendar"></i> <span>Give List of Failures</span>
                                
                            </a>
                        </li>
						
						
						<!-- Some master admin functions -->
						<?php
						

						$flag=0;
						
						
						
						$result = mysqli_query($con,"SELECT * FROM USER where typeofaccount=2");
			
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
                            <a href="modifyadmin.php">
                                <i class="fa fa-calendar"></i> <span>Modify Admin</span>
                                
                            </a>
                        </li>';
						
                        
						?>
						<?php if($basename=='form2.php' || $basename=='verify2.php' || $basename=='edit2.php' || $basename=='submit2.php')
						{
						?>
						
						<li>
					        <a href="adminpanel.php">
                                <i class="fa fa-th"></i> 
								
								<span name='completed_perc'>
								<?php if($basename=='form2.php') echo '0% Compeleted'; 
								else if ($basename=='verify2.php') echo '90% Compeleted';
								else if($basename=='edit2.php') echo '80% Compeleted';
								else if($basename=='submit2.php') echo '100% Compeleted';
								
								
								?></span><span>
								
								
								
								
								
								<div id='progress' class= "
								
								
								
								<?php 
								if($basename=='submit2.php') 
								echo 'progress sm progress-striped';
								else echo 'progress sm progress-striped active';
								?>
								
								
								
								
								">
                                        <div name='progress_bar' class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="
										
										
											<?php if($basename=='form2.php') echo 'width: 0%'; 
											else if ($basename=='verify2.php') echo 'width: 90%';
											else if($basename=='edit2.php') echo 'width: 80%';
											else if($basename=='submit2.php') echo 'width: 100%';
								
								
											?>">
										
										
                                          
                                        </div>
                                    </div>
								
								
								</span> 
                            </a>
                        </li>
    
						<?php
						}?>
						
						
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
