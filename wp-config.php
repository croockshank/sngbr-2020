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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_atasec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q~Q/TeS0`lt.} RHMw_XLsq/aT7Jz{is/LQ@k]$URDY&PK>K | hd$z%c%I[v[K[' );
define( 'SECURE_AUTH_KEY',  ':(8{V%6KdNifuu=`o4D#hjZ$ ?9B3pINi?VNnp)gGC;a*A3SY_%1bVXpHe]U_XZ3' );
define( 'LOGGED_IN_KEY',    '<+YD%oP9y+gGJ{+~0X;+{F&&O>?UI93DERM5%2u})k6mY|FYxb.#@juI)FkQJZ@ ' );
define( 'NONCE_KEY',        'Kp?Tl3k<ZEm.@SID0p3S1c(1@{#i(vTkEHTTJjyqHClr:WOZ51nr91qR@etlXJKX' );
define( 'AUTH_SALT',        'UL*,/LYxA<1h]c:]X>5s^@aOSy4IQ;x;X~*D>cW2b^B`u)OA(@5BlP7w.0n2m]z,' );
define( 'SECURE_AUTH_SALT', 'Yfy*GaRmK3C7G ,75mI*YBg9|R,M)a-iXtz_-cCVqw4![9WDy$-Cv,xSb;OBckle' );
define( 'LOGGED_IN_SALT',   '*1$Q/VlsEPQtg^[yB>n:ne7/M6Yfk.v*P1M5f@Mwq8P.(uLCZYL;i572QwWQdHU-' );
define( 'NONCE_SALT',       '-df>dA5,,${qvr,=:Ivq@w2eV6@nu26No E|lB;g4Ije6ow5OyO] )cZ%Jza/.N@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
