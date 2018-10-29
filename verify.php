<?php   session_start();  ?>
<?php
     
include "database_config.php";
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
<?php
/* Writing data to session */

$_SESSION['books']=$_POST['books'];
$_SESSION['basic']=$_POST['basic'];
$_SESSION['tech']=$_POST['tech'];
$_SESSION['photocopy']=$_POST['photocopy'];
$_SESSION['internet']=$_POST['internet'];
$_SESSION['room']=$_POST['room'];

$_SESSION['f11']=$_POST['f11'];
$_SESSION['f12']=$_POST['f12'];
$_SESSION['f13']=$_POST['f13'];
$_SESSION['f14']=$_POST['f14'];
$_SESSION['f15']=$_POST['f15'];
$_SESSION['f16']=$_POST['f16'];
$_SESSION['f17']=$_POST['f17'];
$_SESSION['f18']=$_POST['f18'];


$_SESSION['f21']=$_POST['f21'];
$_SESSION['f22']=$_POST['f22'];
$_SESSION['f23']=$_POST['f23'];
$_SESSION['f24']=$_POST['f24'];
$_SESSION['f25']=$_POST['f25'];
$_SESSION['f26']=$_POST['f26'];
$_SESSION['f27']=$_POST['f27'];
$_SESSION['f28']=$_POST['f28'];



$_SESSION['f31']=$_POST['f31'];
$_SESSION['f32']=$_POST['f32'];
$_SESSION['f33']=$_POST['f33'];
$_SESSION['f34']=$_POST['f34'];
$_SESSION['f35']=$_POST['f35'];
$_SESSION['f36']=$_POST['f36'];
$_SESSION['f37']=$_POST['f37'];
$_SESSION['f38']=$_POST['f38'];



$_SESSION['f41']=$_POST['f41'];
$_SESSION['f42']=$_POST['f42'];
$_SESSION['f43']=$_POST['f43'];
$_SESSION['f44']=$_POST['f44'];
$_SESSION['f45']=$_POST['f45'];
$_SESSION['f46']=$_POST['f46'];
$_SESSION['f47']=$_POST['f47'];
$_SESSION['f48']=$_POST['f48'];



$_SESSION['f51']=$_POST['f51'];
$_SESSION['f52']=$_POST['f52'];
$_SESSION['f53']=$_POST['f53'];
$_SESSION['f54']=$_POST['f54'];
$_SESSION['f55']=$_POST['f55'];
$_SESSION['f56']=$_POST['f56'];
$_SESSION['f57']=$_POST['f57'];
$_SESSION['f58']=$_POST['f58'];



$_SESSION['f61']=$_POST['f61'];
$_SESSION['f62']=$_POST['f62'];
$_SESSION['f63']=$_POST['f63'];
$_SESSION['f64']=$_POST['f64'];
$_SESSION['f65']=$_POST['f65'];
$_SESSION['f66']=$_POST['f66'];
$_SESSION['f67']=$_POST['f67'];
$_SESSION['f68']=$_POST['f68'];



$_SESSION['f71']=$_POST['f71'];
$_SESSION['f72']=$_POST['f72'];
$_SESSION['f73']=$_POST['f73'];
$_SESSION['f74']=$_POST['f74'];
$_SESSION['f75']=$_POST['f75'];
$_SESSION['f76']=$_POST['f76'];
$_SESSION['f77']=$_POST['f77'];
$_SESSION['f78']=$_POST['f78'];



$_SESSION['f81']=$_POST['f81'];
$_SESSION['f82']=$_POST['f82'];
$_SESSION['f83']=$_POST['f83'];
$_SESSION['f84']=$_POST['f84'];
$_SESSION['f85']=$_POST['f85'];
$_SESSION['f86']=$_POST['f86'];
$_SESSION['f87']=$_POST['f87'];
$_SESSION['f88']=$_POST['f88'];



$_SESSION['f91']=$_POST['f91'];
$_SESSION['f92']=$_POST['f92'];
$_SESSION['f93']=$_POST['f93'];
$_SESSION['f94']=$_POST['f94'];
$_SESSION['f95']=$_POST['f95'];
$_SESSION['f96']=$_POST['f96'];
$_SESSION['f97']=$_POST['f97'];
$_SESSION['f98']=$_POST['f98'];



$_SESSION['f101']=$_POST['f101'];
$_SESSION['f102']=$_POST['f102'];
$_SESSION['f103']=$_POST['f103'];
$_SESSION['f104']=$_POST['f104'];
$_SESSION['f105']=$_POST['f105'];
$_SESSION['f106']=$_POST['f106'];
$_SESSION['f107']=$_POST['f107'];
$_SESSION['f108']=$_POST['f108'];



