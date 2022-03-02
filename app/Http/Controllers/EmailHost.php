<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageSend;
use Illuminate\Support\Facades\Mail;

class EmailHost extends Controller
{
    function EnviarEmail(Request $request)
    {
        $array_params = [];
        $array_params = $request->get('contacto');
        Mail::to('contacto2@drricardovazquezrea.com')->send(new MessageSend($array_params));
        $mensaje["mensaje"]["TipoMensaje"] = "success";
        $mensaje["mensaje"]["Mensaje"] = "Se ha enviado correctamente el mensaje, espere ha que nos contactemos con usted";
        return json_encode($mensaje);
    }
}