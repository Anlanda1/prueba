@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar menú
            <a href="{{ url('/') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($menu, ['route' => ['menu.update', $menu->id], 'method' => 'PUT']) !!}

            @include('crudmenu.form')

        {!! Form::close() !!}
	</div>
@endsection