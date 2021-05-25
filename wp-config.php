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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vm73$6BG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/5BA+.E$O8d:ui[eEF1B sE@X Ml89T?1O|x~R8ut0&GW0h4Z|j^@Q+aX^wEh {D' );
define( 'SECURE_AUTH_KEY',  'G0Y#Zbe*oXPz<[tzc>{~K3$ZR5JlIk,(Nt_$I&9ls-8_wn5w8GV7&Xb~goKr9!6m' );
define( 'LOGGED_IN_KEY',    'Z1cR8k2-Acw:m7>2s=oDZNH{|56j4vWyl3]_xaaN.F*vy:bTv=]T<{T~$6HhVNO2' );
define( 'NONCE_KEY',        'q`WVi:su|VRH7`.P!9+}nIrVlwY+cRVUGOq2F$ZCv4S,L5A-jGu*5QiN@t191H7/' );
define( 'AUTH_SALT',        'x[hyWJcBfyg(V>:@-4lS(GP,gC)>3|S.I+_^&aRNr6k3-NB6WzYtW|tz~pIK!qL4' );
define( 'SECURE_AUTH_SALT', 'ZS;q6)p@=|DTcm+z`5Lsum[/!(70YRa(dP6l3l(T0aziif-CTN|foxU1>|bOgc^/' );
define( 'LOGGED_IN_SALT',   'NNz0U&]EI4F}WIc,4%L{sLQ4JMaGDzMj|X;/_M.24vw(x_eBs7n@Sx &~5g}F;8,' );
define( 'NONCE_SALT',       'h%DLL4;_8FTf%F&uJ1cwwv-A[#C+G}0 !jIb0tg=bM-9sNk29Z&]o_jP5|Ra)[zi' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

