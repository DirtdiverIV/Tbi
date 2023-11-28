@extends('layouts.app')

@section('content') 
<!-- Ahora sigue con el contenido específico de la vista -->
<h1>Listado de Tbis</h1>

<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ($tbis as $tbi)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $tbi->nombre_real }}</h5>
                    <p class="card-text">{{ $tbi->descripcion_real }}</p>
                    <button class="btn btn-danger" onclick="borrarTarjeta({{ $tbi->id }})">
                        <i class="bi bi-trash"></i> Borrar
                    </button>
                    <a href="{{ route('tbis.edit', ['id' => $tbi->id]) }}" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

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

<!-- Agregamos un formulario oculto para manejar el borrado -->
<form id="deleteForm" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<script>
    // Función para manejar el borrado
    function borrarTarjeta(tbiId) {
        if (confirm('¿Seguro que quieres borrar esta tarjeta?')) {
            // Actualizamos la acción del formulario para apuntar a la ruta de borrado específica
            document.getElementById('deleteForm').action = '/tbis/' + tbiId;
            // Enviamos el formulario
            document.getElementById('deleteForm').submit();
        }
    }
</script>

@endsection