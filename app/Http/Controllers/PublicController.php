<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Avi;
use App\Models\Plat;
use App\Models\Table;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Personne;
use App\Models\Comporter;
use App\Models\Reservation;
use App\Models\Evenement;
use App\Utils\EmailHelpers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function index()
    {
        $evenements = Evenement::orderBy('dateEvenement', 'asc')->limit(3)->get();
        $avis = Avi::limit(5)->orderBy('date', 'desc')->get();
        $avgAvis = Avi::avg('note');
        $notes = array(Avi::where('note', 1)->count(), Avi::where('note', 2)->count(), Avi::where('note', 3)->count(), Avi::where('note', 4)->count(), Avi::where('note', 5)->count(), Avi::count());
        $comporters = Comporter::groupBy('idPlat')->selectRaw('idPlat, sum(nbCommander) as total')->orderBy('total', 'desc')->limit(8)->get();
        $plats = [];
        foreach ($comporters as $comporter) {
            array_push($plats, Plat::find($comporter->idPlat));
        }
        return view('index', ['avis' => $avis, 'avgAvis' => $avgAvis, 'notes' => $notes, 'plats' => $plats, 'evenements' => $evenements]);
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
            'boissons' => $boissons,
            'serveur'=> session('reservationServeur')
        ]);
    }

    public function reserver()
    {
        $tablesLibres = Table::whereNull('idReservation')->get();

        $tables = $tablesLibres->filter(function ($table) {
            return !$table->reservations()
                ->whereBetween('dateReservation', [Carbon::now(), Carbon::now()->addHours(2)])
                ->exists(); // Vérifie si une réservation existe dans les 2 prochaines heures
        });



        
        $clients = Client::with('personne')->get();
       

        return view('Commande.ReservationCommande', [
            'tables' => $tables,
            'clients' => $clients,
            'serveur'=> session('reservationServeur')
        ]);
    }

    public function ajoutReserverParServeur(Request $request)
    {
        // Création de la réservation
       $reservation = Reservation::create([
            'idPersonne' => $request->client_id,
            'idTable' => $request->table_id,
            'nbPersonnes' => $request->nombre_personnes,
            'dateMoment' => now(),
            'dateReservation' => now(),
            'uuid'=> Str::uuid(),
            'accompte' => 0,
        ]);
        

        $personne = Personne::find($reservation->idPersonne);

        $table = Table::find($request->table_id);
        $table->idReservation = $reservation->idReservation;
        $table->save();

        
        $request->session()->put('reservationServeur', $reservation->idReservation);
        EmailHelpers::sendEmail($personne->email, "Réservation MaisonMoël", "email.reserveremail", ['reservation' => $reservation, 'personne' => $personne]);

        return redirect()->route('Commande.PriseCommande');
    }


    public function commander(Request $request)
    {
       
        Commande::create([
            'idEtat' => 1,
            'idReservation' => session('reservationServeur'),
            'idPersonne' => session('serveur.idPersonne'),
            'dateCommande'=> now(),
        ]);
        
        $derniereCommande = Commande::latest('idCommande')->first();
        $idDeCommande = $derniereCommande->idCommande;
        

        // Récupérer les données de la commande
        $orderData = json_decode($request->input('orderData'), true);

        
        foreach ($orderData['items'] as $item) {

            $plat = Plat::find($item['idPlat']);
            $plat->decrement('quantite', $item['quantity']);
            
            
            Comporter::create([
                
                'idCommande' => $idDeCommande,
                'nbCommander' => $item['quantity'],
                'prix' => $item['price'],
                'idPlat' => $item['idPlat'],
            ]);
        }

        // Retourner une réponse ou rediriger vers une autre page
        return redirect()->route('Commande.ReservationCommande')->with('success', 'Votre commande a été envoyée avec succès !');
    }

    public function test() {
        $personne = Personne::find(3);
        $reservation = Reservation::find(3);
        EmailHelpers::sendEmail($personne->email, "Réservation MaisonMoël", "email.reserveremail", ['reservation' => $reservation, 'personne' => $personne]);
    }
}
