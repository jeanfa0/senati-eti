<?php

namespace App\Http\Controllers;

class PaginaController extends Controller
{
    public function nosotros()
    {
        return view('pages.nosotros');
    }

    public function admision()
    {
        return view('pages.admision');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }
}