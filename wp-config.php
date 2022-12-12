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
define( 'DB_NAME', 'exe_wordpress' );

/** Database username */
define( 'DB_USER', 'mohamedSh' );

/** Database password */
define( 'DB_PASSWORD', 'azerty123456' );

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
define( 'AUTH_KEY',         '?t}$vt@hDBK:ed^0)c%*0_{-~7a@4%3OZI;?I[*M!e[%*(4,~|P~yHb<^~Vjte|#' );
define( 'SECURE_AUTH_KEY',  'ggT;Qre%I`+Q_*&=qd9z4QsfoF~qJn(N}tQJ&; (|6E.T7Y}TAOObxhw~Oo(T2-s' );
define( 'LOGGED_IN_KEY',    'f<uZoQz2 ,6/@U_{z O#6Rh< ;N?Xhz7.(d3iu(Nl|r,nC>@DoKfdpk~uaQQzm1x' );
define( 'NONCE_KEY',        'l9?hnw,H.Q|g]t(Vp+9;@<>[T+`=8YYcuQnMahcq}ooj#`&|xe9v)%c*fJ(D})Bd' );
define( 'AUTH_SALT',        'O~{cpFUMS{*g9=E>M!ZJ$+#FX1#tZ8Wk?5h1r*XlA[wn$>;=]#]`/$n1NozQOve4' );
define( 'SECURE_AUTH_SALT', '*fDuwaQL<(*jfU4T[4g#@lAl6A%dCjimv=Yf*c3rqE&x(04NN@ayObVK+A.e_|Zo' );
define( 'LOGGED_IN_SALT',   '(_94}HraF.?r?l8zc,|U)xTb1L3{3*ca6,PS >ca4Nx<Gv_>_}eA>eR!K,YG8SFQ' );
define( 'NONCE_SALT',       'FVc)z#DXrPy%zxM~C?TZs?!!vL6K5%fJ3-;4gBF!s1$:,FUH1Sp-]FOIfyai}fa~' );

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
