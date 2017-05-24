@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ url('/') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'almacen.store']) !!}

            @include('crudalmacen.form')

        {!! Form::close() !!}
	</div>
@endsection