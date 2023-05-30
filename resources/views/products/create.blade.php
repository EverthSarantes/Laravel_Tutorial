@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nuevo Producto</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <select class="form-control" id="brand" name="brand_id" required> <!-- Esto 'required' es para que el usuario no pueda enviar el formulario sin seleccionar una marca -->
                    <option value="">Seleccionar Marca</option>
                    @foreach ($brands as $brand) <!-- Esto es para que se muestren todas las marcas en el select -->
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button> <!-- Este es el boton para guardar el producto -->
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a> <!-- Este es el boton para volver a la lista de productos -->
        </form>
    </div>
@endsection
