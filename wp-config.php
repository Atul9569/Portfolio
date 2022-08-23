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
define( 'DB_NAME', 'Personal' );

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
define( 'AUTH_KEY',         'Q:}rf4Hc9x(wn=+.J{T*1tcZO7F<z4;_^~h:9bV,RIF,HG/SeBVAdu^sjk:8Z=@.' );
define( 'SECURE_AUTH_KEY',  '$x6uJS/BGtyB{a&Jgx] $UZo{|Mundy_<$[@V_A9v,up2>&PI;o`zPgcZz]sS-!b' );
define( 'LOGGED_IN_KEY',    '0GG/x41_w5xk`wuQVH4+0J@FszTM-%1jrTSvEWpT{Ea^nu{GJ%{a0W&y%6f]}q]n' );
define( 'NONCE_KEY',        '[-(y^duGb3=H(udOw#R<Gb5ZNP)LpSD{%,Xd%F>jq=gi24z ytWAN@O^M~|y.lR[' );
define( 'AUTH_SALT',        ',zLGx_iWcd.]g9Xf5!*vGs+}z}OpeZ&*6m4Ac=/pku$uoj2g@j<6 t[ D@>b_V~M' );
define( 'SECURE_AUTH_SALT', '3 8sIXtgEY4,4A+Ou~C;T3|`2|MF%-a/qje603;fAaNeo-xS&ujSHJ+].1j-U!<)' );
define( 'LOGGED_IN_SALT',   '6h:=f=w.LRjjS!>^8]-wDkooePm&.m(:^ePJ~P*g0:HDt&dxtodr&0]xu4(~m){A' );
define( 'NONCE_SALT',       'nPgnVnBHV=hv>OXNid6qE+^3at|?YWJC5+l;LK!O6jxC{p18(mu*CJ9XNrF{[8-T' );

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
