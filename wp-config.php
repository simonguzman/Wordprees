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
define( 'DB_NAME', 'basedatos' );

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
define( 'AUTH_KEY',         '^KiW?#$C*$0$,%`5QM v)R55q3akt.C^*`^AE5l.ouG(;wSPYO/BN>kr=~qp@k~-' );
define( 'SECURE_AUTH_KEY',  '#*Tmg/7U&2gL+pO/CP~OX9Gv(BAz1&<&jG<c)K/-WpeEq:8c+j9ab.gj@$B)I4@T' );
define( 'LOGGED_IN_KEY',    'ZFr`8/q&yz3M47vg7_m7#Q~2~Ga_~uGV=89dxaBDUdhjfx=]d1~B[K*FIA{-V<#]' );
define( 'NONCE_KEY',        '5bQ*W+^]^Q~!NLKQbY!c7<<MWcr.Nt!%{!>kaXJKJSh.E83`pDC#~DKxGHOcsX/c' );
define( 'AUTH_SALT',        '&*`YOi#3/f^0J-xQLcz1p*>ynkiS.-k1#((q7kdc&VT=Vd(Nz0M^9!_L077s#cOU' );
define( 'SECURE_AUTH_SALT', '0M@vMTR& _oov-2ysM!+;-h?3<n+33HjguW0}}edmAJMi{V18q_`us15CE;Iu1h2' );
define( 'LOGGED_IN_SALT',   'XlzJap];61,Cix`3cDuz`lb`gIlo|W($_t$+7S_ jEkHU0#!nylpV:Sr`?k1B>T]' );
define( 'NONCE_SALT',       'qFF{sf)yu5UH-)}J6vW{$=_:A(4]li|RK1NJ|f?~f{%>UZ$8[4jq8i0$2tg~ra`b' );

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
