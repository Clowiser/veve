@extends('template')

@section('titre')
    Articles
@endsection

@section('contenu')


<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        @foreach($products as $product)
        <div class="col-sm-4">
            <div class="card"> <img src="{{URL::asset('img/gemme.png') }}" class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <p class="text-muted mt-1">Prix</p>
                        <p  class = "text-muted mt-1">{{$product->price}} €</p>
                    </div>
                    <hr class="mt-2 mx-3">
                    <div class="d-flex flex-row justify-content-between px-3">
                        <div class="d-flex flex-column"><span class="">{{$product->description}}</span></div>

                    </div>

                    <div class="mx-3 mb-2"><a href="{{url('/product/'.$product->id)}}" class="btn btn-outline-primary btn-block rounded-pill"><small>BUILD & PRICE</small></a></div> <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
