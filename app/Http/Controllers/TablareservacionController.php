<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservacion;

class TablareservacionController extends Controller
{
    public function index()
    {
        $reservaciones = Reservacion::orderBy('id', 'DESC')->paginate();
        return view('tablareservacion', compact('reservaciones'));
    }
}
