<?php

namespace App\Http\Controllers;

class PDFController extends Controller
{
    public function labib()
    {
        $fontDirs = [
            public_path('pdf/fonts'),
        ];

        $fontData = [
            'notosansbengali' => [
                'R' => 'Nikosh.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ]
        ];
        $config = [
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], $fontDirs),
            'fontdata' => array_merge((new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'], $fontData),
            'default_font' => 'notosansbengali',
            'default_font_size' => '14',
            'format' => 'A4',
            'mode' => '',
            'margin_right' => 10,
            'margin_top' => 40,
            'margin_bottom' => 20,
            'margin_header' => 0,
            'margin_footer' => 0,
            'orientation' => 'P',
            'title' => 'Copyright Agreement',
            'author' => '',
            'watermark' => '',
            'show_watermark' => false,
            'show_watermark_image' => false,
            'watermark_font' => 'sans-serif',
            'display_mode' => 'fullpage',
            'watermark_text_alpha' => 0.1,
            'watermark_image_path' => '',
            'watermark_image_alpha' => 0.2,
            'watermark_image_size' => 'D',
            'watermark_image_position' => 'P',
            'custom_font_dir' => '',
            'custom_font_data' => [],
            'auto_language_detection' => false,
            'temp_dir' => storage_path('app'),
            'pdfa' => false,
            'pdfaauto' => false,
            'use_active_forms' => false,


        ];
        $mpdf = new \Mpdf\Mpdf($config);
        $mpdf->SetHeader('<div class="text-center" style="border-bottom: 1px dotted #3d3b3b; padding: 4px;"><img src="' . public_path('pdf/logo/copyright.png') . '" style="height: 60px; padding: 20px" class="img-fluid" alt="no image"></div>');
        //                $mpdf->SetFooter('{PAGENO}');

        $data = [
            'title' => 'Your Title Here',
        ];

        $html = view('myPDF', compact('data'))->render();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('title.pdf', 'I');
    }

}
