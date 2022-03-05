<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;

use App\Models\Libro;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfLibros()
    {
        $data = [
            'libros' => Libro::all()
        ];
           
        $pdf = PDF::loadView('testPDF', $data);
     
        return $pdf->download('Libros.pdf');
    }

    public function pdfLibro($ISBN)
    {
        $data = [
            'libro' => Libro::find($ISBN)
        ];
           
        $pdf = PDF::loadView('libroPDF', $data);
     
        return $pdf->download('Libro.pdf');
    }
}