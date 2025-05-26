<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MeseroController extends Controller
{

  
   public function obtenerMeseros()
{
    $response = Http::get('https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Consultas/ventas-meseros');

    if ($response->successful()) {
        $meseros = $response->json(); 
       # return $meseros;
       return view('vendidoPorMeseros', compact('meseros')); 
    }

    return view('vendidoPorMeseros')->with('error', 'No se pudo obtener la información');
}

}
