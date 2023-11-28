<!-- resources/views/tbis/create.blade.php -->
@extends('layouts.app')

@section('content') 
<div class="container">
    <h1 class="mt-5 mb-4">Crear Nuevo Tbi</h1>

    <form action="{{ route('tbis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre_real" class="form-label">Nombre:</label>
            <input type="text" name="nombre_real" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion_real" class="form-label">Descripción:</label>
            <textarea name="descripcion_real" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
