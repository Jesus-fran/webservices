<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosFirebase;

class ApiController extends Controller
{

    private $datos;

    public function __construct()
    {
        $this->datos = new DatosFirebase();
        
    }


    public function listaAPI()
    {
        $planta1 = $this->datos->getDatosPlanta('planta1');       
        return $planta1;
    }

    public function loginAPI(Request $request)
    {
         
    }
}
