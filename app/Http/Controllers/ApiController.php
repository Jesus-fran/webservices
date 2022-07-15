<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserModel;
use Illuminate\Support\Str;
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
        $email = $request->input('e');
        $password = $request->input('p');

        try
        {
            $email = UserModel::getUser($email, $password);

           
        }
        catch(Exception $exception)
        {
            
            return '{"respuesta": "usuario no aceptado"}';

            
        }
        
        if ($email != '')
        {
            $token = bin2hex(random_bytes(40));
            
            return '{"respuesta": "usuario aceptado", "token": '.$token.'}';
        }
       
    }
}
