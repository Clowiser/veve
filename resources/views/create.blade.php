@extends('template-bo')

@section('titre')
Ajouter un article
@endsection

@section('contenu')

<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        <div class="card-body pt-0 px-0">
            <div class="panel-body">
                <br>
                
                <form class="" action="/index" method="POST">
                    {{-- le formulaire est géré par la route /index => de quelles manière il comprend que c'est la route avec le store()?
                        action emmène sur index avec les données enregistrées --}}
                    {{ csrf_field() }}
                    {{-- //le token CSRF : protection de l'applications contre les attaques de falsification de requêtes intersite + bien le mettre contre les erreurs 419 --}}
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="3" cols="80" placeholder="Saisir une description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="number" class="form-control" name="price" placeholder="en €">
                    </div>

                    <div class="form-group">
                        <label for="title">Nom :</label>
                        <input type="text" class="form-control" name="title" placeholder="Saisir un nom">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categorie :</label>
                        <input type="number" class="form-control" name="category_id" placeholder="">
                    </div>

                    {{-- <div class="form-group">
                        <label for="category_id">Categorie : </label>
                        <select class="form-control" name="category_id">
                            @foreach ($category as $key => $value) 
                            {
                            <option value="{{ $key }}">{{ $key }}</option>
                            }
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="url" class="form-control" name="image" placeholder="Saisir une url">
                    </div>

                    <div class="mt-3 mx-0"><button @class("btn btn-outline-primary btn-block rounded-pill")>Ajouter le produit</button></div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center">
@if($errors->any())
{{ implode('', $errors->all(':message  ')) }}
@endif
</div>

@endsection