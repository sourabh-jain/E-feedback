<?php
require('fpdf.php');
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
	//	fwrite($file,$subject_names[$i] . ';');
		fwrite($file,$total_records[$i] . ';');
		fwrite($file,$mean[$i] . ';');
		fwrite($file,$median[$i] . ';');
		fwrite($file,$mode[$i] . ';');
		fwrite($file,$sd[$i] . ';');
		
		fwrite($file,PHP_EOL);
}
class PDF extends FPDF
{


// Load data
	function LoadData($file)
	{
		// Read file lines
		$lines = file($file);
		
		// $lines=explode("#",$file);
		
		// Line break
		$this->Ln(20);
		
		$data = array();
		foreach($lines as $line)
			$data[] = explode(';',trim($line)); 
		
		return $data;
	}
	
	// Colored table
	function FancyTable($header, $data)
	{
		// Colors, line width and bold font
		$this->SetFillColor(63,73,204);
		$this->SetTextColor(255);
		$this->SetDrawColor(18,0,0);
		$this->SetLineWidth(.1);
		$this->SetFont('','B');
		// Header
		$w = array(55, 25, 30, 20,30,35,25);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = false;
		foreach($data as $row)
		{
			$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
			$this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
			$this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
			$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
			$this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
			$this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
			$this->Ln();
			$fill = !$fill;
		}
		// Closing line
		$this->Cell(array_sum($w),0,'','T');
	}

	
	function generateTitle($header, $data)
	{
		// Colors, line width and bold font
		$this->SetFillColor(63,73,204);
		$this->SetTextColor(255);
		$this->SetDrawColor(18,0,0);
		$this->SetLineWidth(.1);
		$this->SetFont('','B');
		// Header
		$w = array(70, 25, 30, 20,30,35,25);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = false;
		foreach($data as $row)
		{
			$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
/*			$this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
			$this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
			$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
			$this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
			$this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);*/
			$this->Ln();
			$fill = !$fill;
		}
		// Closing line
		$this->Cell(array_sum($w),0,'','T');
	}
	
}	
$pdf = new PDF();
// Column headings

$title = '20000 Leagues Under the Seas';
$header = array('Faculty Name', 'Records', 'Mean','Median','Mode','SD');
// Data loading




$pdf->Header($sheader);
$data = $pdf->LoadData('data.txt');

$pdf->SetFont('Arial','',18);
$pdf->AddPage();

$pdf->Write(10,$row['header']);
$pdf->Ln();

$pdf->SetFont('Arial','',14);
$pdf->Ln();
$pdf->FancyTable($header,$data);
$pdf->Output();
//$pdf->Save("a.pdf");

?>