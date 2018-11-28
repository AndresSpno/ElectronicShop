@extends('layout')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img width="50px" src="{{ Storage::url($product['image']) }}"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->short }}</td>
                <td class="text-justify">{{ $product->body }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection