<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'comment-twitter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '&n ;yhhl69) 9mp%MGZ{; Y7%?s[Z4zC)PO/hKHwAlw[!Pb8=<_E~v%2ykqa4wS]');
define('SECURE_AUTH_KEY',  '~bs4l#2QiBWm|eJ ,q[$)zZppL/$ELG9l0|>r-AB/&LtS[}$0][7KfTMT{G8hzec');
define('LOGGED_IN_KEY',    'lYdlYGFE9OZ($m.M4<4FSJqPp11CRr]T&mz$%?o6SY4rgSo%-pNck(bj.&q2,)]^');
define('NONCE_KEY',        'jV?s~P|B3z*3C$CmL?[mIR#@80`^XJvpFF6Wvh{AqSPO:GmgQ?l4~TbO#n4=y=];');
define('AUTH_SALT',        'r=wW0/s_8#~1{tPUQBX%$Exli{5`5&3KqyXfQY/L]*Y:fa%I%(k5GZ<@//s21v^i');
define('SECURE_AUTH_SALT', 'K]2&`D3/wzy^[q/a)Tq5vI&gV$r`kkuF^v|i(TA>bpH6!o]l%LVE@dwiuG9_ lgy');
define('LOGGED_IN_SALT',   ',8[9X;EYO.>=mlJ6jJd0_N@pRw!CRHVR3g{6^*6+>g>e-i,b*wAT[^v{?YLv|^Z0');
define('NONCE_SALT',       'mYDS{;y~Qv,tR]HDjOvbnwIn`-e/%iH;:o2c,cu#7Z,)*e#kEj~o?ZH3)i/{DglH');

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
