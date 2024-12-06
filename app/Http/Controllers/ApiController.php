<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Serveur;
use App\Models\TokenApi;
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
        if (TokenApi::where('token', $token)->first()) {
            $email = htmlspecialchars($request->email);
            $password = htmlspecialchars($request->password);
            $serveurP = Personne::where('email', $email)->first();
            if ($serveurP) {
                $serveur = Serveur::where($serveurP->id)->first();
                if ($serveur) {
                    if (Hash::check($password, $serveurP->password)) {
                        $serveurP = $serveurP->toArray();
                        $serveurP += ['appreciations' => $serveur->appreciations];
                        $serveurP += ['salaires' => $serveur->salaires];
                        return response()->json(['serveur' => $serveurP]);
                    } else {
                        return response()->json(['error' => 'Email ou mot de passe incorrect.']);
                    }
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
