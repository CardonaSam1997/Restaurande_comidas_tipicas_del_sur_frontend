<?php

use App\Http\Controllers\MeseroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\FacturaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
});

Route::get('/meseros', [MeseroController::class, 'obtenerMeseros']);

Route::get('/clientes/consumo', [ClienteController::class, 'buscarPorConsumo'])->name('clientes.consumo');
Route::get('/plato/mas-vendido', [PlatoController::class, 'buscarPlatoMasVendido'])->name('plato.masvendido');


Route::view('/factura', 'registrarFactura');
Route::post('/enviar-factura', [FacturaController::class, 'enviarFactura'])->name('factura.enviar');





#comercial-sede-florida

/*
ESTOS PUNTOS DE MARCACION REALMENTE TIENEN LATITUD Y ONGITUD, EL RESTO NO
Gabinete de manguera costado Este, mezzanine ascensor sentido Norte, el uncio punto que tiene geolocalizacion
Gabinete de manguera costado Oeste sótano 1, sentido Sur.
Gabinete de manguera costado Oeste Mezzanine, ascensor sentido Norte
Gabinete de manguera costado Este, mezzanine ascensor sentido Norte*/