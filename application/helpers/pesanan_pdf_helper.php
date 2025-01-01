<?php

use Dompdf\Dompdf;
use Dompdf\Options;

function generate_pdf($html, $filename = 'document.pdf', $download = true)
{
    require_once APPPATH . '../vendor/autoload.php';

    // Konfigurasi dompdf
    $options = new Options();
    $options->set('isRemoteEnabled', true); // Aktifkan jika ada gambar dengan URL eksternal
    $dompdf = new Dompdf($options);

    // Muat HTML
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Hasilkan PDF
    if ($download) {
        $dompdf->stream($filename, ["Attachment" => 1]);
    } else {
        return $dompdf->output();
    }
}
