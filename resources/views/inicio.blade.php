@extends('layout')
@section('titulo', $titulo)
@section('content')


<header>
    <h1>RepelisHD <i class="fa-solid fa-video"></i></h1>
  </header>
  
  
  
  <section class="hero">
    <h2>Tu universo de entretenimiento en un solo lugar</h2>
    <p>Explora miles de series, películas, documentales y más. Disfruta cuando quieras, donde quieras.</p>
  
    <br>
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="{{ route('peliculas.index') }}" class="btn btn-primary">Ver catálogo</a>
  </div>
  </section>
  
  
  
  
    <footer>
      &copy; 2025 RepelisHD. Todos los derechos reservados.
    </footer>
  
  </body>
  </html>
@endsection
