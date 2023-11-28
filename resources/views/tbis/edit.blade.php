<!-- resources/views/tbis/edit.blade.php -->
@extends('layouts.app')

@section('content') 
<div class="container">
    <h1 class="mt-5 mb-4">Editar Tbi</h1>

    <form action="{{ route('tbis.update', $tbi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_real" class="form-label">Nombre:</label>
            <input type="text" name="nombre_real" value="{{ $tbi->nombre_real }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion_real" class="form-label">Descripción:</label>
            <textarea name="descripcion_real" class="form-control" required>{{ $tbi->descripcion_real }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection