<!-- resources/views/tbis/show.blade.php -->
@extends('layouts.app')
@section('content') 
<h1>Detalles de Tbi</h1>

<p><strong>Nombre:</strong> {{ $tbi->nombre_real }}</p>
<p><strong>Descripción:</strong> {{ $tbi->descripcion_real }}</p>
@endsection 