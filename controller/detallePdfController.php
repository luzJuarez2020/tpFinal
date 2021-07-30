<?php

require_once 'third-party/dompdf/autoload.inc.php';
require_once 'third-party/jpgraph/src/jpgraph.php';
require_once 'third-party/jpgraph/src/jpgraph_bar.php';
use Dompdf\Dompdf;



class detallePdfController
{

    private $render;

    public function __construct($render){
        $this->render = $render;
    }


    public function crearPdf(){
        $dompdf = new Dompdf();
        ob_start();

     //   $data=$this->getDatos();
        echo $this->render->render("view/pdfView.php");
        $html_para_pdf = ob_get_clean();
        $dompdf->loadHtml($html_para_pdf );
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream("document.pdf",['Attachment'=>0]);



    }






}