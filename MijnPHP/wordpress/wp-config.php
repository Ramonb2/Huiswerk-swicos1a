<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Wordpress');

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
define('AUTH_KEY',         '%(0;ybnb1e&,l`Zo82qV`$uQ;z4A] j8]$:g)UhLs%oi-o~&9%Zh(<jfhzr85Yhm');
define('SECURE_AUTH_KEY',  'cr 6iD?l}FI!G1RSFOkY[v6.b~?sTX)h+r~O?AZ|)H1#|;gRcsYHKn0COaT,7c,g');
define('LOGGED_IN_KEY',    '1ok$EA@<gFCqgUePQ+BV7KZ7Ex(QWc}-D 9Y1-xym/P,MVN3j>w+l-6w?2jAQst6');
define('NONCE_KEY',        '&OO0G8DRY1!2qj0Nz+CbSIa~8ORQ;435s+->Q8A@bpnJv]]b;no-~xn*GSU}&P8i');
define('AUTH_SALT',        'urp9rj&tKWB7_$Fi+g]Vl1.kU3zgRKRe2b=7I_`pE(4z@rTVN%NGX*G|n]}DD_;E');
define('SECURE_AUTH_SALT', ',&dY2$bUlD|xw^h-r+St3%*-Vu_XH@m;?~Qu,x9Q4.6|zdZSCw%^Wv>*N>Q%la*Q');
define('LOGGED_IN_SALT',   ';!mECd9m--`1Q(&p%2(YA^0B1uRRQ<|U%Gc-NUkq|0E07g$-wy:e|;<gBcoj-E_D');
define('NONCE_SALT',       '0f-Q~%wB3gy8-7F9R}(P+eEh(X8gRfX4{^%?BL2o^r7a-BE^dgF~=A#yEH:ZQO]s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
