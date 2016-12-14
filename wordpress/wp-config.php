<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F*ujRs+P$Z>LU)kU0ieL|k@2V(yHEon~6V]GAC}8qkXnNsk#*]YSIK3<E&CG@eM]');
define('SECURE_AUTH_KEY',  'P+JRwgk1XUWd2 }}Rl+;6GLcDTFDj-Q,B$ Y$ARtwak#@MM[(`AdPi9qbxnr&tPz');
define('LOGGED_IN_KEY',    ']G3LuVb.F0r+Lu3e|=O^7~WFcp70m%!RW($VdKHKS`=)k,M+^Z5%(ae:#)zfur2*');
define('NONCE_KEY',        '1y1G}b6qATev&t:iit3T7#pB^Q-;yv3,v5I{0b(03MG;y%5By%5ADPSa$Gl*{^$[');
define('AUTH_SALT',        'hbzhMMvd3.!bl{6jQ+KPh@Y{d*Gd&U40WLL|~20<;w!4R$_R/~8t@n|[d-hv`%4a');
define('SECURE_AUTH_SALT', 'L*g66%_4tlD?Ta88|DhtG]SZ] fZE/M(C4xP0ybY~~scd.i%fp9&D2Ra?M_+qXs*');
define('LOGGED_IN_SALT',   'Sf7E}lKgE%4IB EO1k,WXN)f2QPf{r*W;91y^4W?to2eeD9-Om>QtIJ%gJ<UQaY>');
define('NONCE_SALT',       'xUJ@+Zs )u(ZJ]`(5`|o,z@jj11=y~QfV4F7feg 1vOUT[_A2rjYom=m?|l$c:[r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'has8e5th4d6sd4tbds8';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
