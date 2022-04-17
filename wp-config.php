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
define( 'DB_NAME', 'moonland_db' );

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
define( 'AUTH_KEY',         ')$3A:r;-pK0 0hZ=urB321KHMVjj^hE}&}eT;d=[|5^{}%C;(lHzVT<^{.x=23xo' );
define( 'SECURE_AUTH_KEY',  'Gd$l|1?[@H-YDL2+1rA$H@]EXPs=1?2v[0iNe4.vr1^ZRe/nExm-I{<Nh1<X6jB9' );
define( 'LOGGED_IN_KEY',    'a1 FnvPg}SKT)#~S,$0&de.^hb}^hun /zV_uDf!:5?`7}J.$9OkpN1km${;A^30' );
define( 'NONCE_KEY',        '@!ZulGyw{tHlhpuV)L!e[r&lcJq{v!+rs`2K-irs^L_TwCIJO.>t*y8)F1um>`![' );
define( 'AUTH_SALT',        '<tX;w[C:nJ}d0$}R9gCju^G:TrL]izLUfiMSQh{!R)%Z$Ym[3k#l=3TFdWkt#rMN' );
define( 'SECURE_AUTH_SALT', '`ippk8&N28Y*vu!JFNPIlI/XD3F06<?q$._!s8-_e]S]WkD}Qof+(g)3F4RV`m=i' );
define( 'LOGGED_IN_SALT',   'f2v|]]~][Z]_AgK_y`R!{*tKt;|A$NL[FAhnewEy1jPovO>|d^>Z sPFGx4wF?iR' );
define( 'NONCE_SALT',       '08JBFE<bk?PJi `1Yn@iW8LRtr^0jFZr{g9!*9Rd&u5sMI;IwEo2&E5dk!c%Z6~n' );

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
