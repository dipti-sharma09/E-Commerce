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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomm' );

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
define( 'AUTH_KEY',         'J%*h>t!%v#wGg!V8]X:sF#UP=?kvh^@ ouJ.JxjXog.&XXwY>*#_?3OUtK>7Zeht' );
define( 'SECURE_AUTH_KEY',  '0~9(}E1m<VfTMrag:h/ZBU-Qcq(ORzA $s}jgp^]Huiiw};q?|#duQ%x.`wg/71A' );
define( 'LOGGED_IN_KEY',    'W,k?h6:*PI~=J|ogWR1h9Lgo`UP{6kC9zg60%0V=%={/)&k*qYiDuWS1tMJ:b,0b' );
define( 'NONCE_KEY',        'V`y(aftj]$hSR}pZ1D8^-My&a,L&18*sO|e?#@6rc<e)RUj@[[U3RIu;$exb9VJ ' );
define( 'AUTH_SALT',        '|CiWx0`|dv{;4uB4{w(7ispaqvA/_Mq)*n3i,5tk.{uEOD?3jAL%Zl7=soLgbG/K' );
define( 'SECURE_AUTH_SALT', '2pF-::$;,g0#/j/I4uY~F=py74p=e-h+$-T.eci6d59mVno1dufo4l+>93+_iPzc' );
define( 'LOGGED_IN_SALT',   'pv0-9>WC{)NJP|7am| MMY,+P%w~E(gO_5h2up57u$`:33+kwf9,(j[~W3{P9{LQ' );
define( 'NONCE_SALT',       '<DL,;5,!^~p1(ZlAkF^lc@cq$tP.,*&e!HVH>6EGZEt=r?^CVpr@mH5jv<o+qq%Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecommerce';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
