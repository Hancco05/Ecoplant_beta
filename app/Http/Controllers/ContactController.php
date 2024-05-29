<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Enviar el correo electrónico
        Mail::to('s.carmonawright@gmail.com')->send(new ContactFormMail(
            $request->name,
            $request->email,
            $request->message
        ));

        return redirect()->back()->with('success', 'Mensaje enviado con éxito.');
    }
}

