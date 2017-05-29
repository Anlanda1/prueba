@extends('layouts.app')

@section('content')
<!-- Tabla mesas -->
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Reservaciones</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>ID</th>
                        <th>Hora inicio</th>
                        <th>Hora fin</th>
                        <th>Número de personas</th>
                        <th>Mesa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservaciones as $reservacion)
                    <tr>
                        <td>{{ $reservacion->id }}</td>
                        <td>{{ $reservacion->horainicio }}</td>
                        <td>{{ $reservacion->horafin }}</td>
                        <td>{{ $reservacion->npersonas }}</td>
                        <td>{{ $reservacion->mesa_id }}</td>
                        <td>
                            <form action="{{ route('reservacion.edit', $reservacion->id) }}" method="GET">
                                {{ csrf_field() }}
                                <button class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('reservacion.destroy', $reservacion->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $reservaciones->render() !!}
            <a href="{{ route('recepcionista.index') }}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>   Regresar</a>
        </div>
    </div>
</div>
@endsection