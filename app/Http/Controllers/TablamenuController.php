<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class TablamenuController extends Controller
{
    public function index()
    {
        $platillos = Producto::orderBy('id', 'DESC')->paginate();
        return view('tablamenu', compact('platillos'));
    }
}
