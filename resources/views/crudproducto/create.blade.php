@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ route('publico') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'producto.store']) !!}

            @include('crudproducto.form')

        {!! Form::close() !!}
	</div>
@endsection