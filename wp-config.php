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
define( 'DB_NAME', 'wp-school' );

/** Database username */
define( 'DB_USER', 'wp-school-admin' );

/** Database password */
define( 'DB_PASSWORD', 'wp-school-admin' );

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
define( 'AUTH_KEY',         '(Ar9wwI&Gaz&MkhWvsc[4p`}FcPI`%E+-QXd/DpY~VHSMRqUJWrjr8/ &}mY[Gh=' );
define( 'SECURE_AUTH_KEY',  '4u=9K>#$bc(q1p<XoDN~-Em:IEV2NQ;d<=:L-GC7ZcEkATm`jWN!dnHpL.Z_iIFM' );
define( 'LOGGED_IN_KEY',    'JJ;Wo:rmBox*_vqwUWO{fAwnO(b?kiV0KpGZ={1]#kIEcI/+m*E+M<Dxy:I2AW;8' );
define( 'NONCE_KEY',        '=iERcwSR4)AzryPn(fcz,fmn*vIOS*x^R1unM%ikEiMqGrN-.W,! #]-uablT.uN' );
define( 'AUTH_SALT',        'lOs0HT16ug:+8P:G:(1Ct2xPxoJ^LB,_XN#,_@vJ4`Fkf0oPu@3&=_,kvT}]$e%G' );
define( 'SECURE_AUTH_SALT', '%3ht>_Gur#~HKL0<d,by3v8^[|UVUJ,c00mE;*#f=j@7/QL@nY#d;lPH7zptf6XR' );
define( 'LOGGED_IN_SALT',   'CoS.#6Rrg6-4:31j/kWnk$iXS3J^+bEbK5u10gA-1rw7gCD*Y1&y@$|rSS!Qh#k ' );
define( 'NONCE_SALT',       'R?`]w7Gn>SF*2f) _rExqo_BI$j%0L8U7;oSZ30JSeZMaAOaY<$<%(9,%Xi:bj@B' );

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
