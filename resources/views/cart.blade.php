@extends('template')

@section('titre')
Cart
@endsection

@section('contenu')


<div class="card-panier margin-cart">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Panier</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>

            @foreach (session('cart') as $article)
            
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="{{$article['image']}}"></div>
                    <div class="col">
                        <div class="row">{{$article['title']}}</div>
                    </div>
                    <div class="col"> <a href="{{url('cart/undo/'.$article['id'])}}">-</a><a href="#" class="border">{{$article['quantity']}}</a><a href="{{url('cart/update/'.$article['id'])}}">+</a> </div>
                    <div class="col">{{$article['price']}} &euro;</div>
                    <div class="col"><a href="{{url('cart/remove/'.$article['id'])}}"><span class="close">&#10005;</span></a></div>
                </div>
            </div>

            @endforeach


            
            <div class="back-to-shop"><a href="/product">&leftarrow;<span class=""> Continuer vos achats</span></a></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Résumé</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS 3</div>
                <div class="col text-right">&euro; 4500</div>
            </div>
            <form>
                <p>Livraison</p> <select>
                    <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                </select>
                <p>Code promo</p> <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Prix total</div>
                <div class="col text-right">&euro; 4505</div>
            </div> <button class="btn btn-outline-primary rounded-pill">Payer</button>
        </div>
    </div>
</div>


@endsection
