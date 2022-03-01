 @extends('template')
 @section('titre')
     Accueil
 @endsection

 @section('contenu')
     {{--        <br><button><a href="{{ url('/product/name') }}">Voir notre boutique par Nom</a></button><br>--}}
     {{--        <br><button><a href="{{ url('/product/prix') }}">Voir notre boutique par Prix</a></button><br>--}}
     <div @class("card mt-5 text-center w-50 mx-auto")>
         <div @class('card-header bg-light')>
             <h4>HELLO</h4>
         </div>
         <div @class("card-body")>
             <h5 @class("card-title")>Bienvenue à tous!</h5>
             <p @class("card-text")>Vous avez besoin d'avoir du style pour vos entraînements ? Alors n'hésitez pas à voir notre boutique !</p>
         </div>
         <div @class('card-footer bg-dark')>
             <a href="{{ url('/product') }}" class="btn btn-outline-light">Voir notre boutique</a>
         </div>
     </div>
 @endsection
