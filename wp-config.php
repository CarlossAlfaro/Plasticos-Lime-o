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
define( 'DB_NAME', 'bd_limeño' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

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
define( 'AUTH_KEY',         '@mL%]S%]:n;?n)?],[%%mkeH0?Zot+0n3KZp];zv sje/9DV?[`;b$FLS]_lx0m+' );
define( 'SECURE_AUTH_KEY',  '3nHs(!oi~CxhmbKv $?Y41tBU#&H%%$NY~C!an`1/VX>1A1d(#*q~_@Yyhbm(s0d' );
define( 'LOGGED_IN_KEY',    '&&1cwW5~`Ch{[`J^akGd37SFK=n0hvPMpW`8[yZ^6TTwEv.>I7/)!_J0G5@-?H9s' );
define( 'NONCE_KEY',        'fg09w[M0x5&YWJkI viFv+zj]tvB0pGLlhu??+`u.CsShE_`Gj&:}LGl8&-th0z1' );
define( 'AUTH_SALT',        'mn%?otvyM{EgIQjZ/(hvyEy``Y`#n`JJssx Re4?D,k+:L W<cgQe6l`oA}43,8h' );
define( 'SECURE_AUTH_SALT', '];}Y!; c>`u fg.UXnC6,*UKa5,aY>un)X7 =BL!]2>P?-^Q(v(a+YJUw(@on&3a' );
define( 'LOGGED_IN_SALT',   '*m^@d(}Th(^1,9o{D.,_Ob]s(@QwT)(_@(Brr{98*S$^l6=MIdQ,}6iixhdeeXb$' );
define( 'NONCE_SALT',       'is)15c<,MTd k}^[Td)nax~Y(@-@:yg>R.~Z~KGrP.sRu,|`{Rowl}OoQ(5_5gmH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'utf8_spanish_ci';

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
