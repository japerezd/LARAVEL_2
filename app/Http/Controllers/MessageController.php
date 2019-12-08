<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    //

    public function store(){
        //metodo validate nos regresa automaticamente a la pagina del formulario
         

        //Enviando el email
        Mail::to("jorge_alberto1997@hotmail.com")->send(new MessageReceived); //MessageReceived fue creado por nosotros (ubicada en app/Mail)
        
        //return "Mensaje enviado";
       // return back nos redirecciona a la ultima peticion que hicimos (en el caso nuestro el formulario)

       //Guardando mensaje flash (esto lo envia contact.blade)
       return back()->with("status","Recibimos tu mensaje, te responderemos en menos de 24 horas.");
    }
}
