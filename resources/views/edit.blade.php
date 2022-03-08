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
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="8" cols="80" placeholder="Saisir une description">{{$product->description}}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Prix :</label>
                            <input value="{{$product->price}}" type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="INT (€)">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Nom du produit :</label>
                            <input value="{{$product->title}}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Saisir un nom">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image du produit :</label>
                            <input value="{{$product->image}}" type="url" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Saisir une url">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <p>Catégories :</p>
                        <div @class("d-flex flex-row")>
                        @foreach($categorie as $category)
                                <label for="categorie">{{$category->name}}</label>
                                <input type="checkbox" class="w-25 @error('categorie') is-invalid @enderror" name="category[]" value="{{$category->id}}" {{ in_array($category->id, $productCat) ? 'checked' : '' }}>
                        @endforeach
                            @error('categorie')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br><div class="mx-3 mb-2"><button @class("w-25 btn btn-outline-primary btn-block rounded-pill")>Modifier le produit</button></div><br>
                    </form>
                    <div class="mx-3 mb-2"><a href="{{url('backoffice')}}" @class("w-25 btn btn-outline-primary rounded-pill")>Retour</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
