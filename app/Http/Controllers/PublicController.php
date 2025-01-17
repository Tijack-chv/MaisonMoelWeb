<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avi;
use App\Models\Plat;

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

}
