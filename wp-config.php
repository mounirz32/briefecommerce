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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'EoR6@<s61U&%r0nwHPt+M9K<$L}zkK;Zg8MUxD.VZn`Giski3$rtr%G&Kp*jt:]S' );
define( 'SECURE_AUTH_KEY',  '<6b/nn6j0&{ykyh_$0muQtT;3 po3a/M|CPf5Ni)*_PU(4x=;x?ydLL[!FvP([ d' );
define( 'LOGGED_IN_KEY',    'N+NQ&TYz[3/Xc/18aYj{hR~QF.:Hwbq<uHBk}#%2T%|.jE#c,lw9o>./k9H0ho>,' );
define( 'NONCE_KEY',        '_Z&hg<]w7q5f#={G}46B1^4R!/*U+l5 2YGuH{_vPfVf4S2Qp&l^]FqH`q2@=U7=' );
define( 'AUTH_SALT',        '+T%n`,~Lb&H:5V5q`j!mX,,@[L&x!af#TJ[a 7fzzYJ$F`-2x+wTx{U)UVd4~gQ7' );
define( 'SECURE_AUTH_SALT', 'El=.XyN>q=BAnzw]FefVm2>?uzCZqpP{#@9A@0Hp,wF9rvuVv-0{D- sGJr;~K.0' );
define( 'LOGGED_IN_SALT',   'j_[Mn.1%S<wex[X<A@{^I7p9}[`sNIt[ziqy!VN0S 0Yvj8M~bPL1;5x&`jq_u~$' );
define( 'NONCE_SALT',       'X7qb#XQ_g)r`i:/%wM:W#.4C3=1tl]n}QYUe;-DMF*rkUh3u{6v(9-?ceMZi}S5(' );

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
