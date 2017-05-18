<div class="form-group">
	{!! Form::label('name', 'Nombre del producto') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('cantidad', 'Cantidad del producto') !!}
	{!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('precio', 'Precio del producto') !!}
	{!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-dark btn-lg']) !!}
</div>