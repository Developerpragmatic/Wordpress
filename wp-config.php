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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Jtech' );

/** Database username */
define( 'DB_USER', 'jtech' );

/** Database password */
define( 'DB_PASSWORD', 'Jtech@123' );

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
define( 'AUTH_KEY',         '|W?XktmeKBCsAuKvCrl<(0Z](yAw+O ^@9?D%Zb[.!pWda}t|[2&)OJXNC%cx|mH' );
define( 'SECURE_AUTH_KEY',  'S&; u0c-]:y!rl -Se@<E(y;D5lKx@C;P,{6^r4b=^vwa^c!k(Q;?wwMY6Vp3(ev' );
define( 'LOGGED_IN_KEY',    'MvAZnpG&qZwW spB|*!ena.W1*XK2ER_[LFVN=d:Drc:{Tro96Q^/C(*d-!g38){' );
define( 'NONCE_KEY',        't2*^A1Kr-#$mRO~MVEUOa4+*u8.iv!g{J?H3lDi.;a1^OI0*2U+tjvQL3xzpS3mB' );
define( 'AUTH_SALT',        'aY8SjJ}T`A>O)f5!odSPnq0km@3m+1OD{j1/.f2sBsa{IbP2xNjH3oa4L?qjmU1^' );
define( 'SECURE_AUTH_SALT', '869G]*Zpq`cJ,A3&H_(5~J?Jrq8A`ApyFE!x=[+)aD6-!w`A6dxeAUjp1*@=KCd*' );
define( 'LOGGED_IN_SALT',   '|OEG^u$BU5#*??;*%9~uF}=DnWAb1Jz](6?,+pP#{;V}&Bs{V%+Y~&LNJ ys@N<h' );
define( 'NONCE_SALT',       '4/OYUV)SmI*x]`JSR=4u.l*{{k)Woxdxs,D UpFX^G+dwrUh*<FDMX3-n%HRZa4&' );

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
