@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar reservación
            <a href="{{ route('recepcionista.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($reservacion, ['route' => ['reservacion.update', $reservacion->id], 'method' => 'PUT']) !!}

            @include('crudreservacion.form')

        {!! Form::close() !!}
	</div>
@endsection