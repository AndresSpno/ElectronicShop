@extends('layouts.layout')

@section('content')
	<div class="col-sm-10">
		<h2>
			{{ $product->name }}
			<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning pull-right">Editar</a>
		</h2>
		<p>
		<img width="150px" src="{{ Storage::url($product['image']) }}">
		</p>
		<p>
			{{ $product->short }}	

		</p>
			{!! $product->body !!}
		
	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@endsection