<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files so make sure these are only set once.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Studio 24 Ltd  <hello@studio24.net>
 */
  

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
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * Increase memory limit. 
 */
define('WP_MEMORY_LIMIT', '64M');
