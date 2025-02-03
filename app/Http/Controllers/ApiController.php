<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Serveur;
use App\Models\Personne;
use App\Models\TokenApi;
use App\Models\Client;
use App\Models\Alergene;
use App\Models\Restreindre;
use Illuminate\Http\Request;
use App\Models\CategoriePlat;
use App\Models\TypePlat;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use App\Models\Commande;
use App\Models\Cuisine;
use App\Models\Etat;
use App\Models\Table;
use App\Models\Comporter;
use App\Models\Reservation;

class ApiController extends Controller
{
    public function verificationTokenServeur($token) {
        $personne = Personne::where('token', $token)->first();
        if ($personne) {
            $serveur = Serveur::where('idPersonne', $personne->idPersonne)->first();
            if ($serveur) {
                return $personne->idPersonne;
            }
        }
        return false;
    }


    public function api_login(Request $request)
    {
        if (!$request->has('email') || !$request->has('password')) {
            return response()->json(['error' => 'Email et mot de passe sont requis.']);
        } 
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
                            $res = $plat->restreindres;
                            $restriction = [];
                            foreach ($plat["restreindres"] as $res) {
                                array_push($restriction, $res->alergene);
                            }
                            $plat["alergenes"] = $restriction;
                            unset($plat["restreindres"]);
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

    public function registerOrder(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            $idServeur = $this->verificationTokenServeur(htmlspecialchars($request->token));
            if (!$idServeur) {
                return response()->json(['error' => 'Le token est invalide.']);
            } else {
                if (!$request->has('table')) {
                    return response()->json(['error' => 'Le numéro de table est manquant.']);
                } else {
                    $table = Table::where('idTable', $request->table)->first();
                    if ($table->idReservation != null) {
                        $commande = new Commande();
                        $commande->idPersonne = $idServeur;
                        $commande->idEtat = 1;
                        $commande->idReservation = $table->idReservation;
                        $commande->dateCommande = date('Y-m-d H:i:s');
                        $commande->save();
                        return response()->json(['success' => $commande->idCommande]);
                    } else {
                        return response()->json(['error' => 'La table n\'est pas réservée.']);
                    }
                }
            }
        }
    }

    public function registerLignOrder(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            if ($this->verificationTokenServeur(htmlspecialchars($request->token))) {
                if (!$request->has('commande')) {
                    return response()->json(['error' => 'Le numéro de commande est manquant.']);
                } else {
                    if (!$request->has('plat') || !$request->has('quantite') || !$request->has('prix')) {
                        return response()->json(['error' => 'Les informations sur la ligne de commande du plat sont manquantes.']);
                    } else {
                        if (Plat::where('idPlat', $request->plat)->first()->quantite < $request->quantite) {
                            return response()->json(['error' => 'La quantité de plat est insuffisante.']);
                        } else {
                            $commande = Commande::where('idCommande', $request->commande)->first();
                            if ($commande) {
                                $plat = Plat::where('idPlat', $request->plat)->first();
                                $plat->quantite -= $request->quantite;
                                $plat->save();

                                $lignCommande = new Comporter();
                                $lignCommande->idCommande = $commande->idCommande;
                                $lignCommande->idPlat = $request->plat;
                                $lignCommande->nbCommander = $request->quantite;
                                $lignCommande->prix = $request->prix;
                                $lignCommande->save();
                          return response()->json(['success' => 'Ligne de commande ajoutée.']);
                            } else {
                        return response()->json(['error' => 'La commande est invalide.']);
                            }
                        }
                    }
                }
            } else {
                return response()->json(['error' => 'Le token est invalide.']);
            }
        }
    }

    public function registerReservation(Request $request) {
        if (!$request->has('token')) {
            return response()->json(['error' => 'Le token est manquant.']);
        } else {
            if ($request->has('uuid')) {
                $uid = $request->uuid;
                $reservation = Reservation::where('uuid', $uid)->first();
                if ($reservation) {
                    $date = date('Y-m-d H:i:s', strtotime('+1 hour'));
                    $dateRAvant = $reservation->dateReservation;
                    $dateRApres = date('Y-m-d H:i:s', strtotime($reservation->dateReservation . ' +30 minutes'));
                    if ($dateRAvant <= $date && $dateRApres >= $date) {
                        $table = $reservation->idTable;
                        $table = Table::where('idTable', $table)->first();
                        $table->idReservation = $reservation->idReservation;
                        $table->save();
                        return response()->json(['success' => 'La réservation est confirmée.']);
                    } else {
                        return response()->json(['error' => 'La réservation n\'est pas valide.']);
                    }
                } else {
                    return response()->json(['error' => 'La réservation n\'existe pas.']);
                }
            } else {
                response()->json(['error' => 'L\'UUID est manquant.']);
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
                        $plats = [];
                        foreach ($commande->comporters as $comporter) {
                            array_push($plats, Plat::where('idPlat', $comporter->idPlat)->first());
                        }
                        $commande['plats'] = $plats;
                        $commande['reservation'] = $commande->reservation;
                        unset($commande['comporters']);
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
