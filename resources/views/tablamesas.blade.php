@extends('layouts.app')

@section('content')
<!-- Tabla mesas -->
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Mesas</h1>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr class="danger">
                        <th>ID</th>
                        <th>Estado</th>
                        <th>ID usuario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mesas as $mesa)
                    <tr>
                        <td>{{ $mesa->id }}</td>
                        <td>{{ $mesa->estado }}</td>
                        <td>{{ $mesa->user_id }}</td>
                        <td>
                            <form action="{{ route('mesa.edit', $mesa->id) }}" method="GET">
                                {{ csrf_field() }}
                                <button class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('mesa.destroy', $mesa->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $mesas->render() !!}
            <a href="{{ route('mesa.create') }}" class="btn btn-success">Nueva mesa   <span class="glyphicon glyphicon-pencil"></span></a>
        </div>
    </div>
</div>
@endsection