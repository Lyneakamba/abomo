<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'nom'        => 'required|string|max:100',
            'entreprise' => 'nullable|string|max:100',
            'email'      => 'required|email|max:150',
            'telephone'  => 'nullable|string|max:30',
            'objet'      => 'required|string|max:200',
            'message'    => 'required|string|max:2000',
        ]);

        // 1. Sauvegarder en base
        $contact = ContactMessage::create($validated);

        // 2. Envoyer l'email de notification
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactMessageReceived($contact));
        } catch (\Exception $e) {
            Log::error('Échec envoi email contact : ' . $e->getMessage());
        }

        return redirect()->route('home')
            ->with('success', 'Votre message a bien été envoyé. Notre équipe vous contactera dans les plus brefs délais.')
            ->withFragment('contact');
    }
}
