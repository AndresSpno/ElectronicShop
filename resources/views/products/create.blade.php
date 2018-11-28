@extends('layouts.layout')

@section('content')
	<div class="col-sm-10">
		<h2>
			Nuevo Producto
			<a href="{{ route('products.index') }}" class="btn btn-primary pull-right">Listado</a>
		</h2>
		
		@include('products.fragment.error')

		{!! Form::open(['route' => 'products.store', 'files' => true]) !!}

			@include('products.fragment.form')

		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@endsection