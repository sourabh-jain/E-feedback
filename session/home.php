<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
		   

          echo 'Welcome ' . $_SESSION['use'];
		  echo '<br> You logged in as : ' . $_SESSION['type'];

        //  echo "Login Success";
		
		

          echo "<br><a href='logout.php'> Logout</a> "; 
?>
<br>
<a href="form.php">Click here</a> to fill the feedback form now.
</body>
</html>