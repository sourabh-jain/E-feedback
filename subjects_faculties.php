<?php
	include "database_config.php";
	
	
	/* Get faculty questions from database */
	$result=mysqli_query($con,"SELECT * from faculty_questions order by question_no asc");
	
	$i=0;
	$QUESTIONS = array();
	while(1)
	{
		$row=mysqli_fetch_array($result);
		if(!$row)
			break;
		$QUESTIONS[$i]=$row['question'];
		$i++;
		
	}
	
	

	
	/* Get infrastructure questions from database */
	$result=mysqli_query($con,"SELECT * from infrastructure_questions order by question_no asc");
	$IQUESTIONS = array();
	
	$i=0;
	while(1)
	{
		$row=mysqli_fetch_array($result);
		if(!$row)
			break;
		$IQUESTIONS[$i]=$row['question'];
		$i++;
		
	}

	

//	  $questions = file_get_contents("questions.txt");
	//	  $QUESTIONS = explode("\n",$questions);
		
	$NO_OF_QUESTIONS = count($QUESTIONS);
	$NO_OF_IQUESTIONS = count($IQUESTIONS);


		
	$programme_filter='';	
	
	$section_filter='';
	
	$subject_filter='';
	
	
	$rollno = $_SESSION['rollno'];
	

	if($rollno[1]=='T')	 /* For M.tech */
		$programme_filter='%IT';
	else if($rollno[1]=='C')	 /* For MCA */
		$programme_filter='%IC';
		
	
	$programme_filter=$programme_filter . '-' . $_SESSION['semester'] . '%';
	
	
	
	
	$section_filter=$_SESSION['section'];
		  
		  
		  
		  
	
	
	
	
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
		
		
		
		$NO_OF_SUBJECTS = count($SUBJECT_NAMES);
	/*	
		$cc=count($SUBJECT_CODES);
		for($i=0;$i<$cc;$i++)
		{	
			echo '<script>alert("' . $SUBJECT_CODES[$i] . '");</script>';
		}
		*/
?>
	