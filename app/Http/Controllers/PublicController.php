<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avi;

class PublicController extends Controller
{
    public function index()
    {
        $avis = Avi::limit(5)->orderBy('note', 'desc')->get();
        $avgAvis = Avi::avg('note');
        $notes = array(Avi::where('note', 1)->count(), Avi::where('note', 2)->count(), Avi::where('note', 3)->count(), Avi::where('note', 4)->count(), Avi::where('note', 5)->count(), Avi::count());
        return view('index', ['avis' => $avis, 'avgAvis' => $avgAvis, 'notes' => $notes]);
    }
}
