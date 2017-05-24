<div class="form-group">
	{!! Form::label('nombre', 'Nombre del menu') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion del menú') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('precio', 'Precio') !!}
	{!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipo', 'Tipo') !!}
	{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>