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
define( 'AUTH_KEY',         '43 *.@gMMaTHMcr?#9~66gCA5#48:|_R0 Ldzw]{}fYS l5B$l|Dyg,/$rd{-s{#' );
define( 'SECURE_AUTH_KEY',  'AcaJyGb~P[8FC0Y2CL*/>MP=M8Yrs|,l=/=*R_Q1R)vo8%UB3L^Kplx`0dcxTpnD' );
define( 'LOGGED_IN_KEY',    ':oT~^RSuMx}4Q)%T/#uEPc5gh<Y66L >pL.f+lm${V#=Gwep@b~)=%x9LqOm~9I]' );
define( 'NONCE_KEY',        ':mY,9x1l-ZVZ|qgFP)we&W<Jw&sB45]q~U=C;Jy[}}V[vRj;2(={X`Gyoy_xGW;9' );
define( 'AUTH_SALT',        'Y(|x4|^e%rmkVKUR5?mk}-Oa]>$n}K5V2X@W^_xI2CQD(y1FtrBH2or)^&5MZsC(' );
define( 'SECURE_AUTH_SALT', 'enTdvy;.@9 ^[^fss{?5 !,pyX hS,mfM 9=ZbZH+9poY]9vCy,Llh%E%(7oNX2/' );
define( 'LOGGED_IN_SALT',   'Y8>+.|sKL;VUjv,d`!O)|=B51TZX.ni #8+hzHD<m?#yzH9!$]FQASiUG6 a!z* ' );
define( 'NONCE_SALT',       'Esp9yhW_$YC HUFHw[ (I;N{v|B.rw/de;qoKsTSq|^oRzuHAMqbR|d _yoToq.j' );

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
