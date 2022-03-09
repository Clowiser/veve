<?php

namespace App\Http\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AuthController extends BaseController
{
    // methode d'authentification
    public function SignIn(Request $request)
    {
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $authUser = Auth::user(); 
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken; 
            $success['first_name'] =  $authUser->first_name;
            $success['last_name'] =  $authUser->last_name;
   
            return $this->sendResponse($success, 'User signed in');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
}

    // methode d'inscription pour permettre d'enregistrer un nouvel utilisateur
    public function SignUp(Request $request)
    {
        $validator = \Validator::make($request->all(), [ //la validation
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
    
        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());       
        }
    
        $input = $request->all();

        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['first_name'] =  $user->first_name;
        $success['last_name'] =  $user->last_name;
    
        return $this->sendResponse($success, 'User created successfully.');

    }
}