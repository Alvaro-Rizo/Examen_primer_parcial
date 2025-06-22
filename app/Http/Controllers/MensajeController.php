<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class MensajeController extends Controller
{
    public function mensajePersonalizado($nombre)
    {
        return view('mensajes/mensajePersonalizado', ['nombre' => $nombre]);
    }
   public function mensajeHora() 
{
    $hora = (int) Carbon::now()->format('H'); 

    if ($hora >= 6 && $hora <= 12) {
        $mensaje = 'Buenos días';
    } elseif ($hora >= 13 && $hora <= 18) {
        $mensaje = 'Buenas tardes';
    } elseif ($hora >= 19 || $hora <= 5){
        $mensaje = 'Buenas noches';
    } else {
        $mensaje = "hora no detectada gabommmm".$hora;
    }
    return view('mensajes/mensajeHora', ['mensaje' => $mensaje]);
}
    public function saludoRepetido($veces)
    {
        return view('mensajes/saludoRepetido', ['veces' => $veces]);
    }
}
