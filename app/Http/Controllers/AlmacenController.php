<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacen;
use App\Http\Requests\AlmacenRequest;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alma = Almacen::orderBy('idProducto', 'DESC')->paginate();
        return view('gerente', compact('alma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudalmacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alma = new Almacen;

        $alma->name = $request->name;
        $alma->cantidad = $request->cantidad;
        $alma->precio = $request->precio;

        $alma->save();
        
        return redirect()->route('gerente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alma = Almacen::find($id);
        return view('crudalmacen.show', compact('alma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alma = Almacen::find($id);
        return view('crudalmacen.edit', compact('alma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alma = Almacen::find($id);

        $alma->name = $request->name;
        $alma->cantidad = $request->cantidad;
        $alma->precio = $request->precio;

        $alma->save();
        
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
        $alma = Almacen::find($id);
        $alma->delete();

        return back();
    }
}
