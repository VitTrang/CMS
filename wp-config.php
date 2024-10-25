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
define( 'AUTH_KEY',         'yL848rmKipii7TUGB@cgeevwKx]|Z}j<t.Xk3R}DqD[6s!x3++oi5ajI<Uz!ZXDG' );
define( 'SECURE_AUTH_KEY',  'R)XJhxdJIaK`dz9vSqKk}r)IJ>:&(tde.)+Y025/?6pHMTE,Ak9h``7eNE_pHG*e' );
define( 'LOGGED_IN_KEY',    'n=(sIsIJwBUJaXj+Ga@>Bl_uoo>QdXV=4QmMOwQx*r4|v?alk{_f^}vqIVv3K:FN' );
define( 'NONCE_KEY',        'Bioqzu-n!7)j6Kza3?*eavb)7|lDPef_QCV&xzbw(Hi,Hj:0g6-UN9bw{A2Gh~~$' );
define( 'AUTH_SALT',        'V4G_fmw)Ccr>&Xps4|^{-(sPzqp7NVuZczQ0WWgIh8!{]Zy78DO(+^p5!1h>5oX{' );
define( 'SECURE_AUTH_SALT', '#X(E=v>8`l^*Z/t(<W-l:|QzlQ(7=X#~R/j&`4$$k^aL7D0:C6v8}Ft=RrGbL==;' );
define( 'LOGGED_IN_SALT',   '9`,yjFh|,YRmVeB6WfX.[s>-e$C=8jbpu/)#~_!uxMened>NLpkwGt;kO,X+EjTu' );
define( 'NONCE_SALT',       '>)^@4vL}!s,9BOx1l_JJ}sm8u~lo(W+5@kUsHzz6xiocvEV{nZAeA)r*)[+>p]dh' );

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
