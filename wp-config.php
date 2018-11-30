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
define('DB_NAME', 'teslanor2');

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
define('AUTH_KEY', 'MO)rd@Vs.Gv u)^u1E+6J[bDuuXR4`_`4E8vP<s-zVu>=D&Q]H{yU8$@f7fs1A69');
define('SECURE_AUTH_KEY', 'NotEPjxO^+VWWKk~--H2/U(]6/o!o{M{i$1/NCU8n];{WHB.c*nM{k/jtNEikxem');
define('LOGGED_IN_KEY', 'p.,PcVW|FLi+x!{jaESL{:8|+KAzRn:62zLG8<f1Pw8A)@[I8F8!i3:w8X>lpgZR');
define('NONCE_KEY', 'aRaI{JY5+7M~Oi>oBs^&vpj7 hH6^gJuJnIY=@u7,F-A09WH/tXd8YHx /x$S&oi');
define('AUTH_SALT', 'sA$U`_~gJ$K-*j&uCq%>4&a}k<(<)C[z|qxM|aas}`kv7}{iX[Rq0q~uL 4ly|LU');
define('SECURE_AUTH_SALT', 'Q]P2KEWn]T`!kjt$BB0gH6cGrDF5l$jmQSKd4ea;F|7BHVNV)V-*cjnIsUP&=sqX');
define('LOGGED_IN_SALT', 'IRYOgNl]A|W}q`c[4jvrTt2QrB))FueDtl1PGTmjGhQ,VO@PM+U| *UC.Yi$owY!');
define('NONCE_SALT', 'CL c<DQDUEVAh^3;<=^D5`;%{BLPe}f%U0a+r~=dE3?xe6oYKh@wjl5sb#,kKFCr');

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

