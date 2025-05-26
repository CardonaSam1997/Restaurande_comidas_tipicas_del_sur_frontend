<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FacturaController extends Controller
{
    public function enviarFactura(Request $request)
    {
        $data = [
            "cliente" => [
                "identificacion" => $request->cliente_identificacion,
                "nombres" => $request->cliente_nombres,
                "apellidos" => $request->cliente_apellidos,
                "direccion" => $request->cliente_direccion,
                "telefono" => $request->cliente_telefono
            ],
            "mesero" => [
                "idMesero" => $request->mesero_id,
                "nombres" => $request->mesero_nombres
            ],
            "mesa" => [
                "nroMesa" => $request->mesa_numero,
                "nombre" => $request->mesa_nombre
            ],
            "platos" => $request->platos
        ];

        $response = Http::post('https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Factura/crear', $data);

        return response()->json([
            'mensaje' => 'Factura enviada',
            'respuesta_api' => $response->json()
        ]);
    }
}