$_SESSION['f111']=$_POST['f111'];
$_SESSION['f112']=$_POST['f112'];
$_SESSION['f113']=$_POST['f113'];
$_SESSION['f114']=$_POST['f114'];
$_SESSION['f115']=$_POST['f115'];
$_SESSION['f116']=$_POST['f116'];
$_SESSION['f117']=$_POST['f117'];
$_SESSION['f118']=$_POST['f118'];


$_SESSION['f121']=$_POST['f121'];
$_SESSION['f122']=$_POST['f122'];
$_SESSION['f123']=$_POST['f123'];
$_SESSION['f124']=$_POST['f124'];
$_SESSION['f125']=$_POST['f125'];
$_SESSION['f126']=$_POST['f126'];
$_SESSION['f127']=$_POST['f127'];
$_SESSION['f128']=$_POST['f128'];






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

<script>
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
</script>
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

<form action='' id='form1' method='post'>
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
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;'><?php echo  $_POST['books'];?>
	 
		
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
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><?php echo   $_POST['basic']; ?>
			  
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
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><?php echo   $_POST['tech'];?>
	 
		
	 
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
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'> <?php echo  $_POST['photocopy'];?>
	 
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
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'> <?php echo  $_POST['internet'] ;?>
		
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
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><?php echo   $_POST['room'] ;?>
	 
	 
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
	 <td><?php echo $_POST['f11'];?></td>
	 <td><?php echo $_POST['f12'];?></td>
	 <td><?php echo $_POST['f13'];?></td>
	 <td><?php echo $_POST['f14'];?></td>
	 <td><?php echo $_POST['f15'];?></td>
	 <td><?php echo $_POST['f16'];?></td>
	 <td><?php echo $_POST['f17'];?></td>
	 <td><?php echo $_POST['f18'];?></td>
	 

  </tr>
 <tr>
    <td width=47>
	  <b>  2. </b>
	 </td>
	 <td>
	  Teacher’s subject knowledge<br><br>
	 </td>
	 <td><?php echo $_POST['f21'];?></td>
	 <td><?php echo $_POST['f22'];?></td>
	 <td><?php echo $_POST['f23'];?></td>
	 <td><?php echo $_POST['f24'];?></td>
	 <td><?php echo $_POST['f25'];?></td>
	 <td><?php echo $_POST['f26'];?></td>
	 <td><?php echo $_POST['f27'];?></td>
	 <td><?php echo $_POST['f28'];?></td>
	 
  </tr>
  <tr>
    <td width=47>
	  <b>  3. </b>
	 </td>
	 <td>
	  Compliments theory with practical examples<br><br>
	 </td>
	 <td><?php echo $_POST['f31'];?></td>
	 <td><?php echo $_POST['f32'];?></td>
	 <td><?php echo $_POST['f33'];?></td>
	 <td><?php echo $_POST['f34'];?></td>
	 <td><?php echo $_POST['f35'];?></td>
	 <td><?php echo $_POST['f36'];?></td>
	 <td><?php echo $_POST['f37'];?></td>
	 <td><?php echo $_POST['f38'];?></td>
	 
  </tr>

  <tr>
    <td width=47>
	  <b>  4. </b>
	 </td>
	 <td>
	  Handling of cases / assignments / exercises / activities<br><br>
	 </td>

	 <td><?php echo $_POST['f41'];?></td>
	 <td><?php echo $_POST['f42'];?></td>
	 <td><?php echo $_POST['f43'];?></td>
	 <td><?php echo $_POST['f44'];?></td>
	 <td><?php echo $_POST['f45'];?></td>
	 <td><?php echo $_POST['f46'];?></td>
	 <td><?php echo $_POST['f47'];?></td>
	 <td><?php echo $_POST['f48'];?></td>
	
	 </tr>
  <tr>
    <td width=47>
	  <b>  5. </b>
	 </td>
	 <td>
	  Motivation provided by the teacher<br><br>
	 </td>
	 <td><?php echo $_POST['f51'];?></td>
	 <td><?php echo $_POST['f52'];?></td>
	 <td><?php echo $_POST['f53'];?></td>
	 <td><?php echo $_POST['f54'];?></td>
	 <td><?php echo $_POST['f55'];?></td>
	 <td><?php echo $_POST['f56'];?></td>
	 <td><?php echo $_POST['f57'];?></td>
	 <td><?php echo $_POST['f58'];?></td>
	 
  </tr>
  <tr>
    <td width=47>
	  <b>  6. </b>
	 </td>
	 <td>
	  Ability to control the class<br><br>
	 </td>
	 <td><?php echo $_POST['f61'];?></td>
	 <td><?php echo $_POST['f62'];?></td>
	 <td><?php echo $_POST['f63'];?></td>
	 <td><?php echo $_POST['f64'];?></td>
	 <td><?php echo $_POST['f65'];?></td>
	 <td><?php echo $_POST['f66'];?></td>
	 <td><?php echo $_POST['f67'];?></td>
	 <td><?php echo $_POST['f68'];?></td>
  </tr>
  <tr>
    <td width=47>
	  <b>  7. </b>
	 </td>
	 <td>
	 Completion & Coverage of Course<br><br>
	 </td>
	 <td><?php echo $_POST['f71'];?></td>
	 <td><?php echo $_POST['f72'];?></td>
	 <td><?php echo $_POST['f73'];?></td>
	 <td><?php echo $_POST['f74'];?></td>
	 <td><?php echo $_POST['f75'];?></td>
	 <td><?php echo $_POST['f76'];?></td>
	 <td><?php echo $_POST['f77'];?></td>
	 <td><?php echo $_POST['f78'];?></td>
  </tr>

  <tr>
    <td width=47>
	  <b>  8. </b>
	 </td>
	 <td>
	 Teacher’s Communication Skill<br><br>
	 </td>
	 <td><?php echo $_POST['f81'];?></td>
	 <td><?php echo $_POST['f82'];?></td>
	 <td><?php echo $_POST['f83'];?></td>
	 <td><?php echo $_POST['f84'];?></td>
	 <td><?php echo $_POST['f85'];?></td>
	 <td><?php echo $_POST['f86'];?></td>
	 <td><?php echo $_POST['f87'];?></td>
	 <td><?php echo $_POST['f88'];?></td>
  </tr>

  <tr>
    <td width=47>
	  <b>  9. </b>
	 </td>
	 <td>
	  Teacher’s Regularity & Punctuality<br><br>
	 </td>
	 <td><?php echo $_POST['f91'];?></td>
	 <td><?php echo $_POST['f92'];?></td>
	 <td><?php echo $_POST['f93'];?></td>
	 <td><?php echo $_POST['f94'];?></td>
	 <td><?php echo $_POST['f95'];?></td>
	 <td><?php echo $_POST['f96'];?></td>
	 <td><?php echo $_POST['f97'];?></td>
	 <td><?php echo $_POST['f98'];?></td>
  </tr>
