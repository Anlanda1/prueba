<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservacion;
use App\Mesa;
use App\Http\Requests\ReservacionRequest;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::orderBy('id', 'DESC')->paginate();
        $reservaciones = Reservacion::orderBy('id', 'DESC')->paginate();
        return view('recepcionista', compact('mesas'), compact('reservaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudreservacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservacionRequest $request)
    {
        $reservacion = new Reservacion;

        $reservacion->horainicio = $request->horainicio;
        $reservacion->horafin = $request->horafin;
        $reservacion->npersonas = $request->npersonas;
        $reservacion->mesa_id = $request->mesa_id;
        $reservacion->empleado_id = $request->empleado_id;

        $reservacion->save();
        
        return redirect()->route('reservacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservacion = Reservacion::find($id);
        return view('crudreservacion.show', compact('reservacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservacion = Reservacion::find($id);
        return view('crudreservacion.edit', compact('reservacion'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservacionRequest $request, $id)
    {
        $reservacion = Reservacion::find($id);

        $reservacion->horainicio = $request->horainicio;
        $reservacion->horafin = $request->horafin;
        $reservacion->npersonas = $request->npersonas;
        $reservacion->mesa_id = $request->mesa_id;
        $reservacion->empleado_id = $request->empleado_id;

        $reservacion->save();
        
        return redirect()->route('reservacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservaciones = Reservacion::find($id);
        $reservaciones->delete();

        return back();
    }
}
