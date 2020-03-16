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
define( 'DB_NAME', 'salamahaqiqah' );

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
define( 'AUTH_KEY',         'TcyN8Xd${5Olw@;GN*G-y%9C6CI47Y`L,^@bWZ~IyleHR?$ah ;I^ja/[uf4w,tL' );
define( 'SECURE_AUTH_KEY',  'Q5gZ!ZZSdLo*|Z#7$#ID0CB%{]L9YCna~*{F);^3v@a[T#Q1Iil-,-n6C_`$=$qj' );
define( 'LOGGED_IN_KEY',    'TpDY-P}mVm2jv&yDW-pc73#XxS{|+*-(F0&>bewL=_]#o]! xu4jj6A1BzWET[q_' );
define( 'NONCE_KEY',        'C)1)khD-><ie7V}GkB3l|=x2qdnrs`M(|pey}r!EE$6)+avXkv$ E)AK~<VMdL:W' );
define( 'AUTH_SALT',        'PbbtG+*(JB5Kpn,`1I.!AI`({CFrkX=cw2F(d-y-sk{u4UP!_5IcHr9z*tSHB6){' );
define( 'SECURE_AUTH_SALT', '2gUwZ*yx-dJ=.]uJE(SjgYa<7C*=#7|z2%`WXG;-5/USFIt_VZTj.*zZZ0NqFlkc' );
define( 'LOGGED_IN_SALT',   'O7<h%0?5KM/7y:#vKAx:+Q/)gRpxz4!-.k*K93gHg)jOhPe4}r-../oH*:r=F2RD' );
define( 'NONCE_SALT',       't>^Gth<D`7aMiljlc>RGXpz:o5Y>=Q]VM;TwW[F>|pRak|-i#d&r oVI|IVhFr_J' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

