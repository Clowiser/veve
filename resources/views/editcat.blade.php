@extends('templatebackoffice')

@section('titre')
    Editer categorie
@endsection

@section('contenu')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="card-body pt-0 px-0">
                <div class="panel-body">
                    <br><form class="" action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nom de la categorie :</label>
                                <input value="{{$category->name}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Saisir un nom">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br><div class="mx-3 mb-2"><button @class("btn btn-outline-primary btn-block rounded-pill")>Modifier la categorie</button></div><br>
                    </form>
                    <div class="mx-3 mb-2"><a href="{{url('backoffice')}}" @class("btn btn-outline-primary rounded-pill")>Retour</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
