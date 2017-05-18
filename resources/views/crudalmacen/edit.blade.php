@extends('layouts.app')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar producto
            <a href="{{ route('gerente.index') }}" class="btn btn-dark btn-lg">Volver</a>
		</h2>
		
        {!! Form::model($almacen, ['route' => ['almacen.update', $almacen->id], 'method' => 'PUT']) !!}

            @include('crudalmacen.form')

        {!! Form::close() !!}
	</div>
@endsection