<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PQRSMailable;
use Illuminate\Support\Facades\Mail;

class PQRSController extends Controller
{
    /**
     * Send the email.
     *
     * @return vista contact
     */
    public function send(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'terminosycondiciones' => 'required',
        ]);
        
        $correo = new PQRSMailable($request->all());
        Mail::to('casl_2003@yahoo.es')->send($correo);

        
        return redirect()->back()->with('success', 'PQRS recibido, Pronto uno de nuestros colaboradores se comunicara con usted');
        
    }
}
