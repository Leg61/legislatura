 <?
    require('config/phpToPDF.php');

    //Set Your Options -- see documentation for all options
    $pdf_options = array(
          "source_type" => 'url',
          "source" => 'http://legislativoedomex.gob.mx/diputadasydiputados_pdf.php',
          "action" => 'save');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);
?> 