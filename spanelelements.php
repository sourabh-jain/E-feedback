<?php
ob_start();
include "currentfilename.php"; /* $basefilename has value of current file name */

?>

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
                        <!-- Tasks: style can be found in dropdown.less -->
                       
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
                             <a href="
								<?php if($_SESSION['status']=='PENDING') echo 'form2.php';
										else echo '#';?>
			"
			
								onclick="
								
								<?php if($_SESSION['status']=='OK') echo "alert('Sorry, You have already submitted your feedback form!')";
										else echo '';
								?>
								
								">
                                <i class="fa fa-laptop"></i> <span>Fill The Feedback Form</span> 
                            </a>
                        </li>
                       
                       
					  
                        
                        
					   <li>
					        <a href="studentpanel.php">
                                <i class="fa fa-th"></i> 
								
								<span name='completed_perc'>
								<?php if($basename=='form2.php') echo '0'; 
								else if ($basename=='verify2.php') echo '90';
								else if($basename=='edit2.php') echo '80';
								else if($basename=='submit2.php') echo '100';
								
								
								?>% Compeleted</span><span>
								
								
								
								
								
								<div class= "
								
								
								
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
                        Student Page
                        
                    </h1>
                    
                </section>
