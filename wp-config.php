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
define( 'DB_NAME', 'store' );

/** MySQL database username */
define( 'DB_USER', 'nkwanta442' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '<ndoc,v%E[Wzz&fL#W0)-q-DUae+-X~423o9Z;vE#L[NTy|C=,Tlw8i9b1>Q3}ra' );
define( 'SECURE_AUTH_KEY',  ' =]B.X@_K[-g&/><L|%cv)kx8=mg*+lDNS[mqBLc{x?04R9z>@3c{(v:[~X5JjRH' );
define( 'LOGGED_IN_KEY',    '^-|U&FT3sy -/81O6vCwA(.lnp;d quv:Er3#@$sI8KBS29Qn`iRsADA=9c]rnd>' );
define( 'NONCE_KEY',        ')a%)LgR4E8GU}MfW.oN(=YVV$ZV}q&fGNkij1jWwF#s4?g.sN`}ar $KV0Zt0j:+' );
define( 'AUTH_SALT',        '3v%d_w[tdr}:bw+`R[VQ<pIdZNV<D/@b2WjT(%HQe4,!I!%G#mhsQJ(LEvEyx&.o' );
define( 'SECURE_AUTH_SALT', 'xXT`Lg8ZD1>.07:!i-G_}PBwgH,o^=P&.S~uQ+?}[BL5nZ0JoO!X-&<}XcR-om=n' );
define( 'LOGGED_IN_SALT',   '$wMQODD7#kE:6g8hC[(zmA/jC,NDq~!V~lq$_naT3nGB;`!i8wD*)*#Mxn:@Fzxk' );
define( 'NONCE_SALT',       'ut`^nZ?l,J_#T3x-C&^^$VXm9?[J7|~k<pT=#U~5aa(<D&e0XRv?[.X=@6N%#?,f' );

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
