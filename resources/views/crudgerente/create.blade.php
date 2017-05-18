@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo empleado
			<button href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</button>
		</h2>
        {!! Form::open(['route' => 'gerente.store']) !!}

            @include('crudgerente.form')

        {!! Form::close() !!}
	</div>
@endsection