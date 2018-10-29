<?php
require_once('currentfilename.php');
/* $basename holds current file name */

?>

<?php

/* For the pages 'verify2.php' you need to insure that POST values are not comprised with javascript off trick.
   So we will check each post values here */
if($basename=='verify2.php')
{
	for($i=1;$i<=$NO_OF_QUESTIONS;$i++)
	{
		

    
		for($j=1;$j<=$NO_OF_SUBJECTS;$j++)
		{
			$v=$_POST['f' . $i . ($j  )];
			if(!($v>=1 && $v<=5))
				exit("<div class='alert-danger'>You have tried submiting '$v' value in a input field accepting values only from 1 to 5. <br>Please go back and correct it!");
		}
	}
}
?>

<b>
<div align='center'  style='font-size:25px'>
<img src='img/davv_logo.gif'>
INTERNATIONAL INSTITUTE OF PROFESSIONAL STUDIES
<img src='img/iips_logo.jpg'><br>
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
<div class="well" style='background-color:#F0E6FF'>
<!--
Click to show infrastructure feedback : <div onmouseover="$(this).css('width','32px');$(this).css('height','32px')" onmouseout="$(this).css('width','30px');$(this).css('height','30px')"  onclick='$("[name=infratable]").show(1000)' class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Expand"><i class="fa fa-plus"></i></div>
Click to hide infrastructure feedback : <div onmouseover="$(this).css('width','32px');$(this).css('height','32px')" onmouseout="$(this).css('width','30px');$(this).css('height','30px')"  onclick='$("[name=infratable]").hide(1000)' class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></div>-->

<?php 
$actionpath='verify2.php';

if($basename=='form2.php' || $basename=='edit2.php')
	$actionpath='verify2.php';
else
	$actionpath='';
?>

<form action='<?php echo $actionpath; ?>' id='form1' method='post' <?php if($basename!='verify2.php') echo "onsubmit='return checkBoxes()' "; ?> name='myForm'>




</b>

<div class="box box-success" id="loading-example">
                                <div class="box-header" style="cursor: move;">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <div class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></div>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Infrastructure Support</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="row">
									<div class="col-sm-12">
							
<?php
echo "<table name='infratable' class='table table-bordered table-hover' border=1 cellspacing=0 cellpadding=0 width=632>";

for($i=1;$i<=$NO_OF_IQUESTIONS+1;$i++)
{  

	/* For first row .... Header*/
	if($i==1)   
	{	
		echo "<tr  style='height:19.65pt;color:black;' class='alert-info' >
		";
	
	}
	else
	{
		echo "<tr style='height:19.65pt;color:black;'>
		";
	}
	
	for($j=1;$j<=3;$j++)
	{
		if($i==1)
		{
			if($j==1)
			{
				echo "<td width=419 colspan=2 valign=top style='width:314.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
					<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;'>
					<b>Infrastructure Support </b>
					</p>
					</td>
					";
			}
			else if($j==2)
			{
				echo "<td width=213 valign=top style='width:159.75pt;border:solid #191919 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
					<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center'><b>Grade</b></p>
					</td>
					";
			}
			
		}
		else   /*  For all rows other than first one(that is.other than header row) */
		{
			
			if($j==1)
			{
				echo "<td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 		5.4pt;height:19.65pt;color:black;'>
				<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>" . ($i-1) .".</p>
				</td>
				";
			}
			else if($j==2)
			{
				echo "<td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 	1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;color:black;'>
				<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>" . $IQUESTIONS[$i-2] . "</p>
				</td>
				";
     
			}
			else if($j==3)
			{
			
			
				if($basename=='form2.php')
					echo "<td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;background-color:#E6E6E6;background-color:#E6E6E6;color:black;'>
					<p style='margin-bottom:0cm;margin-bottom:.0001pt;'>
		
					<div class='controls'>
					<select name='i" . ($i-1) . "'>
					<option id='1' name='Very Poor'> Very Poor</option>
					<option id='2' name='Poor'> Poor</option>
					<option id='3' name='Average' selected> Average</option>
					<option id='4' name='Good'> Good</option>
					<option id='5' name='Excellent'> Excellent</option>
					</select>
					</div>	
					
				
					</p>
					
					</td>
					";
					
				else if($basename=='edit2.php')
				{
					$value =$_POST['i' . ($i-1) ];
					echo "<td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;background-color:#E6E6E6;background-color:#E6E6E6;color:black;'>
					<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;'>";
					
					echo "
					<select name='i" . ($i-1) . "' >
					<option id='1' name='Very Poor'" ;
					if($value=='Very Poor') echo 'selected';
					echo  "> Very Poor</option>
					<option id='2' name='Poor' ";
					if($value=='Poor') echo 'selected';
					echo " > Poor</option>
					<option id='3' name='Average'";
					if($value=='Average') echo 'selected';
					echo " > Average</option>
					<option id='4' name='Good' ";
					if($value=='Good') echo 'selected';
					echo " > Good</option>
					<option id='5' name='Excellent'";
					if($value=='Excellent') echo 'selected';
					echo "> Excellent</option>
			
					</select>";
					//echo   $_POST["c'" . ($i-1) . '"']; 
		
		
			
		
					echo "</p>
			
					</td>";
				
					
				}
				else if($basename=='verify2.php')
				{
				
					$value = $_POST['i' . ($i-1)];
					echo "<td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;background-color:#E6E6E6;background-color:#E6E6E6;color:black;'>
					<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;'>";
					
					echo "
					<select style='display:none' name='i" . ($i-1) . "' >
					<option id='1' name='Very Poor'" ;
					if($value=='Very Poor') echo 'selected';
					echo  "> Very Poor</option>
					<option id='2' name='Poor' ";
					if($value=='Poor') echo 'selected';
					echo " > Poor</option>
					<option id='3' name='Average'";
					if($value=='Average') echo 'selected';
					echo " > Average</option>
					<option id='4' name='Good' ";
					if($value=='Good') echo 'selected';
					echo " > Good</option>
					<option id='5' name='Excellent'";
					if($value=='Excellent') echo 'selected';
					echo "> Excellent</option>
			
					</select>";
					echo   $_POST['i' . ($i-1)]; 
		
		
			
		
					echo "</p>
			
					</td>";
				
					
		
			
				}	
				
				
				
				
				
			}
			
			
			
			
		}
			
		
	}
	echo '</tr>';
}

