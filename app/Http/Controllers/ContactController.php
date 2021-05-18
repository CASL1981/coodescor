<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Send the email.
     *
     * @return view contact
     */
    public function send(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        $correo = new ContactMailable($request->all());
        Mail::to('casl_2003@yahoo.es')->send($correo);

        
        return redirect()->back()->with('success', 'Mensaje Enviado, Pronto uno de nuestros colaboradores se comunicara con usted');
        
    }
}
