<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    public function sendMessage(Request $request) { 
        $sid = env("TWILIO_SID"); 
        $token = env("TWILIO_AUTH_TOKEN"); 
        $twilio = new Client($sid, $token); 
        $message = "Hola. Quiero hacer una consulta. ¿Puede ayudarme?";
        $from = env("TWILIO_WHATSAPP_FROM"); 
        $to = env("TWILIO_WHATSAPP_TO"); 
        $twilio->messages->create($to, [ "from" => $from, "body" => $message ]); 
        return response()->json(['status' => 'Mensaje enviado']); 
    }
}
