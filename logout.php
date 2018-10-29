<?php
 session_start();
 ob_start();
 include "database_config.php";

  echo "Logout Successfully ";
  $username=$_SESSION['use'];
  $result=mysqli_query($con,"DELETE from activesession where username='$username'");

  
  session_destroy();   // function that Destroys Session 
  
  header("Location: login.php");
?>