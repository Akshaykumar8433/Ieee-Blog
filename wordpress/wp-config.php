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
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1cxHOZ-W{tr`](AA)vz:c6P}N-S hz6GTCg$l3#hhoPP0]j2@,aB)ht!.?nN :fe');
define('SECURE_AUTH_KEY',  'FheF4Xt}qpey-?NK)0dg{,H`}L)Kiw#P0_FgsQc, XkE:j[uXLu+6g T5b3azXDq');
define('LOGGED_IN_KEY',    ',Gi[u{2%za/u>3FXuQ7-9/>bQut.J40L1a(mds:x2 VDA$i~.zt,[Y^{m1Cy74*/');
define('NONCE_KEY',        'D!q)f]S^I9</ckgQobA[_nD0U>Pll+R:6x:ZV2YT8fLW:5T,EcCz])N&v8HG3s}i');
define('AUTH_SALT',        '24`*>cn] ^ryq[6ZXS?8^Ius6lOdo@`PO=uT%2EMo;NOy6^BE<jt?h/oT_#YVGON');
define('SECURE_AUTH_SALT', 'T24s~7+Xe$A*DYXs&c;|m63y[uw=vHI1S4-&2Kc L5zmrz0OfYB zt5nV]iDI#eA');
define('LOGGED_IN_SALT',   ' (kX2K:#>kaK,UZ1l#;XeeN:Q&?}D^%,i-t iaLw$#YB<tw%FMt$h5W474&qB:5}');
define('NONCE_SALT',       'IL.M=No$[6;Tok34OnK{mLtOVv=#hsean0~ii1Ym)w:_8ur[fyA|Qw&Av?s*A5^&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
