<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class Catalogo extends Controller
{
    public function inicio() {
        $titulo = 'Bienvenidos';
        return view('inicio', compact('titulo'));
    }

    public function index() {
        $titulo = "Listado de peliculas";
        $peliculas = Pelicula::all();
        return view('listado_peliculas', compact('peliculas', 'titulo'));
    }

    public function create() {
        $titulo = "Agregar pelicula";
        return view('agregar', compact('titulo'));
    }

    public function store(Request $request) {
        Pelicula::create($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película agregada con exito');
    }

    public function edit($id) {
        $titulo = "Editar pelicula";
        $pelicula = Pelicula::findOrFail($id);
        return view('editar', compact('pelicula', 'titulo'));
    }

    public function update(Request $request, $id) {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película actualizada con exito');
    }

    public function destroy($id) {
        Pelicula::destroy($id);
        return back()->with('success', 'Película eliminada correctamente');
    }
}

