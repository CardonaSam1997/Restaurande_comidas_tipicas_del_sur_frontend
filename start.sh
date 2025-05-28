#!/bin/bash

# Iniciar PHP-FPM en segundo plano
php-fpm &

# Iniciar NGINX en primer plano
nginx -g "daemon off;"