@extends('layouts.layout')

@section('content')
	<div class="col-sm-10">
		<h2>
			Listado de Productos
			<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('products.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20x">ID</th>
					<th>Imagen</th>
					<th>Nombre del Producto</th>
					<th>Precio</th>
					<th colspan="3">&nbsp;</th>
				</tr>

			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>
						<img width="50px" src="{{ Storage::url($product['image']) }}"></td>

				<td>
						<strong>{{ $product->name }}</strong>
						
					</td>
					<td>{{ $product->short }}</td>
					<td>
						<a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Ver</a>
					</td>
					<td>
						<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a></td>
					<td>
						<a href="" data-target="#modal-delete-{{$product->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

          <div class="modal fade modal-slide-in-right" aria-hidden="true"
          role="dialog" tabindex="-1" id="modal-delete-{{$product->id}}">

          
        <form action="{{action('ProductController@destroy', $product->id)}}" method="post">
            

         <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" 
         aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Producto</h4>
         </div>
         <div class="modal-body">
         <p>¿Estas seguro que desea Eliminar el Producto?</p>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              {{csrf_field()}}
             <input name="_method" type="hidden" value="DELETE">
             <button class="btn btn-danger" type="submit">Eliminar</buton>
         </div>
         <td>
         	<a href="{{ route('products.pdf') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        	</a>
         </td>


         
						<!-- <form action="{{ route('products.destroy', $product->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form> -->
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $products->render() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>

@endsection