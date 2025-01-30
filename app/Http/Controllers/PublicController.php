<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avi;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Comporter;
use App\Models\Plat;
use App\Models\Reservation;
use App\Models\Table;

class PublicController extends Controller
{
    public function index()
    {
        $avis = Avi::limit(5)->orderBy('note', 'desc')->get();
        $avgAvis = Avi::avg('note');
        $notes = array(Avi::where('note', 1)->count(), Avi::where('note', 2)->count(), Avi::where('note', 3)->count(), Avi::where('note', 4)->count(), Avi::where('note', 5)->count(), Avi::count());
        $plats = Plat::limit(8)->get();
        return view('index', ['avis' => $avis, 'avgAvis' => $avgAvis, 'notes' => $notes, 'plats' => $plats]);
    }

    public function priseCommande()
    {
        
        $plats = Plat::all();
        
        $plats = $plats->map(function($plat) {
            $plat->nomPlat = addslashes($plat->nomPlat);  // Échappe les apostrophes
            return $plat;
        });

        // Filtrage par idCategoriePlat
        $entrees = $plats->where('idCategoriePlat', 1);
        $platsT = $plats->where('idCategoriePlat', 2);
        $desserts = $plats->where('idCategoriePlat', 3);
        $boissons = $plats->where('idCategoriePlat', 4);

        // Envoyer les données filtrées à la vue
        return view('Commande.PriseCommande', [
            'entrees' => $entrees,
            'plats' => $platsT,
            'desserts' => $desserts,
            'boissons' => $boissons
        ]);
    }

    public function reserver()
    {
        $tables = Table::all();
        $clients = Client::with('personne')->get();
       

        return view('Commande.ReservationCommande', [
            'tables' => $tables,
            'clients' => $clients
        ]);
    }

    public function ajoutReserverParServeur(Request $request)
    {
    
        // Création de la réservation
        Reservation::create([
            'idPersonne' => $request->client_id,
            'idTable' => $request->table_id,
            'nbPersonnes' => $request->nombre_personnes,
            'dateMoment' => now(),
            'dateReservation' => now(),
        ]);

        return redirect()->route('Commande.PriseCommande');
    }

    public function commander(Request $request)
    {

        Commande::create([
            'idEtat' => 1,
            'idReservation' =>3,
            'idPersonne' => 7,
            'dateCommande'=> now(),
        ]);
        
        $derniereCommande = Commande::latest('idCommande')->first();
        $idDeCommande = $derniereCommande->idCommande;
        

        // Récupérer les données de la commande
        $orderData = json_decode($request->input('orderData'), true);

        // Vous pouvez maintenant traiter les articles de la commande
        foreach ($orderData['items'] as $item) {
            
            // Exemple : enregistrer chaque item dans une table de commandes
            Comporter::create([
                
                'idCommande' => $idDeCommande,
                'nbCommander' => $item['quantity'],
                'prix' => $item['price'],
                'idPlat' => $item['idPlat'],
            ]);
        }

        // Retourner une réponse ou rediriger vers une autre page
        return redirect()->route('confirmation')->with('success', 'Votre commande a été envoyée avec succès !');
    }
}
