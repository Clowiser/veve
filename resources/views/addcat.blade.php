@extends('templatebackoffice')

@section('titre')
    Ajout categorie
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="card-body pt-0 px-0">
                <div class="panel-body">
                    <br><form class="" action="/backoffice" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nom de la catégorie:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Saisir un nom">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mx-3 mb-2"><button @class("btn btn-outline-primary rounded-pill")>Ajouter le produit</button></div>
                    </form>
                    <div class="mx-3 mb-2"><a href="{{url('backoffice')}}" @class("btn btn-outline-primary rounded-pill")>Retour</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
