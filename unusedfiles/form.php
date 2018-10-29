<?php   session_start();  ?>
<?php

include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */
include "feedback_status.php"; /* Check the feedback fill status of the user */
	
	
	
	

		  
		  
		  
	/* Generate subject codes and faculty names */	  
		$result=mysqli_query($con,"SELECT * 
		FROM faculty
		WHERE faculty_id
		IN (
		
		SELECT faculty_id
		FROM subjects
		WHERE subject_id LIKE  '%IT%' 
		)order by subject_id asc");
		$FACULTY_NAMES=array();
		$SUBJECT_CODES=array();
		$SUBJECT_NAMES=array();
		$i=0;
		while(1)
		{	
			$row=mysqli_fetch_array($result);
			if($row==NULL)
				break;
			$FACULTY_NAMES[$i]=$row['faculty_name'];
			$SUBJECT_CODES[$i]=$row['subject_id'];
		
			$i++;
			//echo $row['faculty_id'] . $row['faculty_name'] . $row['subject_id'] . '<br>';
		}
		/* Query For Subject Names */
		$result=mysqli_query($con,"SELECT * FROM subjects
	WHERE subject_id LIKE  '%IT%' 
		order by subject_id asc");

		$i=0;
		while(1)
		{	
			$row=mysqli_fetch_array($result);
			if($row==NULL)
				break;
			$SUBJECT_NAMES[$i]=$row['subject_name'];
			
			$i++;
			//echo $row['faculty_id'] . $row['faculty_name'] . $row['subject_id'] . '<br>';
		}
		
		
		
?>

<html>
<head>
<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

<link class="cssdeck" rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-responsive.min.css" class="cssdeck">


<script type="text/javascript" src="js/timer.js"></script>
<title>E-Feedback Form</title>
</head>
<body onLoad="validate(document.myForm)">

<b>
<div align='center'  style='font-size:25px'>

INTERNATIONAL INSTITUTE OF PROFESSIONAL STUDIES<br>
DEVI AHILYA VISHWAVIDYALAYA, INDORE<br>
<u>STUDENT FEEDBACK FORM</u>
</div>
</b>
<br>

<div style='font-size:15px' >
Dear Students,<br>You are requested to give your frank and objective opinion about various aspects of the subjects taught to you for improving and maintaining quality of teaching.
<b><u>Your response will be confidential. </u></b>
</div>
<br>
<div style='font-size:15px' >
<b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name Of the Programme:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="SEM" value="
<?php echo $_SESSION['programme_name']; ?>" disabled>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semester:&nbsp;&nbsp;&nbsp; <input type="text" name="SEM" value=" <?php echo $_SESSION['semester']; 
$sem = $_SESSION['semester'];
if($sem=='1')
	echo 'st';
else if($sem=='2')
	echo 'nd';
else if($sem=='3')
	echo 'rd';
else
	echo 'th';
?>
 SEM" disabled><br><br>
<div class="well">

<u>Infrastructure Support</u>

<form action='verify.php' method='post' name='myForm'>


<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=632 style='width:474.35pt;border-collapse:collapse;border:none'>
 <tr style='height:19.65pt'>
	<td width=419 colspan=2 valign=top style='width:314.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center'>
	 <b>Infrastructure Support </b>
	 </p>
    </td>
    <td width=213 valign=top style='width:159.75pt;border:solid #191919 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center'><b>Grade</b></p>
    </td>
 </tr>
 
 <tr style='height:19.65pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>1.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Availability of books in Library</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;'>
	 
	 <div class="controls">
		<select name='books'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
	</div>	
		
		
	</p>
		
     </td>
 </tr>
 
 <tr style='height:18.55pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>2.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Basic Requirements like furniture, desk, chair etc.</p>
      </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	  
	  <select name='basic'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	  
	  </p>
      
	  </td>
 </tr>
 
 <tr style='height:18.55pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>3.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Technological Support like OHP, LCD</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='tech'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	 
	 </p>
     </td>
 </tr>
 
 <tr style='height:19.65pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>4.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Photocopy of Study Material</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='photocopy'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	 
	 </p>
      </td>
 </tr>
 
 <tr style='height:39.25pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>5.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Availability of other resources like Internet/ Computer/ software / databases etc.</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	  
	  <select name='internet'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	  </p>
      </td>
 </tr>
 
 <tr style='height:20.75pt'>
     <td width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>6.</p>
     </td>
     <td width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Cleanliness of the classroom</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='room'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	 
	 </p>
     </td>
 </tr>
</table>
<br>
<u>Academic Assessment: <br></u>
</b>
Please give your feedback for all the subjects that you have studied in the current semester. The scoring should be as follows : -
<br><br>
<table border=1 cellspacing=0 cellpadding=2>
  <tr>
    <th>
	Very Poor
	</th>
    <th>
	Poor
	</th>
    <th>
	Average
	</th>
    <th>
	Good
	</th>
    <th>
	Excellent
	</th>
	

  </tr>
  <tr align="center">
    <td>
	1
	</td>
    <td>
	2
	</td>
    <td>
	3
	</td>
    <td>
	4
	</td>
    <td>
	5
	</td>
  </tr>

</table>
<br>
<table border=1 cellspacing=0 cellpadding=3>

  <tr>
    <td colspan=2>
	  <b>&nbsp;&nbsp;&nbsp;&nbsp;Academic Assessment<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject Code</b>
	</td>
	<td>
	<?php echo $SUBJECT_CODES[0];?><br><?php echo $SUBJECT_NAMES[0];?>
	</td>
	<td>
	<?php echo $SUBJECT_CODES[1];?><br><?php echo $SUBJECT_NAMES[1];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $SUBJECT_CODES[2];?><br><?php echo $SUBJECT_NAMES[2];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $SUBJECT_CODES[3];?><br><?php echo $SUBJECT_NAMES[3];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $SUBJECT_CODES[4];?><br><?php echo $SUBJECT_NAMES[4];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	
  </tr>
  <tr>
  
    <td  width=383 colspan=2>
	  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>
	  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>
	</td>
	<td width=72>
	<?php echo $FACULTY_NAMES[0];?>
	</td>
	<td>
	<?php echo $FACULTY_NAMES[1];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $FACULTY_NAMES[2];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $FACULTY_NAMES[3];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	<?php echo $FACULTY_NAMES[4];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	
  </tr>
  
  <tr>
    <td width=47>
	  <b>  1. </b>
	 </td>
	 <td>
	  Ability to bring conceptual clarity.<br><br>
	 </td>
	 <td><input type='text' class='input-small' style="color:#ff445f" size='1' value='3' name='f11'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f12'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f13'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f14'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f15'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f16'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f17'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f18'></td>
	 

  </tr>
 <tr>
    <td width=47>
	  <b>  2. </b>
	 </td>
	 <td>
	  Teacher’s subject knowledge<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f21'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f22'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f23'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f24'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f25'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f26'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f27'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f28'></td>
	 
  </tr>
  <tr>
    <td width=47>
	  <b>  3. </b>
	 </td>
	 <td>
	  Compliments theory with practical examples<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f31'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f32'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f33'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f34'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f35'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f36'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f37'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f38'></td>
	 
  </tr>

  <tr>
    <td width=47>
	  <b>  4. </b>
	 </td>
	 <td>
	  Handling of cases / assignments / exercises / activities<br><br>
	 </td>

	 <td><input type='text' class='input-small'  size='1' value='3' name='f41'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f42'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f43'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f44'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f45'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f46'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f47'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f48'></td>
	
	 </tr>
  <tr>
    <td width=47>
	  <b>  5. </b>
	 </td>
	 <td>
	  Motivation provided by the teacher<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f51'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f52'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f53'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f54'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f55'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f56'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f57'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f58'></td>
	 
  </tr>
  <tr>
    <td width=47>
	  <b>  6. </b>
	 </td>
	 <td>
	  Ability to control the class<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f61'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f62'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f63'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f64'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f65'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f66'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f67'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f68'></td>
  </tr>
  <tr>
    <td width=47>
	  <b>  7. </b>
	 </td>
	 <td>
	 Completion & Coverage of Course<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f71'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f72'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f73'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f74'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f75'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f76'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f77'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f78'></td>
  </tr>

  <tr>
    <td width=47>
	  <b>  8. </b>
	 </td>
	 <td>
	 Teacher’s Communication Skill<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f81'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f82'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f83'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f84'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f85'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f86'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f87'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f88'></td>
  </tr>

  <tr>
    <td width=47>
	  <b>  9. </b>
	 </td>
	 <td>
	  Teacher’s Regularity & Punctuality<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f91'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f92'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f93'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f94'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f95'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f96'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f97'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f98'></td>
  </tr>
<tr>
    <td width=47>
	  <b>  10. </b>
	 </td>
	 <td>
	 Interaction & guidance outside the classroom<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f101'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f102'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f103'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f104'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f105'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f106'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f107'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f108'></td>
  </tr>
<tr>
    <td width=47>
	  <b>  11. </b>
	 </td>
	 <td>
	  Relevance of syllabus as per industry requirement<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f111'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f112'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f113'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f114'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f115'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f116'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f117'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f118'></td>
  </tr>
<tr>
    <td width=47>
	  <b>  12. </b>
	 </td>
	 <td>
	  Sufficiency of course content<br><br>
	 </td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f121'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f122'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f123'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f124'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f125'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f126'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f127'></td>
	 <td><input type='text' class='input-small'  size='1' value='3' name='f128'></td>
  </tr>
  </table>
<input type='submit' id='send' class='btn btn-success'>
</form>
</div>
</body>
</div>

</html>