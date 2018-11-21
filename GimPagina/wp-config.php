<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bd_pagim');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3gcfFY)Wu:zTWh7O _c@bro_Qg4ae=!^@-(Sd!S1A$1&GtXtj]+r]S4V:3Q0tPNI');
define('SECURE_AUTH_KEY', '0ePy-Di*e,_%}I/+nQ(&6Zxz?B?iD%8|g3q*N$h1KZtvJ#B-%QDgxnO$=Ri,-HUZ');
define('LOGGED_IN_KEY', 'UzpShgUGHglQ)Yp81>.zXZ:Gj`w5-RL_3TK#Xekgz.5DdFXjPqUV>[,Zn.{?=TRD');
define('NONCE_KEY', 'VgqeHn%cIfj!Vo.H*.TtapA}N;9t98iqSuf5bTX]PCXV9xa@#<)^F%^UjN*2Qij(');
define('AUTH_SALT', 'cV(:2n-.v~@XS~zv9@?FqZne_kfZ>ngAgJF%^:E&qbSFcD#uC!@WJ,%9R5U8zi%<');
define('SECURE_AUTH_SALT', 'c#wqBb3I0^3sw:;{a}GmpL#j2$%!I$41G3yC>x}~9PVw9a{*/bhN1xq*?ZTq=,A`');
define('LOGGED_IN_SALT', '|#5tAQU._9$N KK1`XGQ.)PZ*#T`+<4Bw2}K(:+!W@/o4D/xVwy%Tn?9ZjKJH*tX');
define('NONCE_SALT', '<8/~egF4A$V3zSniOaXuZ)Xelb!$aJ&wBp= hkndff{+R 1KpWs2%-#7zQ[_ ak7');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



// Inactivar los informes de errores de WordPress
error_reporting(0);