<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('cart'))
        {
            dump($request->session()->get('cart'));
        }
        else 
        {
            echo 'rien';
        }
    }
   public function storeSessionDate(Request $request,$id)
   {
        $request->session()->put('id',$id);
        return view('cart');
   }

   public function deleteSessionData(Request $request,$id)
   {
     $request->session()->forget('id',$id);
     echo 'data supprimée';
   }
}
