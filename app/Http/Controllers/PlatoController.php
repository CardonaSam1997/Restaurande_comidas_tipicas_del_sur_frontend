<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
   public function buscarPlatoMasVendido(Request $request)
{
    $platos = null;
    $error = null;

    if ($request->has(['anio', 'mes'])) {
        $anio = $request->input('anio');
        $mes = $request->input('mes');

        $url = "https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Consultas/plato-mas-vendido?anio=$anio&mes=$mes";

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $data = $response->json();

                // Verificamos que sea un array (colección de platos)
                if (is_array($data)) {
                    $plato = $data;
                } else {
                    $error = 'La respuesta de la API no es válida.';
                }
            } else {
                $error = 'Error al consultar la API.';
            }
        } catch (\Exception $e) {
            $error = 'Error de conexión: ' . $e->getMessage();
        }
    }

    return view('platoMasVendido', compact('plato', 'error'));
}

}
