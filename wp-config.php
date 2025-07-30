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
define( 'DB_NAME', 'polyshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'YourNewPassword' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'x0r]{N}2Ok(;isVGVf?^|Z/$}ezq<+CMI5_rDvkQPS2OpX^EOeF]E=)I+am628!<' );
define( 'SECURE_AUTH_KEY',  'QURCJlca68+e}vm~%Jk6ED! ~pv#:lf<uA+B^AiO2H?rPU#{KdupC/1IZgek48<g' );
define( 'LOGGED_IN_KEY',    ']CCjN|&=<=u-jzi!e$u9G]Ja)2d>0AWI6/}ae=m?uf{N<T%O80>kKN&cdE)HL2W3' );
define( 'NONCE_KEY',        ',o*4s-^ah8V|#aQ1fe6pV)LxlHi&x.|GB^>P31K/as}79f%Q[@Y[cA.y6Qc6Ua&j' );
define( 'AUTH_SALT',        '!mB.&nx])1*ehiu(NFC{Q Ow&i#Wr&29f}HB3-%s5)h8).DL`M321AA3%da|8R.(' );
define( 'SECURE_AUTH_SALT', '2QPn%JvYWd+i<zqQ0 BBQgq$]Xx~$)BO{kJJJt2IS0`^B^/(#f)04, rfj`*X5q}' );
define( 'LOGGED_IN_SALT',   'jUieRZO] $bA{P,<gNW!P[;)W5M@|$><&%|^U9hYlAM0BP1&fz.P,7u8+i5f40qF' );
define( 'NONCE_SALT',       'B+}lIP[07CI*wU>Zm5J5}R+jxs%nr6=2dkx`+Cko{)/d[ThvYzok!/.4Y6DK>A5j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
