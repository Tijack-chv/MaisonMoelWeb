<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Serveur;
use App\Models\Personne;
use App\Models\TokenApi;
use Illuminate\Http\Request;
use App\Models\CategoriePlat;
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


    public function plats(Request $request){
        if(!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            if (!$request->has('type')) { 
                return response()->json(['error' => 'Le type de plat est manquant.']);
            } else {
                $personne = Personne::where('token',$request->token)->first();
                if ($personne && Serveur::where('idPersonne', $personne->idPersonne)->first()) {
                    if (CategoriePlat::where('idCategoriePlat', $request->type)->first()) {
                        return response()->json(["plats" => Plat::where('idCategoriePlat', $request->type)->get()]);
                    } else {
                        return response()->json(['error' => 'Le type de plat est invalide.']);
                    }
                } else {
                    return response()->json(['error' => 'Le token est invalide.']);
                }
            }
        }
    }
}
