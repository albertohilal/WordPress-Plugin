<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$*Ep,wgs:.=8cxS6nN[&f|m*N7XEzH~ocg`i4!!4stdoEtEcEhr&$PZ~N?[hE)w,' );
define( 'SECURE_AUTH_KEY',  'p[D$$);7h,6?4%Rt8dbj%sC!z*YEU7T k!>l&G{0F0?5Pfv;%zOlSrY|H1jTd7KF' );
define( 'LOGGED_IN_KEY',    'ioN5}.bUL;mQt{>^d)p9V0E*mr+YM{[bH#=J=Zh,I%I<KV1%d=aGre1Prs4C0}D#' );
define( 'NONCE_KEY',        'cD9@mYumPD=caG&V0;]gk:#d4#i#P& aLQn9NLM,xejr{D)}?*gP5[t~1~7E.F+ ' );
define( 'AUTH_SALT',        'L4.}DS5A@!cONp)d7yc.GIJ,xb9Kj.w~u#AfE5w%MRd~T5#6;WV-SCS/zZ61-1ng' );
define( 'SECURE_AUTH_SALT', 'w9~!-xcZ(BxH).i*,+)l^b=-7bswKwGqws#wEI&z$)^a7H~F{XnSTm?HiAgv*M1n' );
define( 'LOGGED_IN_SALT',   'Na:zsw#V<Mp5KkvWRv(GyC?VX+eB))r.JLKu=rOmwd8q%#y+W9M3J))6)0W;<h;G' );
define( 'NONCE_SALT',       'U}xD*AGN*>`Q0:kxj7I%isDlX.=6:y-Q(SLG0jnR)d1_LzC&{G3$v6xT@#~C4!<!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
