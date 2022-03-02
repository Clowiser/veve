@extends('template')

@section('titre')
 Article {{$id}}
@endsection

@section('contenu')
<div class="container">
    <div class="card-detail">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content img-gemme">
                      <div class="tab-pane active" id="pic-1"><img src="{{URL::asset('img/gemme.png') }}" /></div>
                      <div class="tab-pane" id="pic-2"><img src="{{URL::asset('img/gemme.png') }}" /></div>
                      <div class="tab-pane" id="pic-3"><img src="{{URL::asset('img/gemme.png') }}" /></div>
                      <div class="tab-pane" id="pic-4"><img src="{{URL::asset('img/gemme.png') }}" /></div>
                      <div class="tab-pane" id="pic-5"><img src="{{URL::asset('img/gemme.png') }}" /></div>
                    </div>
                </div>
                <div class="details col-md-6 mt-5">
                    <h3 class="product-title">{{$name}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">NB reviews</span>
                    </div>
                    <p class="product-description">{{$description}}</p>
                    <h4 class="price">current price: <span>{{$price}} €</span></h4>
                    <p class="vote"><strong>100%</strong> of buyers enjoyed this product! <strong>(4 votes)</strong></p>


                    <div class="action">
                        <a href="{{url('/product')}}" class="add-to-cart btn btn-dark rounded-pill"> ajouter au panier </a>
                        <a href="{{url('/cart')}}" class="add-to-cart btn btn-default rounded-pill"> acheter maintenant </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
