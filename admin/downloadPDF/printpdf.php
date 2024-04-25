<?php
require_once("../../include/initialize.php");
require_once 'vendor/autoload.php'; // Include the Composer autoload file

use Dompdf\Dompdf;
use Dompdf\Options;

if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

// Get the location and section
$location = isset($_POST['LOCATION']) ? $_POST['LOCATION'] : "";
$section = isset($_POST['SECTION']) ? $_POST['SECTION'] : "";

// Construct the query based on the selected section
if ($section == "All Blocks") {
    $query = "SELECT * FROM `tblpeople` WHERE LOCATION ='{$location}'";
} else {
    $query = "SELECT * FROM `tblpeople` WHERE LOCATION ='{$location}' AND CATEGORIES='{$section}'";
}

$mydb->setQuery($query);
$cur = $mydb->loadResultList();

// Create HTML content for the PDF
$html = '<html><head><title>Print Report</title><link rel="stylesheet" href="admin/css/bootstrap.min.css"></head><body>';
$html .= '<div style="text-align: center;font-size: 16px;">Dolefil Agrarian Reform Beneficiaries Cooperative</div>';
$html .= '<div style="text-align: center;font-size: 14px;">Complex Bldg, Bgy.Cannery Site, Polomolok South Cotabato 9504, Philippines.</div>';
$html .= '<div style="text-align: center;font-size: 20px">List of Beneficiaries</div>';
$html .= '<div style="text-align: center;font-size: 12px;">Location: ' . $location . '</div>';
$html .= '<div style="text-align: center;font-size: 12px;">Block: ' . $section . '</div>';
$html .= '<table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">';
$html .= '<thead><tr><th>Lot #</th><th>Name of Beneficiaries</th><th>Date of Birth</th><th>Age</th><th>Address</th><th>Contact number</th><th>Joined</th><th>Section</th><th>Location</th></tr></thead><tbody>';

foreach ($cur as $result) {
    $borndate = $result->BORNDATE;
    $dieddate = $result->DIEDDATE;

    $html .= '<tr>';
    $html .= '<td width="8%" align="center">' . $result->GRAVENO . '</td>';
    $html .= '<td> ' . $result->FNAME . '</td>';
    $html .= '<td>' . $borndate . '</td>';
    $html .= '<td>' . $result->AGE . '</td>';
    $html .= '<td>' . $result->ADDRESS . '</td>';
    $html .= '<td>' . $result->CONTACT_NUMBER . '</td>';
    $html .= '<td>' . $dieddate . '</td>';
    $html .= '<td>' . $result->CATEGORIES . '</td>';
    $html .= '<td>' . $result->LOCATION . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody></table></body></html>';

$document = new Dompdf(new Options());
$document->loadHtml($html);
$document->setPaper('A4', 'portrait');
$document->render();

$pdf_content = $document->output();

// Set the file name based on the selected village and block
$filename = "DARBC_" . str_replace(' ', '_', strtolower($location)) . "_" . str_replace(' ', '_', strtolower($section)) . ".pdf";

// Download the PDF file with the specified file name
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($pdf_content));
echo $pdf_content;
exit;
?>
