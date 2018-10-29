<?php  session_start(); ?>  // session starts with the help of this function 

<?php

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
	 $type = $_POST['type'];
	 

      if($user == "sourabh" && $pass == "ajtajt")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;
		  $_SESSION['type']=$type;


	 
         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successfull Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

    <table width="200" border="1" cellspacing="0">
  <tr>
    <td>  UserName</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> PassWord  </td>
    <td><input type="password" name="pass"></td>
  </tr>
   <tr>
    <td> Type of Account</td>
	<td> <select name="type">
	<option id='1' value='student'>Student</option>
	<option id='2' value='admin'>Admin</option>
	</select>
	</td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>