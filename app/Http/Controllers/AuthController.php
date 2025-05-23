<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Personne;
use App\Models\Serveur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        $Personne = Personne::where('email', $validated['email'])->first();  
        if ($Personne) {
            
            $client = Client::where('idPersonne', $Personne->idPersonne)->first();
            $serveur = Serveur::where('idPersonne', $Personne->idPersonne)->first(); 

            if ($client) {
                if (Hash::check($validated['password'], $Personne->password)) {
                    $Personne = $Personne->toArray();
                    $Personne += ['pointFidelite' => $client->pointFidelite];
                    $Personne += ['imageClient' => $client->imageClient];
                    session(['client' => $Personne]);
                    return redirect()->route('index');
                } else {
                    return redirect()->route('login')->with('error', 'Email ou mot de passe incorrect.');
                }
            } 
            elseif ($serveur){
                
                if (Hash::check($validated['password'], $Personne->password)) {
                    $Personne = $Personne->toArray();
                    session(['serveur' => $Personne]);
                    return redirect()->route('Commande.ReservationCommande');
                } else {
                    return redirect()->route('login')->with('error', 'Email ou mot de passe incorrect.');
                }   
            }
            else {
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
                'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/'],
                'password_confirmation' => 'required|same:password',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire.',
                'email' => 'Le champ :attribute doit être une adresse email valide.',
                'same' => 'Les mots de passe ne correspondent pas.',
                'regex' => 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.',
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

        if (Personne::where('email', $validated['email'])->first()) {
            return redirect()->route('register')->with('error', 'Email déjà utilisé.');
        }

        $personne = new Personne();
        $personne->nom = $validated['name'];
        $personne->prenom = $validated['prenom'];
        $personne->email = $validated['email'];
        $personne->dateNaiss = $validated['date_naissance'];
        $personne->password = Hash::make($validated['password']);
        $personne->token = Str::uuid();
        $personne->save();

        $client = new Client();
        $client->idPersonne = $personne->idPersonne;
        $client->pointFidelite = 0;
        $client->save();

        $personne = $personne->toArray();
        $personne += ['pointFidelite' => $client->pointFidelite];
        $personne += ['imageClient' => $client->imageClient];
        $request->session()->put('client', $personne);
        

        return redirect()->route('index')->with('success', 'Compte créé avec succès.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('client');
        $request->session()->forget('serveur');
        session()->forget('reservationServeur');
        return redirect()->route('index');
    }    
}
