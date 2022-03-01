@extends('template')

@section('titre')
Cart
@endsection

@section('contenu')


<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://preview.redd.it/rmhf4o627jp71.jpg?auto=webp&s=892bf4cc6b56b15cdbd48c3901f5bb48cc286042"></div>
                    <div class="col">
                        <div class="row text-muted">Gème</div>
                        <div class="row">Gème 20%</div>
                    </div>
                    <div class="col"> <a href="#">-</a><a href="#" class="border">3420</a><a href="#">+</a> </div>
                    <div class="col">&euro; 2500 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://preview.redd.it/rmhf4o627jp71.jpg?auto=webp&s=892bf4cc6b56b15cdbd48c3901f5bb48cc286042"></div>
                    <div class="col">
                        <div class="row text-muted">Gème</div>
                        <div class="row">Gème 10% </div>
                    </div>
                    <div class="col"> <a href="#">-</a><a href="#" class="border">627</a><a href="#">+</a> </div>
                    <div class="col">&euro; 500 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://preview.redd.it/rmhf4o627jp71.jpg?auto=webp&s=892bf4cc6b56b15cdbd48c3901f5bb48cc286042"></div>
                    <div class="col">
                        <div class="row text-muted">Gème</div>
                        <div class="row">Gème 15%</div>
                    </div>
                    <div class="col"> <a href="#">-</a><a href="#" class="border">1966</a><a href="#">+</a> </div>
                    <div class="col">&euro; 1500 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS 3</div>
                <div class="col text-right">&euro; 4500</div>
            </div>
            <form>
                <p>SHIPPING</p> <select>
                    <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                </select>
                <p>GIVE CODE</p> <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; 4505</div>
            </div> <button class="btn">CHECKOUT</button>
        </div>
    </div>
</div>

@endsection
