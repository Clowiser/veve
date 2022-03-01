 @extends('template')
 @section('titre')
     Accueil
 @endsection

 @section('contenu')
     {{--        <br><button><a href="{{ url('/product/name') }}">Voir notre boutique par Nom</a></button><br>--}}
     {{--        <br><button><a href="{{ url('/product/prix') }}">Voir notre boutique par Prix</a></button><br>--}}
     <div @class("card card-shadow mt-5 text-center w-50 mx-auto")>
         <div @class("card-body")>
             <h5 @class("card-title mb-5")>Bienvenue à tous!</h5>
             <p @class("card-text mb-5")>Meilleurs site de vente de gemmes en ligne !</p>
         </div>
         <div @class('card-footer bg-dark')>
             <a href="{{ url('/product') }}" class="btn btn-outline-dark border-warning">Voir notre boutique</a>
         </div>
     </div>
 @endsection
