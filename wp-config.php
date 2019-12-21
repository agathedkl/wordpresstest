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
define( 'DB_NAME', 'agathedekerle' );

/** MySQL database username */
define( 'DB_USER', 'agathe.dekerle' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YYD9D04o' );

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
define( 'AUTH_KEY',         ';SN^l6,k^7I`]9ST`RY>CK}vsA*&48oK{YbI_Xzt:BtH=E$]<s|0+tG]@^9D!6MT' );
define( 'SECURE_AUTH_KEY',  '2|czx-R|~db=e0:)_m-O/,mzOOU+2u;J36ZX2k:4T?>!kfhNz-*tjBD:3Z%0q`e@' );
define( 'LOGGED_IN_KEY',    'j<]($:$2]fqKy93^O0omUyBoP56MX&+:uBg2/*WB&ZgqP{*%,*&9!!(qt0Y}sVut' );
define( 'NONCE_KEY',        'sGmaOKy{J>9-1CeVZkj>ML.c<^`Elw?u8x3XXUp*=b`(Qe*~ZZdo+K4%CH)C*YK0' );
define( 'AUTH_SALT',        'H&,Q<o^a~E>mKJOm5xC`nd%QOZie`{+9<9$|aa-tHhaY`n?TzgR3?:GPAn;9cEAi' );
define( 'SECURE_AUTH_SALT', 'N _<XI+b^n`~`9Ohcw<1|L2ro^q}*|}ZcA}2}F0@8m*vW0tSjDeb,fz9EI7`,7*r' );
define( 'LOGGED_IN_SALT',   '9* Ed--er$ABvtDoM5|}leY${N.Da:gJh:lfcB&L`zt[k{=EF9g;Gx i5`^PksV#' );
define( 'NONCE_SALT',       'ZpTvgIGv#h=?}S~zR<}m{(Xf>^Jkq>OG8RzJ2Fw;v}oxG1BnBHC}hP:g])3X1vEs' );

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
