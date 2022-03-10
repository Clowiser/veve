<?php

// Un middleware permet de court-circuiter une requête de l'utilisateur.
//Nous pouvons, avant l'exécution de contrôleur, effectuer des tests et rediriger si nécessaire la personne. 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dump('Nous sommes dans le Auth middleware');
        // die(); //arrêt du script

        // si non identifié -> retour sur login
        if(auth()->guest()){

            return redirect('login');
        }

        return $next($request);
    }
}
