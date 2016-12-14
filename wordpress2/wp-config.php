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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         '[u*r,}WkT0LL)7<{<b5:$34l@`;S@(_wrt/:;afo];#A@W$K,@b,NIXs3ChZUi6)');
define('SECURE_AUTH_KEY',  '-MjFvw||-NU/UPS6$KyI)O}f4L+s=$P_btP9N]kc:Lf1f1]f`lzzw1tvAUg~;dIi');
define('LOGGED_IN_KEY',    'u,y$<.74,51:6A&>/QC@lflod~UqI(%Z%d5n{)+g0Zoy`2wshFg7t]-]f,.mIx>o');
define('NONCE_KEY',        '6NtC^V0`Pt{G-}g9/HNuraF(C4A{$>t<b62{J7_R[z&tDje|3^d (j3._T]R.qmK');
define('AUTH_SALT',        '@v<OUw[gLEZD>}nYFR()seO4}$-FlPRL[=kD7=WcatesxBo@8xZFkCF1unZ;BArw');
define('SECURE_AUTH_SALT', 'Kuo=ecuy2-r>!-!m+PA+{o$O=]s}Wv_h~&Dkr~j+@0zD~Wz|tRC)%b8%t1POM/bW');
define('LOGGED_IN_SALT',   '9:S3:<dL,$*>!kM!2k{;^!5Gk$lf6iLf_b*3Utf1h75iY#+I%sy:7[~Hfzd-;` r');
define('NONCE_SALT',       'FV0^pPZ,A5E[aRTvCk2#a9c7t_Gc.4/xlSH9GkQbk&f+P>ISZ$$T4dA|IP@<Dn>b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adf6h46sd8a4h86f';

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
