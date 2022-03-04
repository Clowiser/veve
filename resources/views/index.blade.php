@extends('template-bo')

@section('titre')
    Back Office
@endsection

@section('contenu')

    <h5>Ajouter un article</h5>
    <a href="{{url('index/create')}}" class="btn btn-primary btn-sm bg-primary rounded-pill">Add</a>


    <div class="container-fluid d-flex justify-content-center margin">
        <div class="row mt-1">

            @foreach ($products as $product) 

                <div class="row-sm-3 mt-1">
                    <div class="card">

                        <div class="d-flex flex-row justify-content-between px-3 mt-2">
                            <div class="d-flex flex-column"><span class="">{{$product->title}}</span></div>
                        </div>
                        <hr class="mt-2 mx-3">
                        <div class="card-body pt-0 px-0">
                            <div class="d-flex flex-row justify-content-between mb-0 px-3"> <p class="text-muted mt-1">Prix</p>
                                <p  class = "text-muted mt-1">{{$product->price}}</p>
                            </div>

                            <div class="mx-3 d-flex flex-row justify-content-around">

                                <form action="{{ url('/index/edit', ['id' => $product->id]) }}" method="post">
                                    <input class="btn btn-warning bg-warning rounded-pill" type="submit" value="Edit" />
                                    <input type="hidden" name="_method" value="edit" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                                
                                {{-- <a href="{{url('index/delete/'.$product->id)}}" class="btn btn-danger btn-sm bg-danger rounded-pill">Supprimer</a> // ne fonctionne pas, car l'url est en get alors que le destroy attdsends une methode Delete--}}

                                <form action="{{ url('/index/delete', ['id' => $product->id]) }}" method="post">
                                    <input class="btn btn-danger bg-danger rounded-pill" type="submit" value="Delete" />
                                    <input type="hidden" name="_method" value="delete" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>    
        </div>
    </div>

@endsection