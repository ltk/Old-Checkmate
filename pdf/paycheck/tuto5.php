<?php
$page = 'pdf.php';
require_once('../../start.php');

$sql = "SELECT * from students";
$result = mysql_query($sql,$con);

while ($row = mysql_fetch_object($result, 'Student')):
	$students[$row->id]=$row;
endwhile;

	// Populate the comments array with comment objects.
	$startdate = date('Y-m-j',strtotime($_SESSION['t1']));
	$enddate = date('Y-m-j',strtotime($_SESSION['t2']));
	$sql = "SELECT * from comments WHERE created BETWEEN '$startdate' AND '$enddate'";
	$result = mysql_query($sql,$con);

	while ($row = mysql_fetch_object($result, 'Comment')):
		foreach ($students as $student):
			if ($row->student == $student->id) {$student->comments[]=$row; }
		endforeach;
	endwhile;
	
	$students_sorted = $students;


	usort($students_sorted,"cmp_last_name");
	
	$current_record = ($_GET['student']) ? $_GET['student'] : reset($students)->id ;
//////////////////////////
require('../fpdf.php');

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}
function Header()
{
	// Page header
	global $title;

	$this->SetFont('Arial','B',15);
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((280-$w)/2);
//	$this->SetDrawColor(0,80,180);
	$this->SetFillColor(256,256,256);
	$this->SetTextColor(0,0,0);
	//$this->SetLineWidth(1);
	$this->Cell($w,9,$title,1,1,'C',true);
	$this->Ln(10);
	// Save ordinate
	$this->y0 = $this->GetY();
}
// Simple table
function BasicTable($header, $data)
{
	// Header
	foreach($header as $col)
		$this->Cell(40,7,$col,1);
	$this->Ln();
	// Data
	foreach($data as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}

// Better table
function ImprovedTable($header, $data, $student)
{
	// Column widths
	$w = array(15, 40, 60, 145);
	// Header
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	$this->SetFillColor(224,235,255);
	// Data
	$fill = false;
	
	foreach($student->comments as $comment)
	{
		$this->Cell($w[0],6,$comment->amount,'LR',0,'C');
		$this->Cell($w[1],6,$comment->category,'LR',0,'C');
		$this->Cell($w[2],6,'Teacher','LR',0,'C');
		$this->Cell($w[3],6,$comment->comment,'LR',0,'C');
		$this->Ln();
		$fill = !$fill;
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Header
	$w = array(40, 25, 45, 50);
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
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
		$this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}
function WriteHTML($html)
{
    // HTML parser
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extract attributes
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Opening tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Closing tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modify style and select corresponding font
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}
//$students = array(array('Lawson Kurtz','$100'),array('Wendy Jaglom','$50'),array('Anders Campbell','-$30'),array('Nolan Smith','$77'),array('Andre Dawkins','$85'));
$paycheck_date = $startdate.' to '.$enddate;
$pdf = new PDF();

foreach ($students_sorted as $student):
$title = $student->first_name.' '.$student->last_name.'\'s Paycheck: '.$paycheck_date;
$pdf->SetTitle($title);
// Column headings
$header = array('$', 'Category', 'Teacher', 'Comments');
// Data loading

$pdf->SetFont('Arial','',12);
$pdf->AddPage('L', 'Letter');
$pdf->ImprovedTable($header,$data,$student);
$pdf->AddPage('L', 'Letter');
	$pdf->SetFont('Arial','',16);
	$html = 'Pay to the order of <b>'.$student->first_name.' '.$student->last_name.'</b>';
	$html2 = '<b>$'.$student->current_paycheck_amount().'</b> KIPP GCP Dollars';
 $pdf->WriteHTML($html);
$pdf->Ln();
$pdf->Ln();
$pdf->WriteHTML($html2);
$pdf->Ln();
$pdf->Ln();
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,10,'Assess. Reflect. Act. Carefully read the assessment on the back of the paycheck and thoughtfully complete the reflection below.',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->Cell(0,10,'My strengths this week were_________________________________________________________________________________',0,1);
	$pdf->Cell(0,10,'My weaknesses this week were_______________________________________________________________________________',0,1);
	$pdf->Cell(0,10,'I will get better next week by_________________________________________________________________________________',0,1);
	$pdf->Cell(0,10,'',0,1);
	$pdf->MultiCell(0,10,'We have reviewed this paycheck and are aware what this student is doing well and what he or she can improve. We know this paycheck needs to be signed in order to be redeemed.');
	    // Line break
	$pdf->Ln();
	$pdf->Ln();
	$html = '_____________________________________________            _____________________________________________';
	$html2 = 'Student Signature                                                                         Parent/Guardian Signature';
	 $pdf->WriteHTML($html);
	$pdf->Ln();
	$pdf->WriteHTML($html2);

endforeach;

$pdf->Output();
?>
