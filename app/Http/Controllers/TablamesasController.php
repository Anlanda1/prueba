<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;

class TablamesasController extends Controller
{
    public function index()
    {
        $mesas = Mesa::orderBy('id', 'DESC')->paginate();
        return view('tablamesas', compact('mesas'));
    }
}
