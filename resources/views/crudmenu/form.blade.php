<div class="form-group">
	{!! Form::label('nombre', 'Nombre del menú') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('precio', 'Precio del menú') !!}
	{!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripción', 'Descripción del menú') !!}
	{!! Form::text('descripción', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipo', 'Tipo del menú') !!}
	{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>