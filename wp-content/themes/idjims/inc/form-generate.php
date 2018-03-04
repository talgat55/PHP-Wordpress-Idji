<?php
/*
*  Funtion generate pdf
*/
require_once('tcpdf_include.php');

function generateform ($html,$formid){




// instantiate and use the dompdf class



    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);



    // set default header data
  //  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
  //  $pdf->setFooterData(array(0,64,0), array(0,64,128));

    // set header and footer fonts
    //$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    //$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
  //  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->SetPrintHeader(false);
    $pdf->SetPrintFooter(false);
    // set image scale factor
    //$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

  //  $pdf->setFontSubsetting(true);

    $fontname = TCPDF_FONTS::addTTFfont('./wp-content/themes/idjims/assets/fonts/times-new-roman.ttf', 'Times New Roman', '', 96);

    // use the font
    $pdf->SetFont($fontname, '', 12, '', false);
    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage();



    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    $uniq = uniqid();
    $pdfname =  'data'.$uniq.'.pdf';
    $pdf->Output(__DIR__ .'/redypdf/'.$pdfname, 'F'); 



wp_redirect("/done-generate-form?file=".$pdfname."&form=".$formid."");
exit;



}









 ?>
