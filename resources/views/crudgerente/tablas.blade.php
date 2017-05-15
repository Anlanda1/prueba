@extends('gerente')

@section('content')

	<!-- Tabla de empleados -->
	<div id="empleados" class="container-fluid">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                        <h1>Empleados</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Puesto</th>
                        <th>Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apellido }}</td>
                        <td>{{ $user->puesto }}</td>
                        <td>{{ $user->sueldo }}</td>
                        <td>editar</td>
                        <td>
                            <form action="{{ route('gerente.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
            <a href="{{ route('gerente.create') }}" class="btn btn-lg btn-success">Nuevo empleado   <span class="glyphicon glyphicon-ok"></span></a>
        </div>
    </div>
    </div>

    <!-- Tabla de almacen -->

    <!-- Portfolio -->
    <section id="almacen" class="portfolio">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="text-center">
                    <h1>Almacén</h1>
                </div>
                <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alma as $almacen)
                    <tr>
                        <td>{{ $almacen->nombre }}</td>
                        <td>{{ $almacen->cantidad }}</td>
                        <td>editar</td>
                        <td>borrar</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $alma->render() !!}
                <a href="{{ route('almacen.create') }}" class="btn btn-lg btn-success">Editar<span class="glyphicon glyphicon-pencil"></span></a>
            </div>
        </div>
    </section>

@endsection