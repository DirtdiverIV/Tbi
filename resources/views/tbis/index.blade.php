@extends('layouts.app')
@section('content') 
<!-- Ahora sigue con el contenido específico de la vista -->
<h1>Listado de Tbis</h1>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown button
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
<ul>
    @foreach ($tbis as $tbi)
        <li>{{ $tbi->nombre_real }} - {{ $tbi->descripcion_real }}</li>
    @endforeach
</ul>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@endsection 