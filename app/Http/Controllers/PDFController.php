<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        //$users = $request->all();
  //dd($users);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'junaid' => 'junaid'
        ]; 
            
        $pdf = PDF::loadView('pdfpagestructure', $data);
     
        return $pdf->download('pdfname.pdf');
    }
}