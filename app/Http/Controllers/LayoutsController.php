<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function reconocimiento()
    {
        return view('layout.reconocimiento');
    }

    public function beneficio()
    {
    	return view('layout.beneficio');
    }

    public function medicion()
    {
    	return view('layout.medicion');
    }
    public function about()
    {
        return view('layout.nosotros');
    }
    public function afiliacion() {
        return view('layout.afiliacion');
    }
    public function contacto() {
        return view('layout.contacto');
    }
}
