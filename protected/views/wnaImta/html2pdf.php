<?php
    $this->pageTitle='Generate Certificate';
    ob_start();
    echo $this->renderPartial('print',array('model'=>WnaExistence::model()->findByPk($model->id_wna_imta))); 
    $content = ob_get_clean();

    Yii::import('application.extensions.tcpdf.HTML2PDF');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'en');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('arial');
        $html2pdf->writeHTML($content,false);
        $html2pdf->Output("Certificate".date('dmY').".pdf");
        
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }