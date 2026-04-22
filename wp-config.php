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
define( 'DB_NAME', 'stratos_live' );

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
define( 'AUTH_KEY',         '@A3:}h*b2sMt)l;b!Q$7P5360{:.#WijI8we1P5@i&h|C%E^#fja`Zl B`U@;6s`' );
define( 'SECURE_AUTH_KEY',  '#~z0UO3L#Cv~x% &n{{EfiQlQIv-u(*{CuDMqK<M>w=U.SX^&#}A~yMrRWA~CXf#' );
define( 'LOGGED_IN_KEY',    'o68yY;EnA7A5,#kasm52y}a3Qb|Bqr9i.t#{w!{ ?*@#ou}SRX4^L;LEbZ^CT2e(' );
define( 'NONCE_KEY',        'ly1+JTi9JOI:3i,xzr+ZYEVYhHqd[m*Hf%JrUWD&{ Cc{<TwTCUV9!FOM^}6QMcR' );
define( 'AUTH_SALT',        'y=S.`-=J=P)K#PS58K!V0~La@(cL@+!Q3b6r{HM$5_[:!tjeaZJ6ERf&Ga;L]uN[' );
define( 'SECURE_AUTH_SALT', 'x8&#06XpE{BKW*Y=~y=j%T@H}II@BT?Eb2*IpN2&a_b8>ExuM lC4`.~cz:U4I0f' );
define( 'LOGGED_IN_SALT',   'nj[W<iqad=lf]=C;183B=A<[WxC^yN~9q(<Tb4LU#bFbu{3xw~<%wgvmNNgj#6sj' );
define( 'NONCE_SALT',       'XN+0Ja+ 0Sj6>y-9qxXhl]?y% &ydD3v3Lm =#;WFqj[=cwMHzAiwm_.M6dQhA];' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp';

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
define( 'GOOGLE_CLIENT_ID', '1067537975841-2tebfsam9ka5nn9c4282appscth8m2st.apps.googleusercontent.com' );
define( 'STRATOS_API_KEY', 'stratos_it_support_2026_secure_key' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
