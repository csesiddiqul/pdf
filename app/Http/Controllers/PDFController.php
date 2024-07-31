<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function mypdf()
    {
        $fontDirs = [
            public_path('pdf/fonts'),
        ];

        $fontData = [
            'notosansbengali' => [
                'R' => 'Nikosh.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ],
        ];

        $config = [
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], $fontDirs),
            'fontdata' => array_merge((new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'], $fontData),
            'default_font' => 'notosansbengali',
            'default_font_size' => '14',
            'format' => 'A4',
            'margin_right' => 10,
            'margin_top' => 2,
            'margin_bottom' => 20,
            'margin_header' => 0,
            'margin_footer' => 0,
            'orientation' => 'P',
            'display_mode' => 'fullpage',
        ];

        $mpdf = new \Mpdf\Mpdf($config);

        $data = [
            'title' => 'Your Title Here',
        ];

        $html = view('myPDF', compact('data'))->render();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('title.pdf', 'I');
    }
}
