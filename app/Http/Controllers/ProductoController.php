<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillos = Producto::orderBy('id', 'DESC')->paginate();
        return view('publico', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudproducto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $platillo = new Producto;

        $platillo->nombre = $request->nombre;
        $platillo->cantidad = $request->descripcion;
        $platillo->precio = $request->precio;
        $platillo->tipo = $request->tipo;

        $platillo->save();
        
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $platillo = Producto::find($id);
        return view('crudproducto.show', compact('platillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platillo = Producto::find($id);
        return view('crudproducto.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id)
    {
        $platillo = Producto::find($id);

        $platillo->nombre = $request->nombre;
        $platillo->cantidad = $request->cantidad;
        $platillo->precio = $request->precio;
        $platillo->tipo = $request->tipo;

        $platillo->save();
        
        return redirect()->route('gerente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $platillos = Producto::find($id);
        $platillos->delete();

        return back();
    }
}
