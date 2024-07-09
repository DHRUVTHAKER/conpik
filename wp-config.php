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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'w2SKD7Q1$ucQ%^)UrL[jsd{FO@#]6rlY?W|p].tzF,)>Y/uL&0*=1R!gz0l{+/Ib' );
define( 'SECURE_AUTH_KEY',   'j]&9(J|{Q=2yerQYxOq2?ijC&.Ec!+>ChxWeRf4qw4!Q%5x2-J10vc,e=(!?LTF}' );
define( 'LOGGED_IN_KEY',     'FU|I/-Ii75QiM,];kAx=[L)RNBk%ri)#NLS8vRUjIm;cpk@(jl}X A=UVm[>e/(l' );
define( 'NONCE_KEY',         'y/l9~6W|o}5bF(y,RSC?{Z]DA9x:=&VoZHyL;n@bkQ3F>*ToW9x~@C@U*weR[k%+' );
define( 'AUTH_SALT',         'vzhI9=mB_1$n6HIYAc!+ dX@ ?~rZ4BUU;MtQG(&f3K#6kw-N.PFZp[=aYA$* hN' );
define( 'SECURE_AUTH_SALT',  '<h`iY(m3~tX6W$3Ea*ZM^MR.{~v)e|J|o8fHq.o9U3SB]9<J[DE<h6Scp|r^1M`{' );
define( 'LOGGED_IN_SALT',    ',CrO2r/Y8ZKo+FgHv2+^*?$p@ C?ZNc0/O?rO)!%I5l+qq)tA.ypBoJPVAJRA.9i' );
define( 'NONCE_SALT',        '}1Xe2[AunSksD7y$3;i#Tc8&nS6}xOpC8/KW9xD#}6Z6TC0*#lS|sxm_[$~u>/@b' );
define( 'WP_CACHE_KEY_SALT', 'wBypCgehlJbqlQ%;>val@(&?rUd7x]R<.+9H|A4FqB DmLf}H8/CLyj4d6OXQ}&1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}
define('WP_MEMORY_LIMIT', '1024M');

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
