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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my college 1' );

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
define( 'AUTH_KEY',         'B?Yi<3h#IbeDp>[.vIngxQd^e9QwY`&`Pl~&nZfx,gie<h`4BIR$4f./);3U3tG`' );
define( 'SECURE_AUTH_KEY',  '32[*|RD@/EKKq59nASEQ24KS}&HNV57d]X/q2(5_;d;4(D@]FR/5 EKF`S1kR{n5' );
define( 'LOGGED_IN_KEY',    '{0m-#]Lbib,zk)haw`Y[P$=Bc>c0lb{K1ZL-*,!xClCE$sD}msjX25(9!&r`1e6Z' );
define( 'NONCE_KEY',        'p#zxbN4`vj(mj0z:oM,0W-POI)+{y8mU-%|)#+I&7#[9|a!C 3Q*Dm#9z~>F3(hY' );
define( 'AUTH_SALT',        'izQ{TwR&@nVwU&USZ1lIf0 8D|*G>`;)^^&0owW7+J-VI(Ux)Ry:jRt|m^Mr(oaA' );
define( 'SECURE_AUTH_SALT', 'SdxEYM2PbCQ__w7V0u:?1oT39x[wbxQK`MI3PDVbR#<GOa%)S;hrWF=~f3s<_,`Z' );
define( 'LOGGED_IN_SALT',   '6vFjCB4|6J>dZgc/l#=}%gX9[sMVR2PZGnuSC-^PS]+pH@MD/R+&z!T%2.DKx^sT' );
define( 'NONCE_SALT',       'zZ/h8Qgn5FCB:dyn6WKHKAd9/.a2AJ=;Uk~a8x3Cyu{fob=#wy)FADYXByi?bIh<' );

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
