@extends('templatebackoffice')

@section('titre')
    Ajout produit
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
                <div class="col-sm-4">
                    <div class="card"> <img src="{{URL::asset('img/gemme.png') }}" class="card-img-top" width="100%">
                        <div class="card-body pt-0 px-0">
                            <div class="d-flex flex-row px-3">Name ici</div>
                            <div class="d-flex flex-row px-3">Prix ici</div>
                            <div class="d-flex flex-row px-3">Description ici</div>
                            <hr class="mt-2 mx-3">
                            <div class="mx-3 mb-2"><a href="#" class="btn btn-outline-primary btn-block rounded-pill">Ajouter le produit</a></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
