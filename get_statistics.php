<?php   ?>
<?php

include "database_config.php"; /* Includes the details of database */

$result = mysqli_query($con,"SELECT count(*) from user");
$row = mysqli_fetch_array($result);
$TOTAL_REGISTERED=$row['count(*)'];
$result = mysqli_query($con,"SELECT count(*) from user where status='OK'");
$row = mysqli_fetch_array($result);
$TOTAL_FILLED=$row['count(*)'];
$TOTAL_LEFT=$TOTAL_REGISTERED - $TOTAL_FILLED;



?>