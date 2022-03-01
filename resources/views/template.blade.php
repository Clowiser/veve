<!doctype html>
<html lang="fr">
<head>
    <meta charset=UTF-8">
    <title>@yield('titre')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Accueil</a>
                <a class="nav-link active text-white" href="{{ url('/product') }}">Boutique</a>
                {{--                <a class="nav-link active text-dark" href="{{ url('/product/name') }}">Boutique par Nom</a>--}}
                {{--                <a class="nav-link active text-dark" href="{{ url('/product/prix') }}">Boutique par Prix</a>--}}
                <a class="nav-link active text-white" href="{{ url('/cart') }}">Panier</a>
                {{--                <a class="nav-link active text-dark" href="{{ url('/backoffice') }}">Backoffice</a>--}}
                {{--                <a class="nav-link active text-dark" href="{{ url('/backoffice/create') }}">Backoffice Create</a>--}}
            </div>
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
