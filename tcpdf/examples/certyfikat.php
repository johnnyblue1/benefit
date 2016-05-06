<?php
//============================================================+
// File name   : example_051.php
// Begin       : 2009-04-16
// Last Update : 2013-05-14
//
// Description : Example 051 for TCPDF class
//               Full page background
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Full page background
 * @author Nicola Asuni
 * @since 2009-04-16
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		// get the current page break margin
		$bMargin = $this->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $this->AutoPageBreak;
		// disable auto-page-break
		$this->SetAutoPageBreak(false, 0);
		// set bacground image
		$img_file = K_PATH_IMAGES.'certyfikat.png';
		$this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
		// restore auto-page-break status
		$this->SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$this->setPageMark();
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Benefit Home');
$pdf->SetTitle('Certyfikat');
$pdf->SetSubject('Certyfikat');
$pdf->SetKeywords('TCPDF, PDF, benefithome, test, guide');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

// remove default footer
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/pol.php')) {
	require_once(dirname(__FILE__).'/lang/pol.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
$pdf->setFontSubsetting(true);

// set font
$pdf->SetFont('freeserif', '', 12);

// add a page
$pdf->AddPage();

$pdf->SetTopMargin(54);
// Print a text
$htmlcode = '<span style="color:black; padding:5mm 0; font-size:16pt;text-align:center;">546454</span>';

$pdf->writeHTML($htmlcode, true, false, true, false, '');

$htmlname = '<p color="black" style="font-family:helvetica;font-size:20pt;text-align:center;">Janusz Jurczyk</p>';

$pdf->writeHTML($htmlname, true, false, true, false, '');


$htmldate = date('j.m.Y');
$pdf->WriteHTML($htmldate, true, 0, true, 0);



// --- example with background set on page ---

// remove default header
$pdf->setPrintHeader(false);


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('benefithome.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
