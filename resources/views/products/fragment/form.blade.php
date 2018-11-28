<div class="form-group">
	{{ Form::label('image', 'Imagen del producto',['class' => 'custom-file-label']) }}
	{{ Form::file('image',['class' => 'custom-file-input']) }}
</div>
<div class="form-group">
	{!! Form::label('name', 'Nombre del producto') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('short', 'Precio del producto') !!}
	{!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('body', 'Descripción completa del producto') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>