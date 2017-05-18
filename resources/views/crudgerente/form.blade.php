<div class="form-group">
	{!! Form::label('name', 'Nombre del empleado') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellidos del empleado') !!}
	{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('puesto', 'Puesto del empleado') !!}
	{!! Form::text('puesto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('sueldo', 'Sueldo del empleado') !!}
	{!! Form::text('sueldo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>