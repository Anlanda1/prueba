<div class="form-group">
	{!! Form::label('name', 'Nombre del empleado') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellidos del empleado') !!}
	{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('sueldo', 'Sueldo') !!}
	{!! Form::text('sueldo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('puesto', 'Puesto') !!}
	{!! Form::text('puesto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>