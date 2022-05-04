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


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "wordpress");

/** MySQL database username */
define( 'DB_USER', "bditte");

/** MySQL database password */
define( 'DB_PASSWORD', "bditte_password");

/** MySQL hostname */
define( 'DB_HOST', "mariadb");

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'zaagD|_b7~xq2fF}>gK(?7l!)d<`q?*?uj0w#Pl$NE$<V{%G@GDUroiopeArwW++');
define('SECURE_AUTH_KEY',  '~tL#E,0^tx>**&^R>XeHsxIPZ_kiYc@:YM}wbO*FR&>$76|.KRG8Je/mTG+z7}~V');
define('LOGGED_IN_KEY',    'u+kE;|w6LB&T--Wbf8U }>|X1|V^8}c-I2i?+^vY fcKkH.[MT%Iy/h~b=Xj*@8G');
define('NONCE_KEY',        'PNXKR};+0dvIPh;1|Z; ]U3;E!F@b4A&}hF)n0XDt$#A-;`LB_7G(f%`?T`GFz(0');
define('AUTH_SALT',        '+N#g0`x!L6@l{fGckAUwrxt{(#4N5C6SQNEkn}/NzG(t[^+VOwV+a#!ofp$?3&nM');
define('SECURE_AUTH_SALT', '^1Ms>3Dg26_;YZ]mGp-Il,OiQ.6N.z@B|NC81r1<Q7x2+#yk-%vvT2X/^fMK.8~A');
define('LOGGED_IN_SALT',   'BW +-86P$.5,H7!.SMjcN&+ d@dA*_TY^WDyG{:RHpG4Sz/uB54p|P889g]7_I4n');
define('NONCE_SALT',       ')+8cW?MU|#H&-py@K4#N jIp@.~O|cr=eCh1Mx#-T!K(jObiah`.YX@:eU:lG[I+');
		
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';