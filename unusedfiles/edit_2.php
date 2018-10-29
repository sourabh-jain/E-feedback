<?php session_start(); ?>
<?php


include "database_config.php"; /* Includes the details of database */
include "session_login.php";  /* Contents information regarding session header */
include "feedback_status.php"; /* Check the feedback fill status of the user */
include "subjects_faculties.php";         


	
/* $QUESTIONS is an array of strings containing all faculty questions 
  $NO_OF_QUESTIONS contains no of faculty questions.
  $IQUESTION is an array of strings containing all infrastructure questions 
   $NO_OF_IQUESTIONS contains no of infrastructure questions
   $FACULTY_NAMES is an array of strings containing all faculty names
   $SUBJECT_CODES is an array of strings containing all subject codes
   $SUBJECT_NAMES is an array of strings containing all subject names
   $NO_OF_SUBJECTS contains no of subjects
   

*/
	
		 
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

<title>E-Feedback Form</title>
</head>
<body>

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

<u>Infrastructure Support</u>

<form action='verify_2.php' method='post'>


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
	 
	<?php 
	
	$value = $_POST['books'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='books'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
		</select>
		
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
	  
	 
	<?php 
	
	$value = $_POST['basic'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='basic'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
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
	 
	 	 
	<?php 
	
	$value = $_POST['tech'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='tech'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
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
	 
	 	 
	<?php 
	
	$value = $_POST['photocopy'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='photocopy'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
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
	  
		 
	<?php 
	
	$value = $_POST['internet'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='internet'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
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
	 
		 
	<?php 
	
	$value = $_POST['room'];
	//echo $value;echo $value;echo $value;echo $value;echo $value;
	?>	
		<select name='room'>
		<option id='1' name='Very Poor' <?php if($value=='Very Poor') echo 'selected';?> > Very Poor</option>
		<option id='2' name='Poor'  <?php if($value=='Poor') echo 'selected';?> > Poor</option>
		<option id='3' name='Average'  <?php if($value=='Average') echo 'selected';?> > Average</option>
		<option id='4' name='Good'  <?php if($value=='Good') echo 'selected';?> > Good</option>
		<option id='5' name='Excellent'  <?php if($value=='Excellent') echo 'selected';?> > Excellent</option>
		
		</select>

	 </p>
     </td>
 </tr>
</table>
<br>
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
<?php
function space($no)
{
for($x=0;$x<$no;$x++)
  echo "&nbsp;";
}

for($i=1;$i<=2;$i++)
{
	echo "<tr>";
	for($j=1;$j<=$NO_OF_SUBJECTS+1;$j++)
	{
		if($i==1 && $j==1)
		{ 
		echo "<td colspan=2><b>" ;
		space(1);
		echo "Academic Assessment <br> " ;
		space(68) ;
		echo "Subject Code</b></td>";
		 
		}
		else if($i==2 && $j==1)
		{
			echo "<td  width=383 colspan=2><b>";
			space(75);
		echo "</b><br><b>" ;
		space(67) ;
		echo "Faculty Name" ;
		space(7);
		echo "</b><br></td>";
		}
		else if($i==1)
		{
			echo "<td width=72>" .  $SUBJECT_CODES[$j-2] . "<br>" . $SUBJECT_NAMES[$j-2] . "</td>";
		}
		else if($i==2)
		{
			echo "<td width=72>" . $FACULTY_NAMES[$j-2] . "</td>";
		}
	}
	echo "</tr>";

}

for($i=1;$i<=$NO_OF_QUESTIONS;$i++)
{
    echo "<tr> ";
	for($j=1;$j<=$NO_OF_SUBJECTS+2;$j++)
    {
	    if($j==1)
		{
			echo "<td width=47>";
			echo "<b>  " . $i . ". </b>";
			echo "</td>";
		}
		else if($j==2)
		{
			echo "<td>". $QUESTIONS[$i-1]."</td>";
		}
		else
		{
			echo "<td><input type='text' class='input-small' style='color:'' size='1' value='" . $_POST['f' . $i . ($j - 2 )] . "' name='f" . $i . ($j - 2) . "'></td>
			";
		}
	}
	echo "</tr>";
}	

  ?>
  </table> 

<input type='submit' class='btn btn-success'>
</form>

</b>
</div>
</body>
</html>