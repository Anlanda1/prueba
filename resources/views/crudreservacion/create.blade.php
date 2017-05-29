@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nueva reservación
			<a href="{{ route('recepcionista.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'reservacion.store']) !!}

            @include('crudreservacion.form')

        {!! Form::close() !!}
	</div>
@endsection