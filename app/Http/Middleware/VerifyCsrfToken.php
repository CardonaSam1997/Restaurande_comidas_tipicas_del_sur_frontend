<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'enviar-factura',
        'public/enviar-factura', // por si accedes por /public
        '*enviar-factura',       // opción más flexible

    ];
}

?>