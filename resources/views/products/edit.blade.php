@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST"> <!-- Esto es para que el formulario se envie a la ruta 'products.update' y que se le pase el id del producto -->
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required> <!-- Esto 'value' es para que el input tenga el valor del nombre del producto -->
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <select class="form-control" id="brand" name="brand_id" required>
                    <option value="">Seleccionar Marca</option>
                    @foreach ($brands as $brand) <!-- Esto es para que se muestren todas las marcas en el select -->
                        <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $product->description }}</textarea> <!-- Esto 'value' es para que el textarea tenga el valor de la descripcion del producto -->
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