?>
</table>
<!--<table style="display:none" name='infratable' class='table table-bordered table-hover' border=1 cellspacing=0 cellpadding=0 width=632>

 <tr  class='hnc' class='alert-info' >
                                        
	<td width=419 colspan=2 valign=top style='width:314.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
     <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;'>
	 <b>Infrastructure Support </b>
	 </p>
    </td>
    <td width=213 valign=top style='width:159.75pt;border:solid #191919 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:center'><b>Grade</b></p>
    </td>
 </tr>
 
 <tr style='height:19.65pt;color:black;'>
     <td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>1.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Availability of books in Library</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;background-color:#E6E6E6;background-color:#E6E6E6;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;'>
	 
	 <div class="controls">
		<select name='c1'>
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
 
 <tr style='height:18.55pt;color:black;'>
     <td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>2.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Basic Requirements like furniture, desk, chair etc.</p>
      </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;background-color:#E6E6E6;color:black;'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	  
	  <select name='c2'>
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
     <td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>3.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;color:black;'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Technological Support like OHP, LCD</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.55pt;color:blackcolor:blackbackground-color:#E6E6E6;;background-color:#E6E6E6;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='c3'>
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
     <td class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>4.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Photocopy of Study Material</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.65pt;background-color:#E6E6E6;background-color:#E6E6E6'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='c4'>
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
     <td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>5.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Availability of other resources like Internet/ Computer/ software / databases etc.</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:39.25pt;background-color:#E6E6E6;background-color:#E6E6E6;color:black;'>
      <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	  
	  <select name='c5'>
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
     <td  class='alert-success' width=46 valign=top style='width:34.35pt;border:solid #191919 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>6.</p>
     </td>
     <td class='alert-warning' width=374 valign=top style='width:280.2pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>Cleanliness of the classroom</p>
     </td>
     <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:none;border-bottom:solid #191919 1.0pt;border-right:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.75pt;background-color:#E6E6E6;color:black;'>
     <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
	 
	 <select name='c6'>
		<option id='1' name='Very Poor'> Very Poor</option>
		<option id='2' name='Poor'> Poor</option>
		<option id='3' name='Average' selected> Average</option>
		<option id='4' name='Good'> Good</option>
		<option id='5' name='Excellent'> Excellent</option>
		</select>
		
	 
	 </p>
     </td>
 </tr>
</table>-->


</div>
                                      </div><!-- /.row - inside box -->
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="row">
                                        
                                        
                                    </div><!-- /.row -->
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->        
                            

<div class="box box-success" id="loading-example">
                                <div class="box-header" style="cursor: move;">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <div class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></div>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Academic Assessment</h3>
								<br>
<b>
<u> <br></u>
</b>
Please give your feedback for all the subjects that you have studied in the current semester. The scoring should be as follows : -
<br><br>


	
									
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="row">
									<div class="col-sm-12">


