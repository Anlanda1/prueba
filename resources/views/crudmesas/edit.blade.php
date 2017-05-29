@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar mesa
            <a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($mesa, ['route' => ['mesa.update', $mesa->id], 'method' => 'PUT']) !!}

            @include('crudmesas.form')

        {!! Form::close() !!}
	</div>
@endsection