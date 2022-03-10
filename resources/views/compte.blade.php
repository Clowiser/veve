@extends('template')

@section('contenu')

<div class="container-fluid">
<h3>Mon compte</h3>
{{-- <p>Vous êtes bien connecté.</p> --}}

<a href="index" class="btn btn-primary rounded-pill w-25">BackOffice</a>

<a href="deconnexion" class="btn btn-danger rounded-pill w-25">Déconnexion</a>

</div>

@endsection