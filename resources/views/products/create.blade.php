@extends('layout.app')

@section('title', 'Crear Productos')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Crear Producto</h5>
                </div>
                <div class="card-body">
                    <!-- Coloca el @csrf dentro de la etiqueta <form> -->
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre producto" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción producto" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Precio producto" step="0.01" required>
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Guardar Producto</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
