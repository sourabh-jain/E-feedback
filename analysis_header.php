
<?php

if($_SESSION['type']!='admin')
	header("Location:studentpanel.php");
	
require_once('currentfilename.php');
/* $basename holds current file name */

include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */
include "get_statistics.php";  /* Get details of students who total students registered, no of students who filled feedback and not filled feedback */
/*
	Variables:
		$TOTAL_REGISTERED : Total students who have registered in our system
		$TOTAL_FILLED : Total students who have filled there feedback form
		$TOTAL_LEFT : Total students who are left to fill the feedback form

*/

/*if($_SESSION['type']!='admin')
	header("Location:Login.php"); 
*/

	
/* Change current activity */

$current_activity = "At AdminPanel";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

	






$NO_OF_ROWS_TO_DISPLAY = $TOTAL_REGISTERED; /* Default */
$PFILTER1=''; /* Programme Name filter */
$PFILTER2=''; /* Programme Name filter */
$PFILTER3=''; /* Programme Name filter */
$PFILTER4=''; /* Programme Name filter */

$STATUS1='OK';
$STATUS2='PENDING';
$SORT_BY_NAME='asc';
if(isset($_POST['filter_submit']))
{
	
	if($_POST['no']>$TOTAL_REGISTERED)
	{
		echo '<div class="alert alert-danger">No of Rows selected is less than total registered users!</div>';
		$NO_OF_ROWS_TO_DISPLAY=0;
	}
	else if($_POST['no']<0)
		$NO_OF_ROWS_TO_DISPLAY=0;
	else
	{
		$NO_OF_ROWS_TO_DISPLAY=$_POST['no'];
		//$PFILTER1=$_POST['c1'];
		$SORT_BY_NAME=$_POST['sortbyname'];
		if($_POST['status']=='BOTH')
		{
			$STATUS1='OK';
			$STATUS2='PENDING';
		}
		else
		{
			$STATUS1=$_POST['status'];
			$STATUS2=$_POST['status'];
		}
		
		
		
	}
	
		
	
	
	
}
	

	
/* Track all users in activesession */

$result = mysqli_query($con,"SELECT * from user");	
$ACTIVEUSERS=array();
$USERACTIVITY=array();
$i=0;
while(true)
{
	$row=mysqli_fetch_array($result);
	if(!$row)
		break;
	if($row['activity']!=null)
	{
		$ACTIVEUSERS[$i]=$row['username'];
		$USERACTIVITY[$i]=$row['activity'];
		$i++;
	}
	
}


function standard_deviation($aValues, $bSample = false)
{
    $fMean = array_sum($aValues) / count($aValues);
    $fVariance = 0.0;
    foreach ($aValues as $i)
    {
        $fVariance += pow($i - $fMean, 2);
    }
    $fVariance /= ( $bSample ? count($aValues) - 1 : count($aValues) );
    return (float) sqrt($fVariance);
}
function mmmr($array, $output = 'mean'){ 
    if(!is_array($array)){ 
        return FALSE; 
    }else{ 
        switch($output){ 
            case 'mean': 
                $count = count($array); 
                $sum = array_sum($array); 
                $total = $sum / $count; 
            break; 
            case 'median': 
                rsort($array); 
                $middle = round(count($array) / 2); 
                $total = $array[$middle-1]; 
            break; 
            case 'mode': 
                $v = array_count_values($array); 
				
                arsort($v); 
                foreach($v as $k => $v){$total = $k; break;} 
            break; 
            case 'range': 
                sort($array); 
                $sml = $array[0]; 
                rsort($array); 
                $lrg = $array[0]; 
                $total = $lrg - $sml; 
            break; 
        } 
        return $total; 
    } 
} 





	
if(isset($_POST['analysissubmit']))
{
	
	/* Current date and time */
	$t=time();
	$datentime=date("Y-m-d h:i:s",$t);
	
			$sfaculty_names = $_POST['sfaculty_names'];
			$ssubject_names = $_POST['ssubject_names'];
			$stotal_records	= $_POST['stotal_records'];
			$smean = $_POST['smean'];
			$smedian = $_POST['smedian'];
			$smode = $_POST['smode'];
			$ssd =$_POST['ssd'];
			$sno=$_POST['sno'];
			
			$sheader=$_POST['sheader'];
			
			
	 
			mysqli_query($con,"INSERT INTO analysis_data VALUES('$sheader','$sno','$sfaculty_names','$ssubject_names','$datentime','$stotal_records','$smean','$smedian','$smode','$ssd')");
			echo '<div class="alert-success">Data Saved!</div>';
			
			
	
}

	
	
	

	
?>




