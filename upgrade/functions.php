<?php
/**
 * Created by PhpStorm.
 * User: maria
 * Date: 8/15/2017
 * Time: 7:28 PM
 */
function exportToPdf($output,$filename)
{
    //echo $output;
    // Require composer autoload
    require_once 'thirdparty/mpdf/mpdf.php';
    $mpdf=new mPDF('c');
    $mpdf->mirrorMargins = 1;
    $mpdf->SetDisplayMode('fullpage');
    //$mpdf->SetWatermarkText('UNPAID');
    $mpdf->showWatermarkText = true;
    $mpdf->SetTitle('Invoice No');
    //$mpdf->SetHTMLHeader($header);
    //$mpdf->SetHTMLFooter($footer);

    // LOAD a stylesheet
    $stylesheet = file_get_contents('css/bootstrap.min.css');
    $mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no body/html/text
    $mpdf->WriteHTML($output);
    // Output a PDF file directly to the browser
    $mpdf->Output($filename,"D");
}
