<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ViewHome()
    {
        return view('index');
    }
    
    public function ViewPlantas()
    {
        return view('plantas');
        // $datos = FirebaseService()->temperaturaPlanta;
        // return $datos;
    }

    public function ViewPronostico()
    {
        return view('pronosticos');
    }

    public function ViewSensores()
    {
        return view('sensores');
    }
}
