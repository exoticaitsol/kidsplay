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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u746845997_kidsPlay' );

/** Database username */
define( 'DB_USER', 'u746845997_kidsPlay' );

/** Database password */
define( 'DB_PASSWORD', '#4%t^&8H' );

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
define( 'AUTH_KEY',         '3tgrFYZVMnqD#Jg3|~[hmC~x/vvj<o?m&b:lu]ANn|RT!`8p5zbILql{$sh&?|Tp' );
define( 'SECURE_AUTH_KEY',  'MDCUQgj^T$6T{cLF0#,Hl6dp[g[YDU=oJEA~P?W,JMyXzx4N>/sXK:xnGeV.rJ$]' );
define( 'LOGGED_IN_KEY',    'F;wZ,hC_RfuNZWftlNa[Grc_=<k*&?rmAEEb^*wH:cja* OY3FkX^h<a3#ro~zWK' );
define( 'NONCE_KEY',        'Huk8kl3vYaSJ$5ttodacquZ-}p5COIX>U-XZpT<M  F)a{h6b+XN_E;B_]O~+:IS' );
define( 'AUTH_SALT',        '6r^5Gxa(*fx0vE2<sh9Z4!oqJ`.6c^wzg&ZN8o3SxDj^~M10Gf}%{4pZHLjmw]C1' );
define( 'SECURE_AUTH_SALT', 'I2QOsB|4Y$hx<73e4)=3:^[LvxE${w5@<Q X,.LMyg#WG]u3ndK][jfHngw/UC-z' );
define( 'LOGGED_IN_SALT',   'T RU.O%%/%#9+] ;1p#m.^VHOSdGuvkSoq,%?23t|w.m}4`sug,8~;-y6K1yWrm(' );
define( 'NONCE_SALT',       'FNP*/`-Yzfp+|:YM_f|5*@nv8?F F_^t ezG]yK<g)}B!4ck/,3%6x$u9hVRA8AT' );

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
