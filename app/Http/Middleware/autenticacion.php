<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Closure;

class autenticacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
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
        
        /*if ($this->auth->user()->puesto != 'Gerente') {
            $this->auth->logout();
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to('auth/login');
            }
        }*/
        }

        return $next($request);
    }
}