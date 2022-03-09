<?php

namespace App\Http\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class AuthController
{
    // methode d'inscription pour permettre d'enregistrer un nouvel utilisateur
    public function SignUpUser(Request $request)
    {
        $request->validate([ // la validation
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // 'password_confirmation' => 'required',
        ]);

        $utilisateur = new User(); // création d'un nouvel ojet utilisateur avec demande des informations (prénom, nom de famille, etc.)
        
        $utilisateur->first_name = $request->first_name;
        $utilisateur->last_name = $request->last_name;
        $utilisateur->email = $request->email;
        $utilisateur->password = bcrypt($request->password); // mdp crypté
    
        $utilisateur->save(); // sauvegarde

        return response()->json([ // réponse sous format JSON 
            'msg'=>'Utilisateur creation reussi',
            'status_code' => 200, // succès de la requête
            'utilisateur'=> $utilisateur
            ]);
            
    }

    // methode d'authentification  

    public function connexion(Request $request)
    {
    try {
        $request->validate([
        'email' => 'email|required',
        'password' => 'required'
        ]);
        
        $credentials = request(['email', 'password']);
        
        if (!Auth::attempt($credentials)) {
        return response()->json([
            'status_code' => 500, // erreur serveur
            'message' => 'non authorisé'
        ]);
        }
        
        $user = User::where('email', $request->email)->first();
        
        $tokenResult = $user->createToken('authToken')->plainTextToken;
        
        return response()->json([
        'status_code' => 200, 
        'access_token' => $tokenResult,
        'token_type' => 'Bearer',
        ]);
        
    } catch (Exception $error) {
        return response()->json([
        'status_code' => 500,
        'message' => 'Error in Login',
        'error' => $error,
        ]);
    }
    } 

}