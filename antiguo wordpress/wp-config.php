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
define('DB_NAME', 'curso_wordpress');

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
define('AUTH_KEY', 'IILQk$$%A-4EZ>H(:xV>WQPCKGE`eKh79G@*HdWDkq?Y8_&t$pH,H7 gQt@`mszD');
define('SECURE_AUTH_KEY', '1Tj&@S{e{+[P2M91P)%K;BQoI/S8X*F.A.;V7`cjw23SMcV.mR<pO^A?WX)vl3XN');
define('LOGGED_IN_KEY', 'mme[tV&CVn_})/+sv7`{=XJ(Hr#H0X/Y>J`0s~@:/~1|$b=NAuk7*C|.&Oh4ng}U');
define('NONCE_KEY', '9 !,ld4Ki!_.%j$Yh ~%PC<y_v4i$SvHG@o8^Ng}[7x91osI-URY9Me]K-zX6$VS');
define('AUTH_SALT', '4OfdC^XS~KP`e6$Z63@+IqLID$.u(=oUs^|SS <A=g61r&>FsDMvcq]S/{g^+{w`');
define('SECURE_AUTH_SALT', 'j/5W!*@5VS.?FWC-JNp8||l(%(d{<YZ:u?]eF/X Y>OBgJXD1.lTpyqJx{{)M^Ej');
define('LOGGED_IN_SALT', '{xk^]L?T0U!@AJVJJk]Fae]-lv8nQUFO%AF 5w.z]2dQ3!Ru~NKNxqpVy: p/9Rp');
define('NONCE_SALT', 'i}c,5}-x![??5IAe8y{-LL%A(y{=Mas ucO5p7U/eT!L`!z:T-K=V/,Azp#.4u,9');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'aarsgfaksnrvkadrsupv';


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

