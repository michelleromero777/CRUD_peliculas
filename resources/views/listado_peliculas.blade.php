@extends('layout')
@section('titulo', $titulo)
@section('content')


<div class="glass-card mt-4">
    <h2 class="mb-4">Listado de Películas</h2>
    <a href="{{ route('peliculas.create') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i> Agregar Nueva</a>

    {{-- Alerta básica de operación exitosa --}}
   {{--  @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <div class="table-responsive">
        <table class="table table-hover table-bordered text-white">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Género</th>
                    <th>Director</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peliculas as $p)
                <tr>
                    <td>{{ $p->titulo }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->genero }}</td>
                    <td>{{ $p->director }}</td>
                    <td>{{ $p->fecha_estreno }}</td>
                    <td>
                        <a href="{{ route('peliculas.edit', $p->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('peliculas.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    
@endsection
