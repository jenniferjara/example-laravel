<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function reconocimiento()
    {
        return view('pages.reconocimiento');
    }

    public function beneficio()
    {
    	return view('pages.beneficio');
    }

    public function medicion()
    {
    	return view('pages.medicion');
    }

    public function about()
    {
        return view('pages.nosotros');
    }

    public function gratis() {
        return view('pages.free');
    }
    
    public function contacto() {
        return view('pages.contacto');
    }
}
