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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caseguard' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Dilip@56' );

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
define( 'AUTH_KEY',         'U].0Bq9`b*@)f/P.PM*xKCNo/c#$qWLpAq#IN3}3ANHk#>=J>rlw6|t %oEPf1<=' );
define( 'SECURE_AUTH_KEY',  '~#-pac7CUTQt=<9A#%uS%hFD=<C_+cW;Rz}*yQW?_W,SI8-8`v;[.0BVfKfcx{J#' );
define( 'LOGGED_IN_KEY',    '%}&;4L`:E?%QA~e#ev823HujjU5MT#H+uuU/$HEM BuweW~;C0Et cL&NIN<amXx' );
define( 'NONCE_KEY',        'Zu;P.IQL0qRtO*/XYnvhlQoJ-O#0u9cYWX%lt7[_7GUZLu0yVTVuOY8:Bou,/7q$' );
define( 'AUTH_SALT',        'q@)=FA_Aaig|yk~Vl,|mKE;x9+8$CZP$BrUFk-6Pq:|iW&u0d1{kyD;q2]{(`Pe,' );
define( 'SECURE_AUTH_SALT', 'eXuxL%7XxoGEniS6~BnV+,sK_<6b$dLX:&R7C<4e.G]^|4]id*J~}CBBB_^5$vQS' );
define( 'LOGGED_IN_SALT',   '@q6`w)}FS~EncWrpoNXzYz__|#VLR8nO$csnvJHOop?eli%Q(qnK&9<NKvSN{NvU' );
define( 'NONCE_SALT',       'dZ8PmOwkuJrCfu<-.K3DIbA,DuYJ_af{b`F-Pp1Y?J-y&AU=(S!VsJJ#75dz#f5q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
