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
define( 'DB_NAME', 'onef_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'abN+]o;@+I%$+BgDbhULEIPXlCA&W6*~[%/@l%D%E~Ul$HTCjHZ_?yub8]#wK{:m' );
define( 'SECURE_AUTH_KEY',  '$D fSz{FF%G!Zir$<,fi9ORe;LSi/.^q&]}W0Xg(E!*dj)Wqw[(7[5DEh![HujRb' );
define( 'LOGGED_IN_KEY',    'n:(RvyzAhox+}2;REP!O$RiWuqXF?6CA1QOq+b@IJ6lfN|!C.5RV*i#04I9j|TRY' );
define( 'NONCE_KEY',        'RT(mInyf8Up&i+ZF?t4~D.j$V+=``0@SYn%C)@F~ehtIfbH/#r9%68QW 6g]U9L4' );
define( 'AUTH_SALT',        '!y]$.BE:(?o4 (#-].wQh|<?:Q?IW]|vu^o&CI}MT@NSPCK8n*a>9Xc^q3+zQ#OT' );
define( 'SECURE_AUTH_SALT', 'g7PtDIM;_NMk*3IT>>:XB|<0`H;dLJ zHi7)qvq)Rc_N{EIPg=v^#nn4JR0yi!78' );
define( 'LOGGED_IN_SALT',   'Qo9LF@^z[Mk~?Rsnb9k9Ca3IiL:X~Aov/S(&ZJ 2:qb%+ksNz393&2NY`ET&tG=G' );
define( 'NONCE_SALT',       '[s4[5_*./cDAyRBy?q d+@p`xY:<P&uDE6M;u?Ps%pv(e#nX(4!y?rfpPxN47OhR' );

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
