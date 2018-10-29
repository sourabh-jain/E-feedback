<?php

      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            
           header("Location:Login.php");  
		   
		 
		$user = $_SESSION['use'];
		    
 
      /*echo '<div class="alert alert-success">Welcome ' . $_SESSION['use'];
		  echo '<br> You logged in as : ' . $_SESSION['type'] . '</div>';

        //  echo "Login Success";
		
		

          echo "<br><a href='logout.php'> Logout</a> "; 
		*/  
		?>