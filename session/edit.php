<?php session_start(); ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
		   

          echo 'Welcome ' . $_SESSION['use'];
		  echo '<br> You logged in as : ' . $_SESSION['type'];

        //  echo "Login Success";
		
		

          echo "<br><a href='logout.php'> Logout</a> "; 
?>

<html>
<head>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name Of the Programme:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MTECH(IT) 5 + 1/2 YEAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semester:&nbsp;&nbsp;&nbsp; 6th SEM
<br><br>

<u>Infrastructure Support</u>

<form action='verify.php' method='post'>


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
	
	$value = $_SESSION['books'];
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
	
	$value = $_SESSION['basic'];
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
	
	$value = $_SESSION['tech'];
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
	
	$value = $_SESSION['photocopy'];
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
	
	$value = $_SESSION['internet'];
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
	
	$value = $_SESSION['room'];
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
<input type='submit'>
</form>
</body>
</htm