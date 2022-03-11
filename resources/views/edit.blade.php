@extends('template-bo')

@section('titre')
    Editer un article
@endsection

@section('contenu')

<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        <div class="card-body">
            <div class="panel-body">
                <br>
            
                <p>Editer le produit : {{ $product->title }} - id {{ $product->id }}</p>
                <hr>
                <form action="" method="post"> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{-- {{ csrf_field() }} --}}
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="title">Nom :</label>
                        <input type="text" class="form-control" name="title" value="{{ $product->title }}" placeholder="Saisir un nom">
                    </div>

                    <div class="form-group">
                        <label for="description">Description :</label>
                        <input type="text" name="description" value="{{ $product->description }}" id="description" class="form-control" placeholder="Saisir une description">
                    </div>

                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="number" class="form-control" name="price" value={{ $product->price }} placeholder="en €">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categorie : </label>

                        <select class="form-control" name="category_id">
                            <option value="">{{ $product->category_id }}</option>

                            @foreach ($category as $key => $value) 
                            {
                            <option value="{{ $key }}">{{ $key }}</option>
                            }
                            @endforeach
                        </select>

                        {{-- <p>{{ $category }}</p>
                        <p>{{ $product->category_id }}</p>
                        <select class="form-control" name="category_name">
                            <option value="">{{ $product->category_id }}</option>

                            @foreach ($category as $value) 
                            {
                            <option value="{{ $value }}">{{ $value }}</option>
                            }
                            @endforeach
                        </select> --}}
                    </div>

                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="url" class="form-control" name="image" value={{ $product->image }} placeholder="Saisir une url">
                    </div>

                    {{-- <div class="mt-3 mx-0"><button @class("btn btn-warning bg-warning rounded-pill mt-3")>Edit</button></div> --}}
                    <input class="btn btn-success bg-success rounded-pill mt-3" type="submit" value="Save" />
            
                </form>

            </div>
        </div>
    </div>
</div>

@endsection