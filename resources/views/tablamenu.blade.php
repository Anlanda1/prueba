@extends('layouts.app')

@section('content')
<!-- Tabla menu -->
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Menú</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($platillos as $platillo)
                    <tr>
                        <td>{{ $platillo->nombre }}</td>
                        <td>{{ $platillo->descripcion }}</td>
                        <td>{{ $platillo->tipo }}</td>
                        <td>{{ $platillo->precio }}</td>
                        <td>
                            <form action="{{ route('producto.edit', $platillo->id) }}" method="GET">
                                {{ csrf_field() }}
                                <button class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('producto.destroy', $platillo->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $platillos->render() !!}
            <a href="{{ route('producto.create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>   Agregar</a>
            <a href="{{ url('/') }}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>   Regresar</a>
        </div>
    </div>
</div>
@endsection