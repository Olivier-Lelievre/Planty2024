<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vlm+l/z12qk6%^``A?+G:Nn<=n9$h>^sdI1GZxHqsH)W/!u]9|;MM+/le5i)#6Ha' );
define( 'SECURE_AUTH_KEY',  'Ry/tM!M53d0&4Jdl1sl%l,B1Pu9~lnofwmVQ2MY%r~|Ym9c;l9[.bt-B(PYhArz[' );
define( 'LOGGED_IN_KEY',    '1 2mjuof5~$P>^vZf7qy/ynD&.j=Z%YT}7DO_[{u&Fd&<aOgkJyLNxjQ[?`0AXHH' );
define( 'NONCE_KEY',        'e6;Eio(*L*?NL:`_-0<<YL$K4zjs8}Mr +bB)s+0{|W}_P9#>M=YU;shRFAYz?3n' );
define( 'AUTH_SALT',        'TKPdIfyJ2I|33zQ|M*?odvr2g98Je?4(Tuf_DjBP7=ZV+m%(!GkSXL[K%G7S% ?9' );
define( 'SECURE_AUTH_SALT', 'Y#yXPc_EAy.vUt9VfewZ:3vSSY{qsmx|L-~1$qR09MD1s18f<S.I,w<a?-3CKeTz' );
define( 'LOGGED_IN_SALT',   '_HD7XHs>$*sIkCvKl_93#|W:4N?.qH?g:062P3~|1+Au!DEa$CEim;M~tdPZ03MO' );
define( 'NONCE_SALT',       'V5q!D#=X9g9tJ)$#q^8v`&IjE4XggCix;D-nmlyo`fe5M6csQ$)Uzyt}E?;knZT{' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
