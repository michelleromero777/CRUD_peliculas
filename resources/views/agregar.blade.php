@extends('layout')
@section('titulo', $titulo)
@section('content')
<h2>Agregar Película</h2>
<form action="{{ route('peliculas.store') }}" method="POST">
    @csrf
    @include('formulario')

    <a href="{{ route('peliculas.index') }}" class="btn btn-warning">Cancelar</a>
</form>
@endsection
