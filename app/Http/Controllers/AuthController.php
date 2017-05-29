<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');
    }
 
    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'puesto' => Input::get('puesto')
        ];
 
        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
        	$tipo = $this->auth->user()->puesto;
        switch ($tipo) {
            case "Gerente":
                redirect()->to(route('gerente.index'));
                break;

            case "Mesero":
                redirect()->to(route('mesero.index'));
                break;
                
            case "Chef":
                redirect()->to(route('chef.index'));
                break;
                
            case "Recepcionista":
                redirect()->to(route('recepcionista.index'));
                break;

            case "Cajero":
                redirect()->to(view('cajero'));
                break;

            default:
                return response('Unauthorized.', 401);
                //dd($tipo);
                break;
        }
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::intended('gerente');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }
 
    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'Logged out correctly');
    }
}
