@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar producto
            <a href="{{ url('/') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($producto, ['route' => ['almacen.update', $producto->id], 'method' => 'PUT']) !!}

            @include('crudalmacen.form')

        {!! Form::close() !!}
	</div>
@endsection