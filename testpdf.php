<?php
// Require composer autoload
require_once __DIR__ . '/lib/mpdf/vendor/autoload.php';
define('_MPDF_TTFONTPATH', __DIR__ . '/ttfonts');

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
// Write some HTML code:
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs),
    'fontdata' => $fontData + [
        'freesans' => [
            'R' => 'FreeSans.ttf',
            'B' => 'FreeSansBold.ttf',
        ]
    ],
    'default_font' => 'freesans'
]);
$html='<!DOCTYPE html>
<html>
<head>
    <title>Customer Report</title>
    <meta http-equiv="Content-Language" content="hi">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p lang="hi">
Customer Report 
    
</p>
</body>
</html>';
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();
?>