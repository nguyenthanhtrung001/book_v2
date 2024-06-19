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
define( 'DB_NAME', 'book' );

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
define( 'AUTH_KEY',         '/|O[wVbRUoj|~.1%|8>Oq*K2N[)_@|WMhe`-v1~I.SwW.Ra@S>8EHpd@YavSa8Wi' );
define( 'SECURE_AUTH_KEY',  '|PE(1k>1!48h)tzM(S[#ts|V5A!Tu!.a]Bsp=s8hQBn1WDi>:HGLNquSEd7x_DQM' );
define( 'LOGGED_IN_KEY',    ';zx5`WPh<.Brm,|_$>yd(:~mEQNo@(@TJY.K3tJZ@ez>*v%V9Hm*-fc+h1cwc>{0' );
define( 'NONCE_KEY',        '%$zZbrCd3v@VjyL*PbvC8dL 1M7JFS ;2)v/5h3iqwL.wpSg8^pPuG!N2lknx(XG' );
define( 'AUTH_SALT',        'lBinzOx}:fJ2Ado{u^vh>zCf,0f]QA ,3RXH(;|M!)5i?ESfG4+yu6F2p<`FeD-y' );
define( 'SECURE_AUTH_SALT', '@gI&kG9Jj.cGuOcj#jO,B`e{EDy}T0sr#U+*8 zg4c-1 RpNL>u:Kg{E*U,(pnh5' );
define( 'LOGGED_IN_SALT',   'GB? @oqcFLew4>V*N)qvRx{q7HR7g;Rd21/bD$_`=YLWc}OW/}z8*,`&G02SEuk&' );
define( 'NONCE_SALT',       '?g_G(Q|qu$&w_)O0v2pM5J=TI6dE~lEqGTZq-[l<pWM@`|c ?h#y,+|= rDCgXCn' );

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
