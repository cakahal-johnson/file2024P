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
define( 'DB_NAME', 'cakahalsite' );

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
define( 'AUTH_KEY',         'M.,GMGJVSgR9BAe^x*]@J?d]> VL-T <T0M<5e3I8ee(zRUZR1)rhD*E?]u_r67m' );
define( 'SECURE_AUTH_KEY',  '10T^B&3lf}U74-k7 n)yv]Sy~#a*n`/{~$[:zm^.-&f9l(yh,@ %i[ t~*3h.<V&' );
define( 'LOGGED_IN_KEY',    '`ltti:[fc M.5DA1i.2D`bxBMFN|{Xs6RP!.A=g2~Fl)OUo|eM6LlwMl]e=kB Tm' );
define( 'NONCE_KEY',        'FYOZw/;F{y &N4^#FsX>5e([^k&Ii18%nfX; Fd(Fe[=&1ze4h^rUB>M*i> oI5*' );
define( 'AUTH_SALT',        ',MTQd1dE{#k>;JGJSSrHID6-#l(x0O!Cwu=w8DfO3uuY(}LNaV+h;]X08F,Rdl=;' );
define( 'SECURE_AUTH_SALT', '^M0NSJ?8yYS(C1Ci>v=y@)&Ne{jb_?1l36O45$>V9vM;=R7dqe]J%p)Hoxem^$xc' );
define( 'LOGGED_IN_SALT',   'qb3,4$`VE=&+zJ&*k=H;i<b@.f(%2PjKC8:WbDE(l}6{N#sk6}D#1:p<V*UQ(Uz#' );
define( 'NONCE_SALT',       '0fnoe/!wo`-X-]SI!.Bl/7n%_V3>0dyT_,|Ab>S:Q/gKJevzycBmVYvYYm{;DG5%' );

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
