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
define( 'AUTH_KEY',         ' 8V=2]{6JG_Zk.dOzlc57@9mI`.Z7z2nE(|tkffeF<0lsG+knYW%}IT*?1uN|A[_' );
define( 'SECURE_AUTH_KEY',  ',W6-P!&o/eBx0:Wq]Ax?Ckc8BSG3i[)kQL%Q#.CrKlyx?t(=2YiBNkDj2ags]+9H' );
define( 'LOGGED_IN_KEY',    '4.sK_I|%H0CbKAnyHzw]N/&MaQ&Xa$a-9AZZ:SeY9;!)ygeRP1{lHw,3T1k]W<[5' );
define( 'NONCE_KEY',        'e6EbXRX?I{_t%M@[811xGcwA2DH]$d!pm1ot#mAZ|,m&Lusgfd*v)honp>.%?J;/' );
define( 'AUTH_SALT',        '`[ 35hzw[BVCl`xBSX9s,-eS+$KsujZo2%qM4)Xl;:,^TN0`X##+*MbHDjPrKWno' );
define( 'SECURE_AUTH_SALT', '9!A}aoL/Er:gSegYO9e#)LCJEm+YRB=*sBw3U*E5]<FemWp1r%8Rg=&kL@OxoQoO' );
define( 'LOGGED_IN_SALT',   '!%VFHZ((O,9(+3XWh#}O9ZhoGg~L$&(__Pz$MJrbAO^YvMq=gN>4sNJm$2i3(Ex}' );
define( 'NONCE_SALT',       '-W@q`7AV93x4,S@v9K>jh=M4xp0m.+tl(9Em3ul_/ChW*g9t i1lAyf85,uwH{|l' );

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
