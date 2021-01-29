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
define( 'DB_NAME', 'sgb_group' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';4IM[lm#gUh{e8m%im{}GS0lwwW<5!?ehjT26+AN]|J]X+7-@+9D1LMD}qpv[mXK' );
define( 'SECURE_AUTH_KEY',  'eounmb|dsv6^IW&exU}9NHhmp&U#*FOQF[V3c 6!:~^,LTT_!P6Zr%5{>r|ON^6L' );
define( 'LOGGED_IN_KEY',    'b.oq[01&pDj^,Si`,MVO_PKRmi+F[h>ne%Ie>AFEsutTJ7Z-saoUZqO6I{`2q1it' );
define( 'NONCE_KEY',        '%*dy3,Gg@@WFj9!tO7jNg,xl5OyY23yX ~ukzH+j`fyFT&l%WhQKDS*rN@u7z*Ih' );
define( 'AUTH_SALT',        's+rJWP=iTwV]Zye-d<cO.Pv41f{4MGZcC]y}{/*uU KU}zfV,,V4<h>L^%BsobO_' );
define( 'SECURE_AUTH_SALT', 'zy?`EPB1H6#8k0.rqJG,LMX)jK3:KB/Zu&)Xp`uv43<z&& U8&VcK|e{731D4{d/' );
define( 'LOGGED_IN_SALT',   '#dOM)}4{6ZR4j3kT#8h;gt/`o3igyIhfQSw&c;|q.*2[%}4sodS_3agbCG#J(gQu' );
define( 'NONCE_SALT',       'udW~CTD P``iYsNjZ`eabF#_4v,G#3.&B=~)q#c#/@U5Lx(v`ciUo61+TFJhPb<d' );

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
