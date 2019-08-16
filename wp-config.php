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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flashwebsite1' );

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
define( 'AUTH_KEY',         'vGSsNP-?@FA:r^/,vOm I&*K?=!y:1P69oMN%*6(~M(u-%:{75g^XHt3|>%yad>x' );
define( 'SECURE_AUTH_KEY',  'TMV74m*C{b?ZgU9w-^b1mQoq$1W[:A>&T4m[-=:aP?#gc,3fa{4Zg%eE-p<1%!SM' );
define( 'LOGGED_IN_KEY',    'MN??FmA,[$ ujWWUpVY%>HPdL^pv#Q:pog`o?- T}p _UH=8FOv&9htUNY.p+S4Y' );
define( 'NONCE_KEY',        'l7GAVN1O&Y;x8d9D=<D6?at3_rEZqYtM{D :+dkAVUlY*3ng<j[oc=LY&ThAWP$i' );
define( 'AUTH_SALT',        ',6>+lQDVink0Zg]I*o(DFRb/#RDeb)nQH2[}]eWP^kK~3!$8SJ/^%.)7M#_THP:k' );
define( 'SECURE_AUTH_SALT', 'Bm]7UdBqre%d#?*o1/@Bk4WFeGn_i:$uBFxhhvi~]`0MVTS&Fo*wie:Q1i>m/[~3' );
define( 'LOGGED_IN_SALT',   'px:a$&zQJegN`6Uv%e)=P7O)+$rJe7m#[?uSthdQ%C`*rc,}i|P5Y>:Z{+Hz/3+=' );
define( 'NONCE_SALT',       'eoIgA7(jkZwAr1NDiX;V>N^G=*h0Hp|Q?/RUGrh)#!hDW$8H9$<bBxpU^&to$_AY' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
