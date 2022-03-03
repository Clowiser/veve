@extends('template')

@section('titre')
    Articles
@endsection

@section('contenu')


    <div class="container-fluid d-flex justify-content-center margin">
        <div class="row mt-5">

            @foreach ($products as $product)

                <div class="col-sm-4">
                    <div class="card"> <img src="{{$product->image}}" class="card-img-top" width="100%">
                        <div class="card-body pt-0 px-0">
                            <div class="d-flex flex-row justify-content-between mb-0 px-3"> <p class="text-muted mt-1">Prix</p>
                                <p  class = "text-muted mt-1">{{$product->price}}</p>
                            </div>
                            <hr class="mt-2 mx-3">
                            <div class="d-flex flex-row justify-content-between px-3">
                                <div class="d-flex flex-column"><span class="">{{$product->title}}</span></div>

                            </div>

                            <div class="mx-3 mb-2"><a href="{{url('/cart/add/'.$product->id)}}" class="btn btn-outline-primary btn-block rounded-pill">Acheter maintenant</a></div> <a href="{{url('/product/'.$product->id)}}" class="d-flex justify-content-center text-muted">en savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>




@endsection
