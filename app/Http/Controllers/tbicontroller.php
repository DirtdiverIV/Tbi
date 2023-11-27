<?php

namespace App\Http\Controllers;

use App\Models\tbiModel; // Asegúrate de importar el modelo Tbi

class TbiController extends Controller
{
    // Método para mostrar todos los elementos
    public function index()
    {
        $tbis = tbiModel::all();
        return view('tbis.index', ['tbis' => $tbis]);
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('tbis.create');
    }

    // Método para almacenar un nuevo elemento
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        // Ajusta las reglas de validación según sea necesario...
    ]);

    Tbi::create([
        'nombre' => $request->input('nombre'),
        'descripcion' => $request->input('descripcion'),
        // Ajusta otros campos según sea necesario...
    ]);

    return redirect()->route('tbis.index')->with('success', 'Tbi creado exitosamente.');
}

    // Método para mostrar un elemento específico
    public function show($id)
    {
        $tbi = Tbi::find($id);
        return view('tbis.show', ['tbi' => $tbi]);
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $tbi = Tbi::find($id);
        return view('tbis.edit', ['tbi' => $tbi]);
    }

    // Método para actualizar un elemento
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            // Ajusta las reglas de validación según sea necesario...
        ]);
    
        $tbi = Tbi::find($id);
    
        if (!$tbi) {
            return redirect()->route('tbis.index')->with('error', 'Tbi no encontrado.');
        }
    
        $tbi->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            // Ajusta otros campos según sea necesario...
        ]);
    
        return redirect()->route('tbis.index')->with('success', 'Tbi actualizado exitosamente.');
    }

    // Método para eliminar un elemento
public function destroy($id)
{
    $tbi = Tbi::find($id);
    $tbi->delete();

    return redirect()->route('tbis.index')->with('success', 'Tbi eliminado exitosamente.');
}
}
