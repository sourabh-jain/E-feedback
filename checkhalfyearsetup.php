<?php


$result=mysqli_query($con,"SELECT * from half_year_setup");
$row=mysqli_fetch_array($result);
$semtype=$row['semtype'];
$nextupdate=$row['nextupdate'];
$lastupdate=$row['lastupdate'];
$lastdate=new DateTime($lastupdate);
$nextdate=new DateTime($nextupdate);
$t=time();
$datentime=date("Y-m-d h:i:s",$t);
$todaydate = new DateTime($datentime);
if($todaydate>$nextdate)
{
	header("Location:halfyear.php");
}

?>