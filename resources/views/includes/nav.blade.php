<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">
    <a class="navbar-brand" href="{{route('home')}}">First.fm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Motor de busqueda
        </a>
        </li>
        <li class="collapse navbar-collapse">
        <a class="nav-link" href="{{route('perfil')}}">Perfil
            <span class="sr-only">(current)</span>
        </a>
        </li>

        <li class="collapse navbar-collapse">
        <a class="nav-link" href="{{route('ajustes')}}">Ajustes
        </a>
        </li>

        <li class="collapse navbar-collapse">
        <a class="nav-link" href="{{route('salir')}}">Salir
        </a>
        </li>


    </ul>
    </div>
</div>

</nav>
