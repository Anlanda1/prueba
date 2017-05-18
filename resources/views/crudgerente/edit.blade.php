@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar empleado
            <a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($user, ['route' => ['gerente.update', $user->id], 'method' => 'PUT']) !!}

            @include('crudgerente.form')

        {!! Form::close() !!}
	</div>
@endsection