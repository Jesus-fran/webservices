<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosFirebase;
use App\Services\FirebaseService;

class ViewController extends Controller
{

    private $datos;
    private $service;

    public function __construct()
    {
        // $this->service = new FirebaseService();
        $this->datos = new DatosFirebase();

    }

    public function ViewHome()
    {
        return view('index');
    }
    
    public function ViewPlantas()
    {
        $planta1 = $this->datos->getDatosPlanta('planta1');       
        $planta2 = $this->datos->getDatosPlanta('planta2');       
        $planta3 = $this->datos->getDatosPlanta('planta3');       
        return view('plantas', compact('planta1', 'planta2', 'planta3'));
    }

    public function ViewPronostico()
    {
        return view('pronosticos');
    }

    public function ViewSensores()
    {
        $higrometro = $this->datos->getStateSensor('higrometro');
        $sen_lumi = $this->datos->getStateSensor('sen_luminosidad');
        $minibomba = $this->datos->getStateSensor('minibomba');
        return view('sensores', compact('higrometro', 'sen_lumi','minibomba' ));
    }

    public function ViewAvisoPrivacidad()
    {
        return view('aviso_privacidad');
    }

    public function ViewLogin()
    {
        return view('login');
    }

    public function Logout()
    {
        session()->flush();
        return view('login');
    }
}
