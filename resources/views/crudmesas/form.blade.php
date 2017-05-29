<div class="form-group">
	{!! Form::label('id', 'ID de la mesa') !!}
	{!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('estado', 'Estado de la mesa') !!}
	{!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('user_id', 'ID del usuario') !!}
	{!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>