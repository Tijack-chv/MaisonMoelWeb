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

use App\Utils\EmailHelpers;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class FacturationController extends Controller
{
    public function facturer()
    {
        $commandeAPayer = Commande::where('est_payer', 0)->with(['reservation.client.personne', 'reservation.table', 'comporters.plat'])->get();
        

        return view('Facturation.Facturer',  ['commandeAPayer' => $commandeAPayer]);
    
    }

    public function payerfacture(Request $request)
    {
        $id = $request->commande_id;
        $commande = Commande::find($id);

        $commande->update(['est_payer' => 1]);
        $reservation = $commande->reservation;
    
        if ($reservation) {
    
            Table::where('idReservation', $reservation->idReservation)
                ->update(['idReservation' => NULL]);
        }

        return redirect()->route('Commande.ReservationCommande')->with('success', 'Facture payée avec succès.');
    }
    
}
