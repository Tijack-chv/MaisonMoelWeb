<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Serveur;
use App\Models\Personne;
use App\Models\TokenApi;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\CategoriePlat;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use App\Models\Commande;
use App\Models\Cuisine;
use App\Models\Etat;

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
                        $plats = Plat::where('idCategoriePlat', $request->type)->get();
                        foreach ($plats as $plat) {
                            $plat->type_plat;
                            $plat->restreindres;
                        }
                        return response()->json(["plats" => $plats]);
                    } else {
                        return response()->json(['error' => 'Le type de plat est invalide.']);
                    }
                } else {
                    return response()->json(['error' => 'Le token est invalide.']);
                }
            }
        }
    }

    public function sendMessage(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            $personne = Personne::where('token', $request->token)->first();
            if ($personne && (Serveur::where('idPersonne', $personne->idPersonne)->first() || Cuisine::where('idPersonne', $personne->idPersonne)->first())) {
                if ($request->has('message')) {
                    $message_str = htmlspecialchars($request->message);
                    $message = new Message();
                    $message->idPersonne = $personne->idPersonne;
                    $message->message = $message_str;
                    $message->date = date('Y-m-d H:i:s');
                    $message->save();
                    return response()->json(['success' => 'Message envoyé.']);
                } else {
                    return response()->json(['error' => 'Le message est manquant.']);
                }
            } else {
                return response()->json(['error' => 'Le token est invalide.']);
            }
        }
    }

    public function getMessages(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            $personne = Personne::where('token', $request->token)->first();
            if ($personne && !Client::where('idPersonne', $personne->idPersonne)->first()) {
                $messages = Message::limit(50)->orderby('date', 'desc')->get();
                foreach ($messages as $message) {
                    $personne = Personne::where('idPersonne', $message->idPersonne)->first();
                    $message['personne'] = $personne;
                }
                return response()->json(['messages' => $messages]);
            } else {
                return response()->json(['error' => 'Le token est invalide.']);
            }
        }
    }

    public function getCommandes(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            if (!$request->has('etat')) {
                return response()->json(['error' => 'L\'état est manquant.']);
            } else {
                $personne = Personne::where('token', $request->token)->first();
                if ($personne && Serveur::where('idPersonne', $personne->idPersonne)->first()) {
                    $commandes = Commande::where('idEtat', $request->etat)->orderby('dateCommande', 'asc')->get();
                    foreach ($commandes as $commande) {
                        $serveur = Personne::where('idPersonne', $commande->idPersonne)->first();
                        $commande['serveur'] = $serveur;
                        $commande['comporters'] = $commande->comporters;
                        foreach ($commande['comporters'] as $comporter) {
                            $comporter['plat'] = Plat::where('idPlat', $comporter->idPlat)->first();
                        }
                        $commande['reservation'] = $commande->reservation;
                        $commande['reservation']['client'] = Personne::where('idPersonne', $commande->reservation->idPersonne)->first();
                        $commande['etat'] = Etat::where('idEtat', $commande->idEtat)->first();
                    }
                    return response()->json(['commandes' => $commandes]);
                } else {
                    return response()->json(['error' => 'Le token est invalide.']);
                }
            }
        }
    }
}
