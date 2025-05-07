<style>
    .navbar-brand{
        color: white;
    }

    nav{
        background-color: #1e1e2f;
    }

    .nav-link{
       color: white; 
    }
</style>


<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">RepelisHD <i class="fa-solid fa-video"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('peliculas.index') }}">Catalogo</a></li>
{{--                     <li class="nav-item"><a class="nav-link" href="{{ route('vista4') }}">Editar</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vista5') }}">Eliminar</a></li> --}}
            </ul>
        </div>
    </div>
</nav>