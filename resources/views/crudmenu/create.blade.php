@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo menú
			<a href="{{ url('/') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
        {!! Form::open(['route' => 'menu.store']) !!}

            @include('crudmenu.form')

        {!! Form::close() !!}
	</div>
@endsection