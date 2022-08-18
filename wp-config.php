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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'y&IgAIX97Lme^p%fD+L+r-5i_Xc-cto`:)02&;n33B[_^[MIAF[E?eRw>R.>4%Hw' );
define( 'SECURE_AUTH_KEY',  '5bO?sL(V+2E6cp@|)Nx7HF3,6Ql2lv==C.WX$Sk 2(+5bycb,J$R#0pU Wg.CXQi' );
define( 'LOGGED_IN_KEY',    '4fej7GyOtNCD/>u~r]7(Mg=Soxvhr<{+SQ;7jT/]~aScVax]X;*+sn$3pMe.ZQfw' );
define( 'NONCE_KEY',        'LU@iAaijG0&EL4>$c?58`.bb(55]^~9_!YaaUFhC)2*Jr75W#c/-%nC(o;tH;LJ)' );
define( 'AUTH_SALT',        'qy#(J^8<E#_j!&pm{>h4^Orn;KYk=Zk[E{qsp8Jm=mnAvxJ17mHsE$LO/kWD l1%' );
define( 'SECURE_AUTH_SALT', 'm$ =CZ|v *t@t0QzMqFmQpXiB2?>,& l^hwx.&aybvX9q[1>elW4R$}7HE_)=aPm' );
define( 'LOGGED_IN_SALT',   'wZ*0W9diI!7TSqW#ahN!pDh.dxDb~R-j%%SPOv)0j]N_LQ8~%#![12vJU5B9Y #R' );
define( 'NONCE_SALT',       '/bKx<,Y`LvD)at24^@)y)4<uIw<n^>UaIl=5q1;pp}Q;&Si##!h2/;y[#BOQ5sLZ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
