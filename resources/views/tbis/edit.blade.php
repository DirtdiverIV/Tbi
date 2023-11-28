<!-- resources/views/tbis/edit.blade.php -->
@extends('layouts.app')
@section('content') 

<h1>Editar Tbi</h1>

<form action="{{ route('tbis.update', $tbi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre_real">Nombre:</label>
    <input type="text" name="nombre_real" value="{{ $tbi->nombre_real }}" required>
    <br>
    <label for="descripcion_real">Descripción:</label>
    <textarea name="descripcion_real" required>{{ $tbi->descripcion_real }}</textarea>
    <br>
    <button type="submit">Guardar Cambios</button>
</form>
@endsection 