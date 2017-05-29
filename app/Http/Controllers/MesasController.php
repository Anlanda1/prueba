<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use App\Http\Requests\MesaRequest;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::orderBy('id', 'DESC')->paginate();
        return view('tablamesas', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudmesas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MesaRequest $request)
    {
        $mesa = new Mesa;

        $mesa->id = $request->id;
        $mesa->estado = $request->estado;
        $mesa->user_id = $request->user_id;

        $mesa->save();
        
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
        $mesa = Mesa::find($id);
        return view('crudmesas.show', compact('mesas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = Mesa::find($id);
        return view('crudmesas.edit', compact('mesas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MesaRequest $request, $id)
    {
        $mesa = Mesa::find($id);

        $mesa->id = $request->id;
        $mesa->estado = $request->estado;
        $mesa->user_id = $request->user_id;

        $mesa->save();
        
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
        $mesas = Mesa::find($id);
        $mesas->delete();

        return back();
    }
}