<table name='facultytable' class='table-bordered' style='border-color:black' border=1 cellspacing=0 cellpadding=2>

  <tr class='alert-info' >
    <th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
	Very Poor
	</th>
    <th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
	Poor
	</th>
    <th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
	Average
	</th>
    <th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
	Good
	</th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
    <th style='width:114.6pt;border:solid #191919 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
	Excellent
	</th>
	

  </tr>
  <tr class='alert-warning' align="center">
    <td style='border:solid #191919 1.0pt;'>
	1
	</td>
    <td style='border:solid #191919 1.0pt;'>
	2
	</td>
    <td style='border:solid #191919 1.0pt;'>
	3
	</td>
    <td style='border:solid #191919 1.0pt;'>
	4
	</td>
    <td style='border:solid #191919 1.0pt;'>
	5
	</td>
  </tr>

</table>

<br>
<b>
<br>
<!--
Click to show faculty feedback : <div  onmouseover="$(this).css('width','32px');$(this).css('height','32px')" onmouseout="$(this).css('width','30px');$(this).css('height','30px')"  onclick='$("[name=facultytable]").show(1000)' class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Expand"><i class="fa fa-plus"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;
Click to hide faculty feedback : <div  onmouseover="$(this).css('width','32px');$(this).css('height','32px')" onmouseout="$(this).css('width','30px');$(this).css('height','30px')" onclick='$("[name=facultytable]").hide(1000)' class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></div>
-->
</b>
<br><br>
<div class='alert alert-danger' name='wrongsubmit' style='display:none'>You need to fill all the textboxs below with values 1 to 5 before submitting! </div>

<table style='' class='table table-bordered table-striped' border=5 cellspacing=0 cellpadding=0  name='facultytable' border=1 cellspacing=0 cellpadding=3>
<?php
function space($no)
{
for($x=0;$x<$no;$x++)
  echo "&nbsp;";
}

for($i=1;$i<=2;$i++)
{
	echo "<tr class='alert-info'>";
	for($j=1;$j<=$NO_OF_SUBJECTS+1;$j++)
	{
		if($i==1 && $j==1)
		{ 
		echo "<td style='border:solid #191919 1.0pt;color:black' colspan=2><b>" ;
		space(1);
		echo "Academic Assessment <br> " ;
		space(68) ;
		echo "Subject Code</b></td>
		";
		 
		}
		else if($i==2 && $j==1)
		{
			echo "<td style='border:solid #191919 1.0pt;color:black' name='c" . $j. "' width=383 colspan=2><b>";
			space(75);
		echo "</b><br><b>" ;
		space(67) ;
		echo "Faculty Name" ;
		space(7);
		echo "</b><br></td>
		";
		}
		else if($i==1)
		{
			echo "<td style='border:solid #191919 1.0pt;color:black' width=72 name='c" . $j. "'>" .  $SUBJECT_CODES[$j-2] . "<br>" . $SUBJECT_NAMES[$j-2] . "</td>
			";
		}
		else if($i==2)
		{
			echo "<td style='border:solid #191919 1.0pt;color:black' width=72 name='c" . $j. "'>" . $FACULTY_NAMES[$j-2] . "</td>
			";
		}
	}
	echo "</tr>";

}

