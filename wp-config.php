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
define('DB_NAME', 'deadeyebbq');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3x{hvPG[: 1= n 6tQyjNMADGeKta|0LRBJeeAp{JX*Q+A:=ZYAlWV>2&A^g,R)5');
define('SECURE_AUTH_KEY',  '--Ypy4!a~aj2`?mMEXe$c5 U)iHB1M&lPv:2ip(|K,|R;cSdy%ZpK|+}RH9hAmL+');
define('LOGGED_IN_KEY',    'UJ4Y1 2Z%)UWf&OMu@3F.^53Pg$cXwfBxZCs{ 9A?a/0(-:yVZxvb}Hd8-4v;wxl');
define('NONCE_KEY',        '*#p+*&RlE|XI%!LDD=-[6Cbr/aL=@baQl V ED3vugB.x81Ud>Rg~s3EK).A_QIA');
define('AUTH_SALT',        '/->>]iiS`1~jnucOD/5h|P,R a4$bd%}j.(5J4~jvu_[BG)R41Pq.ohqH2.AlfO-');
define('SECURE_AUTH_SALT', ')_&?2e#% L0Ar<G[Y0m*c@z]s[;s.`;FibE7opNEs]Fj(~g@1QYr4?`jD0&uM52 ');
define('LOGGED_IN_SALT',   '0f/U 9_e)w,Zx|@!)06c9|:f96 H {^Ll<{v=M]=x_KWV[NY|%5n5DH01TX]J_t$');
define('NONCE_SALT',       '`2F 26b-xJUMxw 2c(ruo?o@44CE[|f,Z&tZAH[yJxwCoi:*Jr:G]r=D$%O:($UX');

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
