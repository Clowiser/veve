<!doctype html>
<html lang="fr">
<head>
    <meta charset=UTF-8">
    <title>@yield('titre')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark margin-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('home')}}"><img src="{{ URL::asset('img/gemme.png') }}" alt="logo_site" @class('rounded-circle')></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('home')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/product')}}">Liste des produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/cart')}}">Panier</a>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown link--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
<main>
    <div id="test">
        <div>
            @yield('categorie')
        </div>
        <div>
            @yield('contenu')
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
