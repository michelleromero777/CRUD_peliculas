@extends('layout')
@section('titulo', $titulo)
@section('content')
<h2>Editar Película</h2>
<form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
    @csrf @method('PUT')
    @include('formulario', ['pelicula' => $pelicula])

    <a href="{{ route('peliculas.index') }}" class="btn btn-warning">Cancelar</a>
</form>
@endsection
