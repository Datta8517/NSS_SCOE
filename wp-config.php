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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Pz&!!co,Jd)=@pIQ>HdD+-V=2]m!dmp$AU|zIG17Or`Z0,[CJ.Vno,1?,aq#tu#k' );
define( 'SECURE_AUTH_KEY',  '1ES~MwB#7zv(c99.GQnj>H63_WuV<_?^wd4IWR_SvH(tvL^ Lun}c(&%?h-SG<-w' );
define( 'LOGGED_IN_KEY',    '*TwB!FO%?GOo(3h)+0zctbuY$>`nx:4qJ}[HL`ZqQ/0,+.2/*).!Jjwa%qr8et@)' );
define( 'NONCE_KEY',        'KSKSppc}x@].32(Kfr#!o+j2bahjul]ABZEz t0j$ug#0`!@_N,7B#[4G+KvVPKf' );
define( 'AUTH_SALT',        '873~W4RBz<1F;O-<l*2gh;cb3uVQVzCXubV<&,@e$]CZHb<TCXC@He~cINY7`kk1' );
define( 'SECURE_AUTH_SALT', 'I&] 1lE2XFby6}kz8KLnevt>*3.YS571+$WPrKYT`^mg[E]xlTj=mNzZ>75<2-xV' );
define( 'LOGGED_IN_SALT',   '9BT2{Bc%w!T}P>(J4Q,#l&g_Zv~!z{:WBu_b5oA66P|_J3-8[M?u_Cm/Ji9C{t!b' );
define( 'NONCE_SALT',       'xn3O]^W1X&(J1[ya/V`4oK4Co>T1gHTJuf}(r;_I*%G&YO&{3)B2vnF7SwF[l+c1' );

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
