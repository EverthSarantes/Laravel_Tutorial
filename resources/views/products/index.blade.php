@extends('layouts.app') <!-- Aqui se extiende el Layout de la carpeta resources\views\layouts\app.blade.php -->

@section('content') <!-- Aqui se crea la sección content -->
    <div class="container">
        <h1>Productos</h1>
        <a href="#" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Agregar Nuevo Producto
        </a>
        <table class="table table-bordered table-hover"> <!-- Aqui se crea la tabla -->
            <thead>
                <tr> <!-- Aqui se crean las columnas de la tabla -->
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product) <!-- Aqui se crea el foreach para mostrar los productos -->
                    <tr> <!-- Aqui se crean las filas de la tabla -->
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand->name }}</td> <!-- Aqui se muestra el nombre de la marca -->
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">
                            <i class="fas fa-eye"></i> <!-- Aqui se crea el icono de ojo -->
                            </a>
                            <a href="#" class="btn btn-success">
                                <i class="fas fa-edit"></i> <!-- Aqui se crea el icono de editar -->
                            </a>
                            <form action="#" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> <!-- Aqui se crea el icono de basura -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
