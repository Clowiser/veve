 @extends('template')
 @section('titre')
     Accueil
 @endsection

 @section('contenu')
        <div @class("card card-shadow mb-5 text-center w-50 mx-auto bg-light")>
             <div @class("card-body")>
                 <img src="{{ URL::asset('img/veveverse.png') }}" alt="logo_site" @class('w-75 rounded-pill')>
                 <p @class("card-text mt-5 mb-2")>Meilleurs site de vente de gemmes en ligne !</p>
                 <a href="{{ url('/product') }}" @class("btn btn-outline-primary rounded-pill w-50")>Voir notre boutique</a>
             </div>
        </div>
 @endsection
