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
define( 'AUTH_KEY',          '?E/IFncl4!:f&eL0EO.b0_4(mQ+$S5d(yzW!g8P8,T0A)>KD<Qi)&=-W]{|8X.6E' );
define( 'SECURE_AUTH_KEY',   'P$|wGhDeC<ZV3O%<t`C5J|Jw|P-t;A[I6$*RdZEp(uGwOaQNYEH^[#If?k=#*7:j' );
define( 'LOGGED_IN_KEY',     '0U;0:&Qi6Q<@#P}CpcBvX{r7IXQctm-oEdN$*w|vlDZ%kw>e1L:XZ|3s!g~(!3*Y' );
define( 'NONCE_KEY',         '#<hIwg;|pv>ky83u!-4/)0+m|AZ/*w4>/<rWF<=0(c1^XZ> i%!G0-IcFg8Y,&EA' );
define( 'AUTH_SALT',         '?~FlMki6j&i LAyFYTpfL5Qz1O+{UOz5/b}=qp)2IHH?U|zkr/@;*X-N{6(9V3^ ' );
define( 'SECURE_AUTH_SALT',  'C|bGDhF0B9*_U*WfgIsP^Q:OA)M=i4h/&bh>6}:&FeX.gJu11{aLbzxz_lu>& AP' );
define( 'LOGGED_IN_SALT',    '+FC2|Vh|Kx9WjfuT3<r}RPIHZG,KdF^(+jLu*kz+S1FO)?&JJz!;V _X`:a^p{s7' );
define( 'NONCE_SALT',        '?n{IceeruHQRx>41a7wx;v?&^1y;Gl<V<3?5~r.R/{y8/MBim2qx4][F|>ZrO.lq' );
define( 'WP_CACHE_KEY_SALT', '*u9f*.xA;qw9~R/osd0SYp,%$jvl;YpOrb+nNWe& U[XlWwR,`gm:lPhT$(L2fc/' );


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

define('WP_DEBUG_LOG', false);
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
