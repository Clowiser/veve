@extends('templatebackoffice')

@section('titre')
    Ajout produit
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="card-body pt-0 px-0">
                <div class="panel-body">
                    <br><form class="" action="/backoffice/add" method="POST">
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
                        <p>Catégories :</p>
                        <div @class("d-flex flex-row")>
                            @foreach($categorie as $category)
                                <label for="categorie">{{$category->name}}</label>
                                <input type="checkbox" class="w-25 @error('categorie') is-invalid @enderror" name="category[]" value="{{$category->id}}">
                            @endforeach
                            @error('categorie')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mx-3 mb-2"><button @class("w-25 btn btn-outline-primary rounded-pill")>Ajouter le produit</button></div>
                    </form>
                    <div class="mx-3 mb-2"><a href="{{url('backoffice')}}" @class("w-25 btn btn-outline-primary rounded-pill")>Retour</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
