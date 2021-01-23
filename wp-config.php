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
define( 'DB_NAME', 'woocom2' );

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
define( 'AUTH_KEY',         ';exgDo~2l%{RZhB*4F)TU7Gv|>#,47)]uR9O&^_*E1fX2_EgI<Cy{(r>$T7M}&&K' );
define( 'SECURE_AUTH_KEY',  'd!q;[%$O9.N~rYNZVLTR/;N)kflMgb~D)tqv^bftE/v[p!*})?)3o~W-9Z&RI:T9' );
define( 'LOGGED_IN_KEY',    'aFK!G5fpB@-0Kz:%4}yWtGJ;~GkmFW50&d!+;Nb9iG~<k9N9./*=Nwj)gIr&PjH`' );
define( 'NONCE_KEY',        'DXCEN^4vD8j2FZydXC!e]I_OW5 ESQwN-M4$v8Jqa%7XlYuLXuCv#t$$NDfVjoGz' );
define( 'AUTH_SALT',        'vFMR8]kOEg>bTX:`dtY!q|7,vO;M/BF8cYUFkBuDV{v=6zs-j.}:;ow7CR1-&9]@' );
define( 'SECURE_AUTH_SALT', 'I(cO&{7gskaGwcZ|$$x~c{ZocNr~T7m3_21jTsWM;r97v)q!8b:sdk Zpmy?={^l' );
define( 'LOGGED_IN_SALT',   'yTW!7q&/l*ojBzaw-]@6o@m]]NoU62S)g>lAtj=b30IqWhmv!xBT&4,3yK*Qg}})' );
define( 'NONCE_SALT',       'J!s:v2Z<eWOrc]L<XwW-W5p|/?Kj [{4.Q,6i3@#fjv8/&%d,JKTX!P^kivr=u1Y' );

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
