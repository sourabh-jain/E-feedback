<?php   session_start();  ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
		   

          echo 'Welcome ' . $_SESSION['use'];
		  echo '<br> You logged in as : ' . $_SESSION['type'];

        //  echo "Login Success";
		
		

          echo "<br><a href='logout.php'> Logout</a> "; 
?>
