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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(7>|e1kj&+i3tT-U/3>i*{o9]g`OG%sztli|v(:Z(&8t}Y&tUs{urOUO,%|6x0=)' );
define( 'SECURE_AUTH_KEY',  '#fp#{lKabh1KK*`56,MsaGcZlaAw,By_vmRg#* ABAm4;1Z5=VLz.CXjhCgBBFZx' );
define( 'LOGGED_IN_KEY',    'esJQ}|y}oXA@?=WFk1 t.e/n-gU^&w|}_SS|ZIFL)+tH=|gmgSGcGj._t{gccoZC' );
define( 'NONCE_KEY',        '< w,xBq)$5Dr/!T2.W2q2=4dY-!w2mjhd22E_ral;iIt[Km]6H{cVWgF.IBSxKh0' );
define( 'AUTH_SALT',        'HIMOks06cLFTeRn8O!vvv3%$[k|NKuqJRl,!q;J-QI${bh2p7{D*CM:L5+5[TWpQ' );
define( 'SECURE_AUTH_SALT', '|aSi+G4YhQa):gpsXPf1@)D(rVRnkv:MJfo96{!k3:+M$[4N3 3FLiiy3?]8}H)H' );
define( 'LOGGED_IN_SALT',   '_+=DmpA:oUh3cd[dy#~e}W1_%g2G>Ab!8:b-CZIpuTbaQYX8KcRn?i5xl3OsH2j:' );
define( 'NONCE_SALT',       'M$K9gyEFK,e(9g?u IALfq}kHfCw-Dh7Q+P2QZ}><#Liy;y^q7,$;f_[xV,]grCF' );

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
