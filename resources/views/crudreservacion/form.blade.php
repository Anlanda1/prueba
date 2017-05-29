<div class="form-group">
	{!! Form::label('horainicio', 'Hora de reservacion (hh:mm:ss)') !!}
	{!! Form::text('horainicio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('horafin', 'Fin de reservacion (hh:mm:ss)') !!}
	{!! Form::text('horafin', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('npersonas', 'Número de personas') !!}
	{!! Form::text('npersonas', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('mesa_id', 'ID mesa') !!}
	{!! Form::text('mesa_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('empleado_id', 'ID empleado') !!}
	{!! Form::text('empleado_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>