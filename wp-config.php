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
define( 'DB_NAME', 'balansas' );

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
define( 'AUTH_KEY',         'w9wa9xuL~6qzD#mVdIaRi#Bf`sY^4piG5f6Jst DMKZc*fZ2$P*2?G7N+o%3`9[F' );
define( 'SECURE_AUTH_KEY',  'yp]P#6+g w#:U!:!^LH^6}/[/ip10OEtr|AhHMC4s%#=tm*B)3v@fn`e;R5%XOMX' );
define( 'LOGGED_IN_KEY',    'gL?fi|&U%zSQ.`89=nIze+ ^TZTO5fb:h4R,TieGFff7L5C6Be&6g0GSmY$$n=r<' );
define( 'NONCE_KEY',        'zumI=4@VZO;NgD132nwt,dHCm<4Vn/#.})$hFl2PMi@vNtkMkd[^IUB|b)/1S`(#' );
define( 'AUTH_SALT',        ' ??E</@5Vl:jG@fp2kv}#G0zP+j,Zw7uvtV,hORiYhm{<}#s2lDi-M|8*HrOIfEN' );
define( 'SECURE_AUTH_SALT', 'a,rh((mO(InZ.5CC?&HxnBN`E_J_?/OL*4@TR*fVqe+`f2t}nPc 1frm.EeTroAr' );
define( 'LOGGED_IN_SALT',   '`-aMe*5VFN.lquoipTy/6X4#-R 5Xb<v)h$ACyArFc|!2VM2-|Mh>}Sn# S]i<_k' );
define( 'NONCE_SALT',       'W$y-aqFBUB-CK)_Vv5AU%Z>x[75Qe9na(.niH>cxpExIE_%p}88b3NMhFXZj%eqn' );

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
