<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'nom'       => 'required|string|max:100',
            'entreprise'=> 'nullable|string|max:100',
            'email'     => 'required|email|max:150',
            'telephone' => 'nullable|string|max:30',
            'objet'     => 'required|string|max:200',
            'message'   => 'required|string|max:2000',
        ]);

        // TODO: envoyer un email via Mail::to(...)
        // Pour l'instant, on simule le succès

        return redirect()->route('home')->with('success', 'Votre message a bien été envoyé. Notre équipe vous contactera dans les plus brefs délais.');
    }
}
