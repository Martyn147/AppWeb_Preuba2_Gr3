<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     // metodo para mostrar el formulario
     public function index() {
        return view('pages.contact');
    }

    // metodo para procesar el formulario y enviarlo 
    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject'=>'required',
        ]);

        $email = new ContactoMailable($request->all());
        Mail::to('robertoch9514@hotmail.com')->send($email);

        return redirect()->route('home')->with('info','Mensaje enviado');
    }
}