<tr>
    <td width=47>
	  <b>  10. </b>
	 </td>
	 <td>
	 Interaction & guidance outside the classroom<br><br>
	 </td>
	 <td><?php echo $_POST['f101'];?></td>
	 <td><?php echo $_POST['f102'];?></td>
	 <td><?php echo $_POST['f103'];?></td>
	 <td><?php echo $_POST['f104'];?></td>
	 <td><?php echo $_POST['f105'];?></td>
	 <td><?php echo $_POST['f106'];?></td>
	 <td><?php echo $_POST['f107'];?></td>
	 <td><?php echo $_POST['f108'];?></td>
  </tr>
<tr>
    <td width=47>
	  <b>  11. </b>
	 </td>
	 <td>
	  Relevance of syllabus as per industry requirement<br><br>
	 </td>
	 <td><?php echo $_POST['f111'];?></td>
	 <td><?php echo $_POST['f112'];?></td>
	 <td><?php echo $_POST['f113'];?></td>
	 <td><?php echo $_POST['f114'];?></td>
	 <td><?php echo $_POST['f115'];?></td>
	 <td><?php echo $_POST['f116'];?></td>
	 <td><?php echo $_POST['f117'];?></td>
	 <td><?php echo $_POST['f118'];?></td>
  </tr>
<tr>
    <td width=47>
	  <b>  12. </b>
	 </td>
	 <td>
	  Sufficiency of course content<br><br>
	 </td>
	 <td><?php echo $_POST['f121'];?></td>
	 <td><?php echo $_POST['f122'];?></td>
	 <td><?php echo $_POST['f123'];?></td>
	 <td><?php echo $_POST['f124'];?></td>
	 <td><?php echo $_POST['f125'];?></td>
	 <td><?php echo $_POST['f126'];?></td>
	 <td><?php echo $_POST['f127'];?></td>
	 <td><?php echo $_POST['f128'];?></td>
  </tr>
  </table>

<input type='button' class='btn btn-primary' value='Edit' onclick="submitForm('edit.php')">&nbsp;&nbsp;&nbsp;&nbsp;
<input type='button' value='Submit' class='btn btn-success'onclick="submitForm('submit.php')">
</form>