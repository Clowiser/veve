@extends('templatebackoffice')

@section('titre')
    Liste des produits
@endsection

@section('contenu')
<div @class('container')>
    <a href="{{url('/backoffice/add')}}" @class('btn btn-outline-success bg-success w-25 rounded-pill mb-5 mt-5')>Ajouter un produit</a>
    <a href="{{url('/home')}}" @class('btn btn-outline-dark w-25 rounded-pill mb-5 mt-5')>Accueil</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}} €</td>
            <td>{{$product->description}}</td>
            <td>
                <a href="{{url('backoffice/edit/'.$product->id)}}" class="btn btn-warning btn-sm bg-warning rounded-pill">Editer</a>
            </td>
            <td>
                <a href="{{url('backoffice/delete/'.$product->id)}}" class="btn btn-danger btn-sm bg-danger rounded-pill">Supprimer</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
