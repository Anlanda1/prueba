@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar producto
            <a href="{{ route('publico') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($platillo, ['route' => ['producto.update', $platillo->id], 'method' => 'PUT']) !!}

            @include('crudproducto.form')

        {!! Form::close() !!}
	</div>
@endsection