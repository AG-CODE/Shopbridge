<?php
	ini_set("memory_limit","256M"); 
	ini_set("max_execution_time",0);
	error_reporting(0);

	
	
	require_once($_SERVER['DOCUMENT_ROOT'].'/ConforsProject/lib/tcpdf/tcpdf.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/ConforsProject/lib/tcpdf/config/lang/eng.php'); 


$pdf=new TCPDF('p','mm','A4',TRUE,'UTF-8',false);
$pdf->setPrintHeader(FALSE);
$pdf->setPrintFooter(FALSE);
$pdf->AddPage();
$pdf->Cell(190,10,'Unicode Test',0,1,'C');
$pdf->SetFont('freesans', '', 10);
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'ltr';
$lg['a_meta_language'] = 'HI'; // I think you can change this to HI or IN for hindi
$lg['w_page'] = 'page';
$pdf->setLanguageArray($lg);
$html = '<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Language" content="hi">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

</body>
</html>
<p lang="hi">

    प्रविष्टि कर कुल बिक्री मूल्य वेट के साथ
भार(ग्रा) टिन मात्रा(सं) भुगतान का प्रकार विवरण जारीकर्ता कार्ड 
</p>';
$pdf->WriteHTML($html, true, 0, true, 0);

$pdf->Output();

?>