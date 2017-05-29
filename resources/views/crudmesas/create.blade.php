@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nueva mesa
			<a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'mesa.store']) !!}

            @include('crudmesas.form')

        {!! Form::close() !!}
	</div>
@endsection