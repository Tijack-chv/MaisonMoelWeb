<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

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

        $client = Client::where('EMAIL', $validated['email'])->first();
        if ($client) {
            if (Hash::check($validated['password'], $client->PASSWORD)) {
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

}
