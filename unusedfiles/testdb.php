<?php
include "database_config.php";
$LOWER_RANGE='0';
$UPPER_RANGE='4';
$result=mysqli_query($con,"SELECT * 
FROM faculty LIMIT $LOWER_RANGE,4");
$FACULTY_NAMES=array();
$SUBJECT_CODES=array();
$i=0;
while(1)
{
$row=mysqli_fetch_array($result);
if($row==NULL)
break;
$FACULTY_NAMES[$i]=$row['faculty_name'];
$SUBJECT_CODES[$i]=$row['subject_id'];
echo $FACULTY_NAMES[$i] . " " . $SUBJECT_CODES[$i] . '<br>';
$i++;
//echo $row['faculty_id'] . $row['faculty_name'] . $row['subject_id'] . '<br>';
}

?>