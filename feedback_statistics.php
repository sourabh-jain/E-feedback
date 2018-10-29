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

if($_SESSION['type']!='admin')
	header("Location:Login.php"); 

?>

<html>
<head>
<title>Feedback Statistics</title> 
<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">
</head>
<body>
<?php

echo "<br>Total students registered in our system :  " . $TOTAL_REGISTERED . "<br>
No of students who filled the feedback : " .$TOTAL_FILLED . "<br>
No of students left to fill the feedback : " . $TOTAL_LEFT . "<br><br>
";

$result = mysqli_query($con,"SELECT * from user");
echo "<table border='2'>";
echo "<tr>
		<td>Username</td>
		<td>Name</td>
		<td>Programme_Name</td>
		<td>Feedback Filled? </td>
		</tr>
		";
			
while(1)
{
	$row = mysqli_fetch_array($result);
	if(!$row)
		break;
	
	if($row['status']=='OK')
		echo "<tr class='alert alert-success'>";
	else
		echo "<tr class='alert alert-danger'>";
	echo "<td>" . $row['username'] . "</td><td>" . $row['name'] . "</td><td>" . $row['programme_name'] . "</td>";
	
	if($row['status']=='OK')
		echo "<td align='center'>YES</td>";
	else
		echo "<td align='center'>NO</td>";
	
	echo "</tr>";
}
	
	
	



?>
</body>

</html>