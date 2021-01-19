<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('assets/vendor/autoload.php');

use Dompdf\Dompdf;

class Mypdf
{
  protected $ci;

  public function __construct()
  {
    $this->ci = &get_instance();
  }

  // public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'portrait')
  // {
  //   $dompdf = new Dompdf();
  //   $html = $this->ci->load->view($view, $data, TRUE);
  //   $dompdf->loadHtml($html);
  //   $dompdf->setPaper($paper, $orientation);
  //   // Render the HTML as PDF
  //   $dompdf->render();
  //   $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
  // }

public function pdfgen($html, $filename, $paper, $orientation){
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    // Render the HTML as PDF
    $dompdf->render();
    $dompdf->stream($filename, array('Attachment'=> 0));
}

}
