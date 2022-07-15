<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function login(Request $request)
    {
       
        $email = $request->input('email');
        $password = $request->input('password');
        try
        {
            $email = UserModel::getUser($email, $password);

           
        }
        catch(Exception $exception)
        {
            return view('login', ['msgErr'=>'Correo o contraseña incorrectos']);
            
        }
        
        $value = 'Usuario';

        if ($email != '')
        {
            $value = $email;
        }
        $request->session()->flush();
        $request->session()->put('authenticated', $value);
        return redirect()->route('home');
        
    }


}
