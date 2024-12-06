<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Personne;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('auth.login');
    }

    public function login_verif(Request $request) {
        $validated = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'email' => 'Le champ :attribute doit être une adresse email valide.',
            ],
            [
                'email' => 'email',
                'password' => 'mot de passe',
            ]

        );

        $client = Personne::where('email', $validated['email'])->first();
        $clients = Client::all();    
        if ($client && $clients->contains('idPersonne', $client->idPersonne)) {
            if (Hash::check($validated['password'], $client->password)) {
                session(['client' => $client]);
                return redirect()->route('index');
            } else {
                return redirect()->route('login')->with('error', 'Email ou mot de passe incorrect.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email ou mot de passe incorrect.');
        }
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string',
                'prenom' => 'required|string',
                'email' => 'required|email',
                'date_naissance' => 'required|date',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'email' => 'Le champ :attribute doit être une adresse email valide.',
                'same' => 'Les mots de passe ne correspondent pas.',
            ],
            [
                'name' => 'nom',
                'prenom' => 'prenom',
                'email' => 'email',
                'date_naissance' => 'date de naissance',
                'password' => 'mot de passe',
                'password_confirmation' => 'confirmation du mot de passe',
            ]
        );

        $personne = new Personne();
        $personne->nom = $validated['name'];
        $personne->prenom = $validated['prenom'];
        $personne->email = $validated['email'];
        $personne->dateNaiss = $validated['date_naissance'];
        $personne->password = Hash::make($validated['password']);
        $personne->save();

        $client = new Client();
        $client->idPersonne = $personne->idPersonne;
        $client->pointFidelite = 0;
        $client->save();
        $request->session()->put('client', $client);

        return redirect()->route('login')->with('success', 'Compte créé avec succès.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('client');
        return redirect()->route('index');
    }
}
