@extends('templatebackoffice')

@section('titre')
    Ajout produit
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="card-body pt-0 px-0">
                <div class="panel-body">
                    <br><form class="" action="/backoffice" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="description">Description du produit:</label>
                            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="8" cols="80" placeholder="Saisir une description"></textarea>
                            @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Prix du produit:</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="INT (€)">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Nom du produit:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Saisir un nom">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image du produit:</label>
                            <input type="url" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Saisir une url">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="categorie">Categorie du produit:</label>--}}
{{--                            <select required class="form-control" name="categorie" placeholder="Choisir une catégorie"></select>--}}
{{--                        </div>--}}
                        <div class="mx-3 mb-2"><button @class("btn btn-outline-primary btn-block rounded-pill")>Ajouter le produit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
