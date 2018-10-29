<?php


require_once('currentfilename.php');
/* $basename holds current file name */

if($basename=='quickanalysis.php')
	$current_activity = "At Quick Analysis Page";
else if($basename=='advancedanalysis.php')
	$current_activity = "At Advanced Analysis Page";
else if($basename=='customanalysis.php')
	$current_activity = "At Custom  Analysis Page";
$user = $_SESSION['use'];
mysqli_query($con,"UPDATE user set activity='$current_activity' where username='$user'");

	


?>				<form name='feedbackdata'  onsubmit='beforesubmit()' action='' method='post'>
				<input type='text' name='input1' id='input1' style='display:none'>
				 <input type='hidden' name='input2' id='input2' style=''>
				 
				<table class="table" border=1>
				
					<tr>
						<td width='100px'>
							 Course : &nbsp;
						</td>
						
						<td>
						<select name="programme">
						<option id='1' value='M.Tech(IT) 5 + 1/2 Years'>M.Tech(IT) 5 + 1/2 Years</option>
						<option id='2' value='MCA 6 Years(Section A)'>MCA 6 Years (Section A)</option>
						<option id='3' value='MCA 6 Years(Section B)'>MCA 6 Years(Section B)</option>
						<option id='4' value='MBA 5 Years'>MBA 5 Years</option>
						</select>

						</td>
					</tr>
					
					
					
					<tr>
						<td width='100px'>
							 Semester : &nbsp;
						</td>
						
						<td>
						<select name="semester">
						<option id='1' value='2'>2</option>
						<option id='2' value='4'>4</option>
						<option id='3' value='6'>6</option>
						<option id='4' value='8'>8</option>
						<option id='5' value='10'>10</option>
						<option id='6' value='12'>12</option>
						
						</select>
						</td>
					</tr>
					
					
					<?php
					
					if($basename=='customanalysis.php')  /* For quick analysis, you cannot configure this two parameters */
					{
					?>
					<tr>
					
				
					<td> CGPA Range : </td>
					<td>
							 
				 <div class="col-sm-8">
				                        <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="[1,10]" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show" data-slider-id="green">                           
                 </div>
		
					</td>
					</tr>
				
					<tr>
					
				
					<td> Attendace (in % ) : </td>
					<td>
							 
				 <div class="col-sm-7">
				                        <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="[1,100]" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show" data-slider-id="blue">                           
                 </div>
		
					</td>
					</tr>
				<?php
				}?>		



				<?php
				
				if($basename=='advancedanalysis.php')
				{
					echo '<tr><td>Choose Analysis : </td>';
					echo '<td><select name="tyanalysis">';
					$re=mysqli_query($con,"select  * from advanced_analysis");
					
					while($rw=mysqli_fetch_array($re))
					{
						echo '
						<option value="' . $rw['a_name'] . '">  ' .  $rw['a_name'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CGPA Range : ' . $rw['CGPA_LOWER_RANGE'] . ' to ' . $rw['CGPA_UPPER_RANGE'] . '&nbsp;&nbsp; Attedance Range : ' . $rw['ATT_LOWER_RANGE'] . '% to ' . $rw['ATT_UPPER_RANGE'] .'% </option>';
						
					}
					echo '</select>';
				}	
				
				?>
				
				
				<tr>
						<td>
							<input type='submit' value='Submit' name='submit'>
						</td>

				
				
				</table>
				
				
				</form>




				<?php
				
				$count=0;
				$TOTAL_DATA = array();
				$sfaculty_names = '';
				$ssubject_names = '';
				$stotal_record	= '';
				$smean = '';
				$smedian = '';
				$smode = '';
				$ssd ='';
				
				
				
				
				if(isset($_POST['submit']))
				{
					
				
					$course=$_POST['programme'];
					$sem=$_POST['semester'];
					
						/* Get upper lower range */

					if($basename=='customanalysis.php')  /* For quick analysis n advanced analysis, you cannot configure this two parameters */
					{
						
							$cgpadata = $_POST['input1'];
							$cgparange = explode(" ", $cgpadata);
			
					
							$CGPA_LOWER_RANGE=$cgparange[0];
							$CGPA_UPPER_RANGE=$cgparange[2];
	
				//	$CGPA_LOWER_RANGE=$CGPA_LOWER_RANGE-1;  /* As MYSQL rows starts from index 0 */
//					echo '<script>alert("' . $CGPA_LOWER_RANGE . '");</script>';
	//				echo '<script>alert("' . $cgparange[1] . '");</script>';
		
	//					echo '<script>alert("' . $CGPA_UPPER_RANGE . '");</script>'; 
				
							$attdata = $_POST['input2'];
							$attrange = explode(" ", $attdata);
				
					
							$ATT_LOWER_RANGE=$attrange[0];
							$ATT_UPPER_RANGE=$attrange[2];
	
//					$ATT_LOWER_RANGE=$ATT_LOWER_RANGE-1;


		//			echo '<script>alert("' . $ATT_LOWER_RANGE . '");</script>';
			//		echo '<script>alert("' . $attrange[1] . '");</script>';
		
		//				echo '<script>alert("' . $ATT_UPPER_RANGE . '");</script>'; 
				
					
					}
					
				if($basename=='quickanalysis.php')  /* For quick analysis, you cannot configure this two parameters */
				{
					$CGPA_LOWER_RANGE=0;
					$CGPA_UPPER_RANGE=10;
					$ATT_LOWER_RANGE=0;
					$ATT_UPPER_RANGE=100;
	
				}
				else if($basename=='advancedanalysis.php')
				{
					/* Get the data from post */
					$name=$_POST['tyanalysis'];
//					echo '<script>alert("' .$name .'");</script>';

					$r=mysqli_query($con,"SELECT * from advanced_analysis where a_name='$name'");
					$rw=mysqli_fetch_array($r);
					
					$CGPA_LOWER_RANGE=$rw['CGPA_LOWER_RANGE'];
					$CGPA_UPPER_RANGE=$rw['CGPA_UPPER_RANGE'];
					$ATT_LOWER_RANGE=$rw['ATT_LOWER_RANGE'];
					$ATT_UPPER_RANGE=$rw['ATT_UPPER_RANGE'];
					
				}
				
					
					$result=mysqli_query($con,"SELECT * from feedback_data where programme_name='$course' AND semester='$sem' AND cgpa BETWEEN  $CGPA_LOWER_RANGE  AND  $CGPA_UPPER_RANGE  AND attendanceperc BETWEEN $ATT_LOWER_RANGE AND $ATT_UPPER_RANGE");
					
					
					
					
					echo '<table class="table table-stripped" border=1>';
					
					//$FEEDBACK_DATA =array();
					$FACULTY_DATA = array();
					$i=0;
					function transpose($array) 
					{
						array_unshift($array, null);
						return call_user_func_array('array_map', $array);
					}

						$isnotfirst=0;
					
					while($row=mysqli_fetch_array($result))
					{	
						
						$isnotfirst=0;
						
						$FEEDBACK_DATA = array();
						foreach (explode("#",$row['data']) as $rd)
						{	
							if($isnotfirst==1)   /* Remove the first row ie. Infrastructure details row */
								$FEEDBACK_DATA[] = explode(",",$rd);
							$isnotfirst=1;
						}
						
						$TOTAL_DATA[$count++]=$FEEDBACK_DATA;
						
						$i++;
					}
					
					if($isnotfirst==0)
						echo 'No records ';
					else
					{
					
						$TOTAL_DATA[$count++]=$FEEDBACK_DATA;
					
						/* Get faculty names */
						
			
						$programme_filter='';	
			
						$section_filter='-';
					
						$subject_filter='';
		
						if(preg_match("/Tech/",$course))
						{	
							
							$programme_filter='%IT';
							
						}
						else if(preg_match("/MCA/",$course))
						{		
								
							$programme_filter='%IC';
							if(preg_match("/Section A/",$course))
								$section_filter='A';
							else
								$section_filter='B';
						}
						else if(preg_match("/MBA/",$course))
						{	
							$programme_filter='%IM';
						}
						
						$programme_filter=$programme_filter . '-' . $sem . '%';
		
		
	
	
						
						/* Generate subject codes and faculty names */	  
						$result=mysqli_query($con,"SELECT * 
													FROM faculty
													WHERE faculty_id
													IN (
													SELECT faculty_id
													FROM subjects
													WHERE subject_id LIKE  '$programme_filter' AND section='$section_filter' 
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
													WHERE subject_id LIKE  '$programme_filter' AND section='$section_filter' 
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
			
	
					
						
				
						/* Transpose rows */
						$i=0;
					
						foreach($TOTAL_DATA as $TOTALROWS)
						{
							$TOTAL_DATA[$i]=transpose($TOTALROWS);
							$i++;
						}
		
						$TOTAL_DATA = transpose($TOTAL_DATA);
						$k=0;
						echo '<table class="table" border=\'1\'>';
						echo '<tr class="alert-info">
									<td> Faculty Name </td>
									<td> Subject Name </td>
									<td> Total Records </td>
									<td> Mean </td>
									<td> Median </td>
									<td> Mode </td>
									<td> S.D. </td>
								</tr>';
									
						foreach ($TOTAL_DATA as $totalrows)
						{
							
							$avgcount=0;
							$avg=0;
							
						//	echo 'For  <span style="color:blue">' . ($FACULTY_NAMES[$k]) . '</span> teaching <span style="color:green">' . $SUBJECT_NAMES[$k] . '</span>: ' ; 
							
							
							
							
							echo "<tr>";
							echo "<td>" . ($FACULTY_NAMES[$k]) . '</td>';
							echo "<td>" . ($SUBJECT_NAMES[$k]) . '</td>';
							
							/* Store faculty name */
							
							$sfaculty_names =$sfaculty_names .  $FACULTY_NAMES[$k] . ';';
				
							/* Storing subject names */
							
							$ssubject_names = $ssubject_names . $SUBJECT_NAMES[$k]. ';';
							
							$maxrows=count($TOTAL_DATA[$k]);
							echo "<td>" . ($maxrows-1) . '</td>';
							
							/* Storing the total record */
							$stotal_record =$stotal_record . ($maxrows-1) . ';';
							
							$i=0;
							$singled_data=array();
							$c=0;
							foreach($totalrows as $totalcols)
							{
								
								if($i==$maxrows-1)  /* Allows not displaying last(duplicate) row */
									break;
								echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		
															
									
									
								foreach($totalcols as $totalelements)
								{
								//	echo $totalelements . " " ;
									if($totalelements>=1 && $totalelements <=5)
									{
										$singled_data[$c++]=$totalelements;
										/*$avg = $avg + $totalelements ;
										$avgcount++;*/
									}
								
								}
								
								$i++;
									
								echo '</td>';
							}
							//echo ' Avg : ' . $avg . ' ' .$avgcount . ' <span style="color:red">' . $avg/$avgcount. '</span><br>';
							
							
							$mean=mmmr($singled_data,'mean');
							$median=mmmr($singled_data,'median');
							$mode=mmmr($singled_data,'mode');
							$sd=standard_deviation($singled_data);
							$mean=round($mean,2);
							$sd=round($sd,2);

							$avg=$mean;
							if($avg<=2)
								$gradec='alert-danger';
							else if($avg<=3)
								$gradec='alert-warning';
							else
								$gradec='alert-success';
							echo "<td class=". $gradec . "> " . $avg . "</td>";
							echo "<td>" . $median . "</td>";
							echo "<td>" . $mode . "</td>";
							echo "<td>" . $sd . "</td>";
							$k++;
							
							/* Storing mean median mode sd */
							$smean  =$smean . $avg . ';';
							$smode  =$smode . $mode . ';';
							$smedian  =$smedian. $median .';';
							$ssd =$ssd . $sd . ';';
							
							
						}	
					
						echo "</tr>";
					}
					echo "</table>";
	
	
					
					
					
					
				}
				
				?>
				
			<?php
			if(isset($_POST['submit']))
			{
			
				/* Get a new no for new record */
				$result=mysqli_query($con,"SELECT max(no) from analysis_data");
				$row=mysqli_fetch_array($result);
				$no = $row['max(no)'];
				if($no==NULL)
					$no=1;
				else
					$no++;
				
				$value='Analysis Report ' . $no . ' : For ' . $course . ' ' .$sem  ;
				
				if($sem=='1')
					$value .='st';
				else if($sem=='2')
					$value .= 'nd';
				else if($sem=='3')
					$value .= 'rd';
				else
					$value .= 'th';
				$value .=' Sem';
	
				$value .=' Analysis Type : ';
				
				if($basename=='quickanalysis.php') $value .='Quick Analysis ';
				else if($basename=='advancedanalysis.php') $value .='Advanced Analysis ';
				else $value .='Custom Analysis ';
				if($basename!='quickanalysis.php')  /* For quick analysis, you cannot configure this two parameters */
				
	
				$value = $value . ' CGPA Range : ' . $CGPA_LOWER_RANGE . ' to ' . $CGPA_UPPER_RANGE . ' Attendance Range : '. $ATT_LOWER_RANGE . '% to ' . $ATT_UPPER_RANGE .'%' ;
				
				?>
				
			<?php
			if(isset($_POST['submit']) && $isnotfirst!=0)
			{

			?>
				<br>
				<h3>Save this report?</h3><br>
				<form name='analysis_report' id='analysis_re' action='' method='post'>
				Name : <input type='text' class='form-control' name='sheader' value='<?php echo $value;?>' >
						<input type='hidden' name='sno' value='<?php echo $no; ?>'>
						<input type='hidden' name='sfaculty_names' value='<?php echo $sfaculty_names;?>'>
						<input type='hidden' name='ssubject_names' value='<?php echo $ssubject_names;?>'>
						<input type='hidden' name='stotal_records' value='<?php echo $stotal_record;?>'>
						<input type='hidden' name='smean' value='<?php echo $smean;?>'>
						<input type='hidden' name='smedian' value='<?php echo $smedian;?>'>
						<input type='hidden' name='smode' value='<?php echo $smode;?>'>
						<input type='hidden' name='ssd' value='<?php echo $ssd;?>'>
				<br>
				
				<input type='submit' value='Save' class='btn btn-primary' style="color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6" name='analysissubmit'>

			<?php
			}
			?>
				
				<?php
				}
				
				
				
				if(isset($_POST['analysissubmit']))
				{
					
					echo '<form target="_blank" action="createpdf.php" method="post">
							<input type="hidden" name="sno" value=' . $sno . '>';
					echo '<input type="submit"  class="btn btn-info" value="Generate PDF"></form>';
					
					
					echo '<form target="_blank" action="createdoc.php" method="post">
							<input type="hidden" name="sno" value=' . $sno . '>';
					echo '<input type="submit"  class="btn btn-success" value="Generate DOC"></form>';

				

						
					
					
				}
				
				
				
				
				?>
				<?php
include 'updatetimestamp.php';
?>
