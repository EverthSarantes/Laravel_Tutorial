@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Productos</h1>

        @if (session('success'))
            <!-- Mensaje de éxito después de crear -->
            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
        @elseif (session('message'))
            <!-- Mensaje después de actualizar -->
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @elseif (session('alert'))
            <!-- Mensaje después de eliminar -->
            <div class="alert alert-danger">
                {{ session('alert') }}
            </div>
        @endif

        <a href="/" class="btn btn-secondary mb-3">
            <i class="fas fa-arrow-left"></i> Volver a la vista de bienvenida
        </a>

        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Agregar Nuevo Producto
        </a>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
