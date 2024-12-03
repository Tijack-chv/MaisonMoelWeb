<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serveur;
use App\Models\Tokenapi;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function api_login(Request $request)
    {
        if (!$request->has('email') || !$request->has('password')) {
            return response()->json(['error' => 'Email et mot de passe sont requis.']);
        } else if (!$request->has('token')) {
            return response()->json(['error' => 'Token est requis.']);
        }
        $token = htmlspecialchars($request->token);
        if (Tokenapi::where('token', $token)->first()) {
            $email = htmlspecialchars($request->email);
            $password = htmlspecialchars($request->password);
            $serveur = Serveur::where('EMAIL', $email)->first();
            if ($serveur) {
                if (Hash::check($password, $serveur->PASSWORD)) {
                    return response()->json(['serveur' => $serveur]);
                } else {
                    return response()->json(['error' => 'Email ou mot de passe incorrect.']);
                }
            } else {
                return response()->json(['error' => 'Email ou mot de passe incorrect.']);
            }
        } else {
            return response()->json(['error' => 'Le token est invalide.']);
        }
    }
}
