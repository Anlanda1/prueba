@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo empleado
			<a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'gerente.store']) !!}

            @include('crudgerente.formp')

        {!! Form::close() !!}
	</div>
@endsection