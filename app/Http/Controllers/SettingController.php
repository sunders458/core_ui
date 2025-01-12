<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    //
    public function index()
    {
    
      $user = Auth::user();
        
        if (!$user) {
          return response()->json(['message' => 'Utilisateur non connecté'], 401);
        }
        $societe = $user->societe; 
        if (!$societe) {
            return response()->json(['message' => 'Aucune société associée à cet utilisateur'], 404);
        }
       
        return view('parametres.index', compact('societe'));
    }
}
