<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClienteController extends Controller
{
     public function buscarPorConsumo(Request $request)
    {
        $clientes = null;
        $error = null;

        if ($request->has('valor')) {
            $valor = $request->input('valor');

            $url = "https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Consultas/clientes-por-consumo?valor=$valor";

            try {
                $response = Http::get($url);

                if ($response->successful()) {
                    $clientes = $response->json();
                } else {
                    $error = 'Error al consultar la API.';
                }
            } catch (\Exception $e) {
                $error = 'Error de conexión: ' . $e->getMessage();
            }
        }

        return view('clienteConsumo', compact('clientes', 'error'));
    }
}
