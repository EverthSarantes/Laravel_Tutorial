@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Producto</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5> <!-- Esto es para que se muestre el nombre del producto -->
                <h6 class="card-subtitle mb-2 text-muted">{{ $brand->name }}</h6> <!-- Esto es para que se muestre el nombre de la marca del producto -->
                <p class="card-text">{{ $product->description }}</p> <!-- Esto es para que se muestre la descripcion del producto -->
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a> <!-- Este es el boton para volver a la lista de productos -->
        </div>
    </div>
@endsection
