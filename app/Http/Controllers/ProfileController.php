<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use App\Models\Client;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index', ['user' => session('client')]);
    }

    public function edit(Request $request) 
    {
        $validated = $request->validate(
            [
                'name' => 'required|string',
                'prenom' => 'required|string',
                'email' => 'required|email',
                'date_naissance' => 'required|date|before:' . now()->subYears(18)->toDateString().'|after:1900-01-01',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'email' => 'Le champ :attribute doit être une adresse email valide.',
                'date' => 'Le champ :attribute doit être une date valide.',
                'before' => 'L\'utilisatuer doit être majeur.',
                'string' => 'Le champ :attribute doit être une chaine de caractères.',
                'after' => 'La date de naissance doit être après 1900.',
            ],
            [
                'name' => 'nom',
                'prenom' => 'prenom',
                'email' => 'email',
                'date_naissance' => 'date de naissance',
            ]
        );


        $personne = Personne::where('idPersonne', session('client')['idPersonne'])->first();
        $personne->nom = $validated['name'];
        $personne->prenom = $validated['prenom'];
        $personne->email = $validated['email'];
        $personne->dateNaiss = $validated['date_naissance'];
        $personne->save();

        $client = Client::where('idPersonne', $personne->idPersonne)->first();
        
        $personne = $personne->toArray();
        $personne += ['pointFidelite' => $client->pointFidelite];
        $personne += ['imageClient' => $client->imageClient];
        $request->session()->put('client', $personne);
        
        return redirect()->route('profile.index')->with('success', 'Profil modifié avec succès.');
    }

    public function edit_password(Request $request) 
    {
        $validated = $request->validate(
            [
                'current_password' => 'required|string',
                'new_password' => ['required', 'string', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/'],
                'new_password_confirmation' => 'required|same:new_password',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'string' => 'Le champ :attribute doit être une chaine de caractères.',
                'regex' => 'Le champ :attribute doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.',
                'same' => 'Les champs :attribute et :other doivent être identiques.',
            ],
            [
                'current_password' => 'mot de passe actuel',
                'new_password' => 'nouveau mot de passe',
                'new_password_confirmation' => 'confirmation du nouveau mot de passe',
            ]
        );
        $personne = Personne::where('idPersonne', session('client')['idPersonne'])->first();
        if (!Hash::check($validated['current_password'], $personne->password)) {
            return redirect()->route('profile.index')->with('error', 'Mot de passe actuel incorrect.');
        }

        $personne->password = Hash::make($validated['new_password']);
        $personne->save();

        $client = Client::where('idPersonne', $personne->idPersonne)->first();
        
        $personne = $personne->toArray();
        $personne += ['pointFidelite' => $client->pointFidelite];
        $personne += ['imageClient' => $client->imageClient];
        $request->session()->put('client', $personne);
        
        return redirect()->route('profile.index')->with('success', 'Profil modifié avec succès.');
    }

    public function edit_avatar(Request $request) {
        if (!in_array($request->input('avatar'),['defautProfil.png','hommeProfil.png','femmeProfil.png'])) {
            return redirect()->route('profile.index')->with('error', 'Avatar invalide.');
        }

        $client = Client::where('idPersonne', session('client')['idPersonne'])->first();
        $client->imageClient = $request->input('avatar');
        $client->save();

        $personne = Personne::where('idPersonne', session('client')['idPersonne'])->first();

        $personne = $personne->toArray();
        $personne += ['pointFidelite' => $client->pointFidelite];
        $personne += ['imageClient' => $client->imageClient];
        $request->session()->put('client', $personne);

        return redirect()->route('profile.index')->with('success', 'Avatar modifié avec succès.');
    }

    public function rating(Request $request) {
        $validated = $request->validate(
            [
                'note' => 'required|integer|between:1,5',
                'titre' => 'required|string',
                'commentaire' => 'nullable|string',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'integer' => 'Le champ :attribute doit être un entier.',
                'between' => 'Le champ :attribute doit être compris entre :min et :max.',
                'string' => 'Le champ :attribute doit être une chaine de caractères.',
            ],
            [
                'note' => 'note',
                'titre' => 'titre',
                'commentaire' => 'commentaire',
            ]
        );

        $avis = new Avi();
        $avis->idPersonne = session('client')['idPersonne'];
        $avis->note = $validated['note'];
        $avis->description = $validated['commentaire'];
        $avis->titre = $validated['titre'];
        $avis->date = now();
        $avis->save();

        return redirect('/');
    }
}
