@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar pedido
            <a href="{{ route('mesero.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($pedido, ['route' => ['pedido.update', $pedido->id], 'method' => 'PUT']) !!}

            @include('crudpedido.form')

        {!! Form::close() !!}
	</div>
@endsection