<!-- resources/views/tbis/index.blade.php -->

<h1>Listado de Tbis</h1>

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