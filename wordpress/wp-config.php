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
define( 'DB_NAME', 'click-contabilidade' );

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
define( 'AUTH_KEY',         'T{&_<d`a&rN@~(}>Ek:}-XhQAzZfKy.aLJ!RJ^3shk^zQ!qs:za;uiKQ35kC4n_Z' );
define( 'SECURE_AUTH_KEY',  '5mn}K>mETE6N1bK7q[mJTid3{I=JR#16c8,V<2U8yux?3H|YulEB]yd`(i8D`kd0' );
define( 'LOGGED_IN_KEY',    'vM.)XaQ>070_:(DAuaL)jk :}F.0K]+k}?#kyCZjh=4z4O1*|Qto*}sX<Ml&kR@f' );
define( 'NONCE_KEY',        ' f+3rW;>slj<O-X$P/3*#.<vf;PUE_SFcR,rt*/?[!A-ub$x1||oPaZ2vW=X.CV%' );
define( 'AUTH_SALT',        'mc~o^PNc:!-{d]Y/JRZd>s^.wdt64gTQR`80Ow-`6WVIqX[(o(Jb}l`W/t1/rlCC' );
define( 'SECURE_AUTH_SALT', '6,ew5!h9{&-_=)lRc]*+f[{>4YpX<]G%S60AP,HV;VzE_lT9E<tLA<(c=]jC?g$%' );
define( 'LOGGED_IN_SALT',   '*aL00BC(f?mU8b:{cqWpKZknNWRGCjdz:ndP|U?D.s50<|.P`UNh}KU:u`Oqya= ' );
define( 'NONCE_SALT',       'QR&n(phjcv/g5pp0z1bgo!s,0YLMJ)C+$uAZ9}M5Qa2d(jN$[Ofp!rn^;p6SwUo<' );

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
