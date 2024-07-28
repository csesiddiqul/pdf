<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use PDF;

class PDFController extends Controller
{
//    public function generatePDF()
//    {
//        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
//        $pdf = PDF::loadView('myPDF', $data);
//
//        return $pdf->download('itsolutionstuff.pdf');
//    }


//    public function generatePdf()
//    {
//        $data = [
//            'title' => 'Your Title Here',
//            // other data
//        ];
//
//        // Mpdf configuration
//        $config = [
//            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], [
//                public_path('fonts/'),
//            ]),
//            'fontdata' => array_merge((new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'], [
//                'my-custom-font' => [
//                    'R' => 'NotoSansBengali.ttf',
//                    'useOTL' => 0xFF,
//                    'useKashida' => 75,
//                ],
//            ]),
//            'default_font' => 'my-custom-font'
//        ];
//
//        $mpdf = new Mpdf($config);
//
//        // Load the view and pass data to it
//        $html = view('myPDF', $data)->render();
//
//        // Write the HTML into the Mpdf object
//        $mpdf->WriteHTML($html);
//
//        // Output the PDF
//        $mpdf->Output('document.pdf', 'I');
//    }

    public function generatePdf()
    {
        $data = [
            'title' => 'Your Title Here',
            // other data
        ];

        // Define the path to the custom font directory
        $fontDirs = [
            public_path('fonts'),
        ];

        // Define the font data
        $fontData = [
            'notosansbengali' => [
                'R' => 'Nikosh.ttf',
                'useOTL' => 0xFF,
//                'useKashida' => 75,
            ]
        ];

        // Mpdf configuration
        $config = [
            'fontDir' => array_merge((new \Mpdf\Config\ConfigVariables())->getDefaults()['fontDir'], $fontDirs),
            'fontdata' => array_merge((new \Mpdf\Config\FontVariables())->getDefaults()['fontdata'], $fontData),
            'default_font' => 'notosansbengali'
        ];

        $mpdf = new \Mpdf\Mpdf($config);

        // Load the view and pass data to it
        $html = view('myPDF', $data)->render();

        // Write the HTML into the Mpdf object
        $mpdf->WriteHTML($html);

        // Output the PDF
        $mpdf->Output('document.pdf', 'D');
    }
}
