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
                redirect()->route('gerente.index');
                break;

            case "Mesero":
                redirect()->to(view('mesero'));
                break;
                
            case "Chef":
                redirect()->to('chef');
                break;
                
            case "Recepcionista":
                redirect()->to('recepcionista');
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