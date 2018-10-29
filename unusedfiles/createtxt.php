<?php
include "database_config.php";


/* get the analysis data */

$sno=$_POST['sno'];
$result=mysqli_query($con,"SELECT * from analysis_data where no='$sno'");

$row=mysqli_fetch_array($result);
$full_data = ' ';
$full_data .=$row['faculty_names'] . PHP_EOL . $row['subject_names']. PHP_EOL . $row['total_records']. PHP_EOL . $row['mean']. PHP_EOL . $row['median']. PHP_EOL . $row['mode']. PHP_EOL . $row['sd'];
$file=fopen("data.txt", 'w');


$faculty_names =explode(";",$row['faculty_names']);
$subject_names=explode(";",$row['subject_names']);
$total_records=explode(";",$row['total_records']);
$mean=explode(";",$row['mean']);
$median=explode(";",$row['median']);
$mode=explode(";",$row['mode']);
$sd=explode(";",$row['sd']);
$sheader=$row['header'];

for($i=0;$i<7;$i++)
{
	fwrite($file,$faculty_names[$i] . ';');
	//fwrite($file,$subject_names[$i] . ';');
		fwrite($file,$total_records[$i] . ';');
		fwrite($file,$mean[$i] . ';');
		fwrite($file,$median[$i] . ';');
		fwrite($file,$mode[$i] . ';');
		fwrite($file,$sd[$i] . ';');
		
		fwrite($file,PHP_EOL);
}

//$title = '20000 Leagues Under the Seas';
$header = array('Faculty Name', 'Records', 'Mean','Median','Mode','SD');

function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	
	// $lines=explode("#",$file);
	
	
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line)); 
	
	return $data;
}
	



/*
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">";
echo "<body>";
echo "<b>My first document</b><input type='text'>";
echo "</body>";

echo "</html> */
?>
<?php
//header("Content-type: application/vnd.ms-word");
//header("Content-Disposition: attachment;Filename=document_name.doc");

$data=LoadData("data.txt");
$fullcontent='';

$fullcontent  =  $fullcontent  . PHP_EOL . $sheader . PHP_EOL . '';
$fullcontent  =$fullcontent  . PHP_EOL;
		foreach($header as $headercols)
		{
			$fullcontent  =  $fullcontent .  $headercols ;
		}
		
		foreach($data as $rows)
		{
			$fullcontent = $fullcontent . PHP_EOL;
			foreach($rows as $cols)
			{
				if($cols!='')
					$fullcontent  = $fullcontent . $cols ;
			}
			$fullcontent = $fullcontent  .PHP_EOL;
		}
		echo $fullcontent . ' here';
?> 