<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

use Illuminate\Http\Middleware\Auth;

class ConnexionController
{
    public function showLogin()
    {
        return view('login');
    }

    public function connexion(Request $request)
    {

        $validator = \Validator::make($request->all(), [ //la validation
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        // var_dump($resultat); //pour voir si les authentifiants sont true ou false
        // return "traitement de connexion réussi";

        if($resultat){
            return redirect('compte');
        }

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects.',
            'password' => 'Votre mot de passe est incorrect.',
        ]);
        
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('login');
    }
}
