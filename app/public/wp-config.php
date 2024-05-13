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
define( 'AUTH_KEY',          'TaigL.~wJm,r,~5^rR<EUiWe[t !3L`|`2PEHkRrAS>lI6ZQukPB@yo!e]9d.ThP' );
define( 'SECURE_AUTH_KEY',   'cA+i`v*T0_mX7Lfhshvr*f]qppvTQ)K/A}1L_gLnoaP9-4{Nd&i 9V#txnt1f$c)' );
define( 'LOGGED_IN_KEY',     'c,hhvjiY%-DQ6IP~hF>AhlHTj>PXcgEkbN?Ct]c5<Lb&|Wf.Y<8:{|/7YlQ 6kax' );
define( 'NONCE_KEY',         '9xq0t-SKNIP=1AKg_ILBy&Id4JZ[s=i<iKj<d5L1c!s9860b2L0l#$}K26y^>]Id' );
define( 'AUTH_SALT',         '+K2F[rVzL}N!}TvKQuU#z9*_Sl4Poz5>c #Qvx)zR3SjG>7OU>(%SB>fRV0&?-an' );
define( 'SECURE_AUTH_SALT',  'ZWRr,c&kWmdF]9Q$Iy]Uk<;|63VqvyKLYwALPA}-3pGO$]k;*DZ]_dnR@!Me;K]A' );
define( 'LOGGED_IN_SALT',    ']>!c3A1RIuar]6fhnrd)}G[W{_,)FO|$T]P-TE!eUf^ZWgILZ3+^9WEIP}uH}<(0' );
define( 'NONCE_SALT',        '0n36=<_.nL|i6s*J=.Loi4|$N5tbnMF>$3/S.cAaY:pWh0k.Oi>P2Qs W+Ub51H!' );
define( 'WP_CACHE_KEY_SALT', 'Eu2#6J{,D@W<+AmJ2?K#q>3M-CkT#E^k#KV0.F.7N hzc1DtB@1%lR)$D->T&VOY' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
