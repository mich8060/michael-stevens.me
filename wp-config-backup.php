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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Mo87zOj9]dQw|W.-O@lJvwOgD$|Pi[v{}*G4&RX.i7K#M<T]iHV_.;=h)Tj0cHam');
define('SECURE_AUTH_KEY',  '+!u&Hsc(f-_q6Hr;;+4YR;1T||wmj<T tKMo[(sa{}#Bq:1*+^v>!JrT|E+OEbcC');
define('LOGGED_IN_KEY',    'R7/H;>ws`&y+_~D_F|`o~Ps);+`Y1=RvHsz9*]n~IBh)<Vn<BK9-JV *#.4b{-j-');
define('NONCE_KEY',        '~e[+9!E@cjTi!d|q+:N>W7~0z SJ6Gm3zB 0&,T.Wir3UDv:etA-Z,HL?t (:[-4');
define('AUTH_SALT',        'GH=W1;0#wYH41s2I~_P|~+wJ<F&G|/[_FIs70K[&WCGm58=|Sv,L7s6D;|T12FV5');
define('SECURE_AUTH_SALT', 'EQ`[|P3k.Mi^0+x@|uxq(/6pUiJ>Wst+VqFCjopg+F-|,<zt*[:D*F+70rb(y]^f');
define('LOGGED_IN_SALT',   'OM(rMRS3iHVgZUO}amQ2;CLup/er(+2%BbN469(&DGh%lLhlVoEY]h%DDIy)+|L%');
define('NONCE_SALT',       'p5<eZQ&2ZM0pZv$h{[]5GJE^L+FYa2DZU.:m|QPRI,QE03IW;[fn|pJs.1P($|kY');

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
