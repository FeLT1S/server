<?php
/**
* The base configuration for WordPress
*
* The wp-config.php creation script uses this file during the
* installation. You don't have to use the web site, you can
* copy this file to "wp-config.php" and fill in the values.
*
* This file contains the following configurations:
*
* * MySQL settings
* * Secret keys
* * Database table prefix
* * ABSPATH
*
* @link https://wordpress.org/support/article/editing-wp-conf..
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ft_database' );

/** MySQL database username */
define( 'DB_USER', 'jiandre' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/

define('AUTH_KEY', '3^_%9VxkGr(Iq_L#%o|xPetFJ6N^y=p9D&fBpbgk[(Ag4NTFwb5ckxvEbabafRE.');
define('SECURE_AUTH_KEY', '#vU_{>/FMfD nom1lrs+x,L{ W$1X>O6ZP 2)I{ S7Cc.nXF]<p-mdk =^u+Nj!');
define('LOGGED_IN_KEY', '~HjaFn^?*BQ}7<6`(+FL:T2g~3T::,8~Y+ryH-q;t{83d-t 5OFD-+Tka5i{dj`r');
define('NONCE_KEY', '0jVc2-/I;?CL)0cNf~B~Ypg[?sdafF|bq,gCx<M[f.{}K bq@r[h4~(M`}w:#oTf');
define('AUTH_SALT', '~6!`6HV;lSlQRyORM11H;p(|MU6bJ34a1ALeU*iypyln*_ crHtg Zh-G vEjytP');
define('SECURE_AUTH_SALT', 'wSRj.t`TwZ1qb*l=KQC$X9:vV2S nziw.C+lBHL)o0b&|`iFZ_$I73jx&V.~(5Uw');
define('LOGGED_IN_SALT', ': UyyR#>Tm+VIlswk!4T7=Qr9pG|Z!xhJ$p /v&,y[+yi6(Z+(GVF,Ipbq_@C[Us');
define('NONCE_SALT', 'a9Iw*9.YU|=*R.aB}|ZQ]6}({Om[/@#Bt{Qyvk(UO8Cq%A^vZgK=ku#I~$NRO=Al');

/**#@-*/

/**
* WordPress Database Table prefix.
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
* @link https://wordpress.org/support/article/debugging-in-wo..
*/
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';