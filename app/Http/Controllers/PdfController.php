<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{

    
    public function showpdf(){  

        $pdf = PDF::loadView('emails.pdf');       
        return $pdf->stream();
    }
    public function invoice() 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $view =  \View::make('emails.pdf', compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view);
        // $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('invoice');
    }
 
    public function getData(){
        $data =  [
            'client'      => 'GAES DE LA LAGUNA SA DE CV' ,
            'product'   => 'CARTUCHO DE TINTA HP 664XL NEGRO ALTO RENDIMIENTO 480 P',
            'pice'   => '1',
            'importe'     => '547.41',
        ];
        return $data;
    } 


    public function downloadpdf(){
        $pdf = PDF::loadView('emails.pdf');
            return $pdf->download('emails.pdf');
    }
}
