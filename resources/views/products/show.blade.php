@extends('layout.app')

@section('title', 'Ver Producto')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Detalles del Producto</h1>

    <div class="card shadow-sm" style="max-width: 600px; margin: auto;">
        <div class="card-header bg-primary text-white">
            <h5>Ver Producto</h5>
        </div>
        <div class="card-body">
            <div><b>ID:</b> {{ $product->id }}</div>
            <div><b>Nombre:</b> {{ $product->name }}</div>
            <div><b>Descripción:</b> {{ $product->description }}</div>
            <div><b>Precio: $</b> {{ $product->price }}</div>
            <div><b>Fecha de Creación:</b> {{ $product->created_at }}</div>
            <div><b>Fecha de Actualización:</b> {{ $product->updated_at }}</div>

            <div class="text-end mt-3">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </div>
</div>

@endsection
