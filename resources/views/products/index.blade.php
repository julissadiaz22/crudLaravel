@extends('layout.app')

@section('title', 'Product List')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Productos</h1>
    
    <div class="text-end mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Agregar Producto
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Editar
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
