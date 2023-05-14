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
define( 'DB_NAME', 'RLNHJkzkpBGhsD' );

/** Database username */
define( 'DB_USER', 'RLNHJkzkpBGhsD' );

/** Database password */
define( 'DB_PASSWORD', 'nCovQuqvthCiq6' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '~>;T86Le`K6oxTLu*zcp<n;Xg&1 t31d_!,|vX4BoI[o|o:ynZ.NfQl9K&bo#Gt2' );
define( 'SECURE_AUTH_KEY',   '#Q}NNAxOy)^$-c]p~Z1 oS])r=6Y^A/U?3xhh[hTO5QY{{JB[=Bf:l(/{n~TWnuP' );
define( 'LOGGED_IN_KEY',     'yP{inN{`XR:PvLT}.O&QJ8rBkntfxcM=2hQ4FO.l7(B4qG~bH4xS cg(@]$A0xbz' );
define( 'NONCE_KEY',         'W=(QQ1N]BMbPte]_1*:e1b8k _f]P0(DDrm-jkT,JO%qMen+:d-hot|[q[h|v{vh' );
define( 'AUTH_SALT',         '2f>OMf$Gzq!f=OD;HGg6F)GCAABwC<+,)pPg5e0H4f)rn@3ovx<KR/]U~57|/sJ3' );
define( 'SECURE_AUTH_SALT',  'EwhS.5/#mFn<|PBORI,=Q:48)HQ@R8|fm6_n0~P6yFG0x6FG(Dj:nV#[QG=x:RW2' );
define( 'LOGGED_IN_SALT',    'VW3kd0aJo}rh:z~g&ipC`X|%Gj=D<,=7|=VKQh<nZ%a{W-Nua: 0j[}J.1i%NjhQ' );
define( 'NONCE_SALT',        '{vVm-8{N9;[kFUW-uOeCZl^TawSaQ-V[BA-5M:1ZRT&4|;9&nKurA@Ha$NF-nL`1' );
define( 'WP_CACHE_KEY_SALT', 'ol8,_>$!Y{HUw=icvYHs_}R87WKDtr*_x1RU2a5KjA@~6%9</z]3)x@s]9(9XXX3' );


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
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
