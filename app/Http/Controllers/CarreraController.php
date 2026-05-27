<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    private function getCarreras(): array
    {
        return require app_path('Data/carreras.php');
    }

    public function index()
    {
        $carreras = $this->getCarreras();
        return view('pages.home', compact('carreras'));
    }

    public function show(string $slug)
    {
        $carreras = $this->getCarreras();
        $carrera = collect($carreras)->firstWhere('slug', $slug);
        abort_if(!$carrera, 404);
        return view('pages.carrera', compact('carrera', 'carreras'));
    }
    public function carreras()
    {
        $carreras = $this->getCarreras();
        return view('pages.carreras', compact('carreras'));
    }
}
