 @extends('template')
 @section('titre')
     Accueil
 @endsection

 @section('contenu')
     {{--        <br><button><a href="{{ url('/product/name') }}">Voir notre boutique par Nom</a></button><br>--}}
     {{--        <br><button><a href="{{ url('/product/prix') }}">Voir notre boutique par Prix</a></button><br>--}}

        <div @class("card card-shadow mb-5 text-center w-50 mx-auto")>
         <div @class("card-body")>
             <img src="{{ URL::asset('img/veveverse.png') }}" alt="logo_site" @class('w-75')>
             <p @class("card-text mt-5 mb-5")>Meilleurs site de vente de gemmes en ligne !</p>
         </div>
         <div @class('card-footer mb-5')>
             <a href="{{ url('/product') }}" class="btn btn-outline-primary rounded-pill">Voir notre boutique</a>
         </div>
        </div>
 @endsection
