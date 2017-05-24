@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo pedido
			<a href="{{ route('mesero.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'gerente.store']) !!}

            @include('crudpedido.form')

        {!! Form::close() !!}
	</div>
@endsection