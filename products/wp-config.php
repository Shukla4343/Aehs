<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u685682355_LdaWQ' );

/** Database username */
define( 'DB_USER', 'u685682355_xbSUM' );

/** Database password */
define( 'DB_PASSWORD', 'JfI4rdZ6J2' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '/$AaIAduey}MjlAH]^y[RbJO.nEL<<b$O12l(z:}0Ll$VEDkW!#w=_x6XD!{7UQ8' );
define( 'SECURE_AUTH_KEY',   '&nBryl|~,,_r_vz/ljqWG1kF%|CKr-D:N,<RH_62h0,Unmpwa0aBEy`YV[;$T[mJ' );
define( 'LOGGED_IN_KEY',     'tNibk]TF:PtX_q>CV*Vwm:IC$`yOG11L_u/813nO(WWkmSa`|9u|xKj+8EzF~Bck' );
define( 'NONCE_KEY',         '5A}X-]+*4z_l7=m0kNv.|G3k#46$(9|NY5y1Gi`HSdG)KUG]!XgY`Ym{MR55)>jS' );
define( 'AUTH_SALT',         'Uy6j~H#cH.cf#pSd~Q>)3ly_.#Y/0yG?~o;L}GJ-p= 2|cW[KTR;Wtu[xZ*P)HRO' );
define( 'SECURE_AUTH_SALT',  '/^RR%^v?X7zM 27f5Sxs%:1mt>.GW`[ZT`<&z#%e1.toulK=|m:I%OVl)r]2g#v+' );
define( 'LOGGED_IN_SALT',    'IXh/W^`+eirNpsReFe?r:RwFB*0y)r@WQFx0{6l6zk}=34[rIT5{]+%A#P<Js!fL' );
define( 'NONCE_SALT',        'J3e!3o<.5I;SZ?02EW.;tK5dFo&FA2>ojknCk&(eW[`[Jm9QSu(!e`A4I~kSft1p' );
define( 'WP_CACHE_KEY_SALT', '=_7G2;c:ET,yOcF)^qQF1rQ3i;hj<egbv;lIL5N%N)XJP+UB-B%Hj2_$QBY^.;6t' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
