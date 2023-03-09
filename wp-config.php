<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u964429038_Vp3HI' );

/** Database username */
define( 'DB_USER', 'u964429038_gQpHr' );

/** Database password */
define( 'DB_PASSWORD', 'Q5FGWLeuuy' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'L_*Y]Yelud`V>MA|%+PA7.vnDXg-N ;g!0b}MU<mBJpgi)UNZoPPEuxCxOV/CDi#' );
define( 'SECURE_AUTH_KEY',   'pi}``ZB$q@nkkxPt!%<wO.a&lTm&`!_I3[{1t`>aSv_mo,|Ltzufv06%>NQ~Bi_>' );
define( 'LOGGED_IN_KEY',     ']!i/Fqy}_mjK=rAe.Xc_k3 z!{e,MQ,2`+}cxAg;HBGqc9_#$V[63y_/n8S8uy<D' );
define( 'NONCE_KEY',         'LKu$of}&fFg:=3w1)%y,dH}dHuThYYrvmEzPWx-m k0^BJ&VEK0@<4W&|@&%tE?P' );
define( 'AUTH_SALT',         'B==xh#jT E1_9+c~?#doE?/lj!B7tCH59iR[;R|JypPv2=&c$EMMEtuV_Yfp7n+`' );
define( 'SECURE_AUTH_SALT',  '=O06p9Ch(T*/dsyzX`$QlhlzcrN3hf]s+JU8ARL@S`E5H)LMgaoS2fi{TRJ>Jyi-' );
define( 'LOGGED_IN_SALT',    'W%wjkd%<kO6](YM2Vc0u7sKBtS_P[#ps.IUz4&7+X:WvMZblEeU@:h|C*?jn1pTn' );
define( 'NONCE_SALT',        'am|^8s{+khKpCmIfsJpPC$]ofO3rnk/,V!DbR+zseK0.+{8LnF#:%^l/F{/[>2i{' );
define( 'WP_CACHE_KEY_SALT', 'QG!nuMqlQe{lc@``J5t)5)ZE@!T8UAdqgd2?k()+x[*|Gee(c73O?.j1?snB%c8K' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