for($i=1;$i<=$NO_OF_QUESTIONS+2;$i++)
{
    
	
	
	/* Hide last rows */
	if($i<3 || $basename=='verify2.php')
		echo "<tr name='r" . $i. "'> ";
		
		
	else if($i>=3 )
		echo "<tr name='r" . $i. "' style='display:none'> ";
	
	
    
	for($j=1;$j<=$NO_OF_SUBJECTS+2;$j++)
    {
	
	
	
		if($i<=$NO_OF_QUESTIONS)
		{
			if($j==1)
			{
				echo "<td class='alert-success' style='border:solid #191919 1.0pt;color:black' width=47>";
				echo "<b>  " . $i . ". </b>";
				echo "</td>
				";
			}
			else if($j==2)
			{
				echo "<td  class ='alert-warning' style='border:solid #191919 1.0pt;color:black'>". $QUESTIONS[$i-1]."</td>
				";
			}
			else
			{
				
					echo "<td  class='alert-warning' style='border:solid #191919 1.0pt;background-color:#E6E6E6' name='c" . ($j-1). "'>";
					if($basename=='form2.php')
						echo "
					
							<input value='1' type='text' maxlength='1' onfocusout='getBoxes(f".  $i . ($j - 2)  . ")' onfocusin='$(\"[name=r" . ($i+1) . "]\").show(500)'  onmouseout='getBoxes()' class='input-small' size='1'  name='f" . $i . ($j - 2) . "'></td>
							";
					
					else if($basename=='verify2.php')
						echo "<input style='display:none' type='text' class='input-small' style='color:'' size='1' value='" . $_POST['f' . $i . ($j - 2 )] . 	"' name='f" . $i . ($j - 2) . "'>" . $_POST['f' . $i . ($j - 2)] . "</td>
							";
					else if($basename=='edit2.php')
						echo "
							<input type='text'  onfocusout='getBoxes(f".  $i . ($j - 2)  . ")' onfocusin='$(\"[name=r" . ($i+1) . "]\").show(500)'  	onmouseout='getBoxes()' class='input-small' value='" . $_POST['f' . $i . ($j - 2 )] . "' style='color:'' size='1' value='' name='f" . $i . ($j - 2) . "'>";

 
			}
		}
		else if($i==$NO_OF_QUESTIONS+1)
		{
			if($j==1)
			{
				echo "<td width=47>";
				echo "<b> </b>";
				echo "</td>
				";
			}
			else if($j==2)
			{
				echo "<td style='border:solid #191919 1.0pt;color:black'></td>
				";
			}
			else
			{
				echo '<td style="border:solid #191919 1.0pt;color:black"> <div style="display:none" onclick="$(\'[name=c' .  ($j-1). ']\').hide(500)" class="btn btn-danger" title="Collapse"><i class="fa fa-minus"></i></div></td>
				';

			}
		}
		
		else if($i==$NO_OF_QUESTIONS+2)
		{
			if($j==1)
			{
				echo "<td style='border:solid #191919 1.0pt;color:black' width=47>";
				echo "<b> </b>";
				echo "</td>";
			}
			else if($j==2)
			{
				echo "<td style='border:solid #191919 1.0pt;color:black'></td>";
			}
			else
			{
				if($basename!='verify2.php')
					echo '<td style="border:solid #191919 1.0pt;color:black"> <div style="display:none" onclick="$(\'[name=c' . ($j-2) . ']\').show(500)"class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></div></td>
				';

			}
		}
		
		
                                 
	}
	if($i<=$NO_OF_QUESTIONS)
	{
						if($basename!='verify2.php')
			echo '<td> <div onclick="$(\'[name=r' .  $i. ']\').hide(500)" onmouseover="$(this).css(\'width\',\'32px\');$(this).css(\'height\',\'32px\')" onmouseout="$(this).css(\'width\',\'30px\');$(this).css(\'height\',\'30px\')" class="btn btn-danger btn-sm" title="Collapse this row"><i class="fa fa-minus"></i></div></td>
			';
				if($basename!='verify2.php')
			echo '<td> <div onclick="$(\'[name=r' . ($i-1) . ']\').show(500)" onmouseover="$(this).css(\'width\',\'32px\');$(this).css(\'height\',\'32px\')" onmouseout="$(this).css(\'width\',\'30px\');$(this).css(\'height\',\'30px\')" class="btn btn-success btn-sm" title="Expand upper row"><i class="fa fa-plus"></i></div></td>
			';
	}
	echo "</tr>";

}	

?>
  </table> 
  <br><br>
 

</div>
                                      </div><!-- /.row - inside box -->
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="row">
                                        
                                        
                                    </div><!-- /.row -->
                                </div><!-- /.box-footer -->
                            </div> 
 


<?php
if($basename=='verify2.php')
	echo "
	
	<a class='btn btn-app'  style='background-color:#d9edf7;border-color:#bce8f1;color:#31708f' onclick=\"submitForm('edit2.php')\">
                                        <i class='fa fa-edit'></i> Edit
                                    </a>
	
	<a class='btn btn-app' style='background-color:#dff0d8;border-color:#d6e9c6;color:#3c763d'  onclick=\"submitForm('submit2.php')\">
                                        <i class='fa fa-play'></i> Submit 
                                    </a>
	
	
	";

else if($basename=='form2.php')
	echo "
	<!--<input type=submit>-->
		<input type='submit' id='send' class='btn btn-success'>
	<a  class='btn btn-app' id='send1' style='background-color:#dff0d8;border-color:#d6e9c6;color:#3c763d' onclick=\"submitForm('verify2.php')\">
                                        <i class='fa fa-play'></i> Submit 
                                    </a>
	";
else
echo "
	<a class='btn btn-app' id='send1' style='background-color:#dff0d8;border-color:#d6e9c6;color:#3c763d' onclick=\"submitForm('verify2.php')\">
                                        <i class='fa fa-play'></i> Submit 
                                    </a>
	";
	
	

?>


</form>
</div>

</div>

						
<script>
		function submitForm(action)
		{
			document.getElementById('form1').action = action;
			if(action=="edit2.php" || action=="submit2.php")
				document.getElementById('form1').submit();
			var allowedtosend=checkBoxes();
			if(allowedtosend==true)
				document.getElementById('form1').submit();
		}
	</script>			  
			<?php
include 'updatetimestamp.php';
?>

            