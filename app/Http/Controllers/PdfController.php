<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function print()
    {
        $pdf = PDF::loadview('index')->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
