@extends('template-bo')

@section('titre')
    Editer un article
@endsection

@section('contenu')


<p>ici le formulaire pour editer l'article</p>

<form></form>

    <h3 class="product-title"> Titre : <span>{{$title}}</span></h3>
    <h4 class="price">Prix : <span>{{$price}}€</span></h4>

<form action="{{ url('/index/update', ['id' => $product->id]) }}" method="post">
    <input class="btn btn-warning bg-warning rounded-pill" type="submit" value="Update" />
    <input type="hidden" name="_method" value="update" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endsection