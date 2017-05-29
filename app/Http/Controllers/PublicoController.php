<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class PublicoController extends Controller
{
    public function index()
    {
        $platillos = Producto::orderBy('id', 'DESC')->paginate();
        return view('publico', compact('platillos'));
    }
}
