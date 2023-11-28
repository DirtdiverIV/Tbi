<!-- resources/views/tbis/create.blade.php -->
@extends('layouts.app')
@section('content') 
<h1>Crear Nuevo Tbi</h1>

<form action="{{ route('tbis.store') }}" method="POST">
    @csrf
    <label for="nombre_real">Nombre:</label>
    <input type="text" name="nombre_real" required>
    <br>
    <label for="descripcion_real">Descripción:</label>
    <textarea name="descripcion_real" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>
@endsection 