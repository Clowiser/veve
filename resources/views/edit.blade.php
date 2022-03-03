@extends('templatebackoffice')

@section('titre')
    Editer produit
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="card-body pt-0 px-0">
                <div class="panel-body">
                    <br><form class="" action="" method="POST">
                        {{ csrf_field() }}
{{--                        @method('PUT')--}}
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <input value="{{$product->description}}" required type="text" name="description" id="description" class="form-control" rows="8" cols="80" placeholder="Saisir une description">
                        </div>
                        <div class="form-group">
                            <label for="price">Prix :</label>
                            <input value="{{$product->price}}" required type="number" class="form-control" name="price" placeholder="INT (€)">
                        </div>
                        <div class="form-group">
                            <label for="title">Nom du produit :</label>
                            <input value="{{$product->title}}" required type="text" class="form-control" name="title" placeholder="Saisir un nom">
                        </div>
                        <div class="form-group">
                            <label for="image">Image du produit :</label>
                            <input value="{{$product->image}}" required type="url" class="form-control" name="image" placeholder="Saisir une url">
                        </div>
                        <br><div class="mx-3 mb-2"><button @class("btn btn-outline-primary btn-block rounded-pill")>Modifier le produit</button></div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
