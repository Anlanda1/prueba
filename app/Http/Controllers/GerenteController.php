<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Almacen;
use App\Http\Requests\UserRequest;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate();
        $alma = Almacen::orderBy('idProducto', 'DESC')->paginate();
        return view('gerente', compact('users'), compact('alma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudgerente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new Product;

        $user->name = $request->name;
        $user->apellido = $request->apellido;
        $user->sueldo = $request->sueldo;
        $user->puesto = $request->puesto;

        $user->save();
        
        return redirect()->route('gerente.index')->with('info', 'El empleado ha sido agregado');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('crudgerente.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('crudgerente.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->apellido = $request->apellido;
        $user->sueldo = $request->sueldo;
        $user->puesto = $request->puesto;

        $user->save();
        
        return redirect()->route('gerente.index')->with('info', 'El empleado ha sido eliminado');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return back()->with('info', 'El empleado ha sido eliminado');
    }
}
