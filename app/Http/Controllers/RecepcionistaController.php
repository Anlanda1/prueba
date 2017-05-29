<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;

class RecepcionistaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::orderBy('id', 'DESC')->paginate();
        return view('recepcionista', compact('mesas'));
    }
}
