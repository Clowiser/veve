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
                            <textarea required type="text" name="description" id="description" class="form-control" rows="8" cols="80" placeholder="Saisir une description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix du produit:</label>
                            <input  required type="number" class="form-control" name="price" placeholder="INT (€)">
                        </div>
                        <div class="form-group">
                            <label for="title">Nom du produit:</label>
                            <input required type="text" class="form-control" name="title" placeholder="Saisir un nom">
                        </div>
                        <div class="form-group">
                            <label for="image">Image du produit:</label>
                            <input required type="url" class="form-control" name="image" placeholder="Saisir une url">
                        </div>
                        <div class="mx-3 mb-2"><button @class("btn btn-outline-primary btn-block rounded-pill")>Ajouter le produit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
