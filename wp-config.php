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
 * @package parkland-theme
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cjewett1_parkland' );

/** Database username */
define( 'DB_USER', 'cjewett1' );

/** Database password */
define( 'DB_PASSWORD', 'l1rKApNO40QUvmD' );

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
define('AUTH_KEY',         '`3d?7{{d|c/c9FnD+7-ov`$B,^7[+L*50x3&!VbG]XxOd/E*+28<#.IkV+M}qwJZ');
define('SECURE_AUTH_KEY',  '+D|d%-m2fMLGd/-{i`w3c0vvTx-,ZN%`W:&}wB@HUsrE|K[+t.,?G+xchBd-*gbJ');
define('LOGGED_IN_KEY',    'A`HRaiqZHb0p-%R(l= [(n@Yk0VVq$:e3}t~rWfc&_o-X2s|l}:.sGJbfK?(XolO');
define('NONCE_KEY',        '.Jj[tUH^>f~b2S{`(|hGp&1by*D#Geh+]9 ?[{m|BW| b}h6H~tW^K<,1_CG!Zpt');
define('AUTH_SALT',        'MsAc$be0C>_GmQmUhxNDFGi37@Q|Aq `0P.2s =h[cjE-k#r 1Tft t0!y+R-5Bz');
define('SECURE_AUTH_SALT', '}E,)ruoIHCUVZOKbjWR0mL+/*;<hBe&X,d[vx!PYRz}{M}lr-Xd27>n4@|9U05H$');
define('LOGGED_IN_SALT',   '_a*g]sMp,=bJO>Oqa3DJgpx;#bTD+fieE|2#_>iTf-,86OL(RU_WD^E_?Xx[|XK|');
define('NONCE_SALT',       '25(gFo]++5zW;{Dx*Qg2;mzLvs2G1LyeabxO~$SjE2<hCbG=ywl/d!0u%[+MxXGO');

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
