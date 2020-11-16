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
define( 'DB_NAME', 'db_sngbr' );

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
define( 'AUTH_KEY',         'C;[Ngq=Q-q) `p0$bm!t$so{-)j2*s~w}Rt74fJ?LJ).oH8,B@6SIV9nh.80kUC>' );
define( 'SECURE_AUTH_KEY',  '[|uhD!FRsfI:7YNL}; #+zG-ObNZu5aVNcuuB7O@Pl1l0Ko<9AKKn=5HKAjI8@h9' );
define( 'LOGGED_IN_KEY',    'ff*!{O}|U2YWe5o5m>PZ~aWQ:IgRF*LL,X5v|cO!F$b38D`f?GPwlFtIO^?K1s20' );
define( 'NONCE_KEY',        'Z;aE.OT{O||T<ee23co#KowL!>g%+;:vkY dCYHrY!r- hfA=_tKQ1`Q,cJ7]g0I' );
define( 'AUTH_SALT',        ']wo9W@p9[xWe0kc@>#oHe>7g<G]^v<!QUaW|GQ ;/JM+{(w/}c[~Mw[Fo#7el)5L' );
define( 'SECURE_AUTH_SALT', 'SfT=jfi)ur..@:v(@6^KsP@wN6<CzZ]GWNX>^-r*Q0vZ(49RR0^D)_RP:Vtk#_T3' );
define( 'LOGGED_IN_SALT',   'X1dIG:sO@5BW-SLK:<N!y/#9V/SkS^/:s?wX1I@Oxn+GM-dkb5=B-5!+,kET`MWO' );
define( 'NONCE_SALT',       'h?P1Ws2Mv^|:bui-1V?gLEC`}!!;+%;pc;<bQ8K5l%4Z|F6~m[i1@@-J>d0.SC=6' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
