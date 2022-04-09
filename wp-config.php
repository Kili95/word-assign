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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4Z2]VC52)nE~HiV4.Gu&*Vc{NfJBdUd2,|Zz$|,I[u)~1S[&ikNS#RJK_xv]x`}5' );
define( 'SECURE_AUTH_KEY',  '1>vesb&QwYhn0Y)!:;zTf$w4jeR5z#tboLE`!yrkMMUl?C00m-~yxFRf!WRV}37c' );
define( 'LOGGED_IN_KEY',    'I0-~y09=wA]V*SeV)+03+y;7@b34Pa-[3a9n4@pn$:= J~lBt|Hwd/OADpfS$kLD' );
define( 'NONCE_KEY',        'oYYD@K;r[Gw&6!b^qtdte }H*C:zeZ;E3KM6p0];!}G_&P$^$%S^O7d90L!voT>^' );
define( 'AUTH_SALT',        'Q!{ }kN<s>w({ASi-_}Ek$F%nOQg~w!1fl-Z&.Aqp9E3| l7^!$]U@7Z6p([_]!5' );
define( 'SECURE_AUTH_SALT', 'h9.}<]T{-ceMdOo*c2%Mpm^@)5!$6blJ Rr7<~)a?+{x-d{H0BxMA42d87/]*ma8' );
define( 'LOGGED_IN_SALT',   'UH:N5@p-H?1.gXY:~9O2bx{k{AC7nFr.Ah? RO%axu.t)1s6*rQ)o7:@)($8zBd_' );
define( 'NONCE_SALT',       'B1CLfG`9z76`l:#en}Gj<gX%3qdLFReMjTZ;/I@6TMht~j?Y9*A]A:eH}ILot`!;' );

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
