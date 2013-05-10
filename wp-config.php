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
define('DB_NAME', 'wordpress-comment');

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
define('AUTH_KEY',         ':,qiC(hf/P=V)wc9n2U^:rS~;LzUs=4;>Ih)|;R*fFd.R2+U&PT/M6_KfL`}fYF ');
define('SECURE_AUTH_KEY',  'c4I166IsX<k.iL^~1$[]v[Hv_Tx,8BoSr<Z7Hqtw{B&75y^Aek6y>k.Wdgg8q48f');
define('LOGGED_IN_KEY',    '9MWp=N3C?%z.JCpW_8)9KKI7%iM`25>1y% xvNMoX;TX2X<d=0gZF `oD-.-[iS@');
define('NONCE_KEY',        'h~4Ns ATeZ8Q_2{6;V1Bg[Ax+WQdZ>)>=h&JU|qt3g2sx]HH18&NB;6653eNS5?p');
define('AUTH_SALT',        '7@oHu#@!sf5XBT@!lA}+}:Q!n~e#$!t(e(9W2km^Mk@$2+zO[D TCg3]oJ,=a8T&');
define('SECURE_AUTH_SALT', 'PRK^hcUE(T.Pk7U=ffwL6npHnn21bYdHAigN#7{(6rtv8;@(itaH*DF@ODhWq@eU');
define('LOGGED_IN_SALT',   'Zgb/OdRg;i1.-Pi;mrk<zBjbfl3wl;4S@h;?fzoD0WWg+Xt]t1 ,|axRx~g>zT8A');
define('NONCE_SALT',       'yo.?3CH`VH`Q6qoI*qDf#9~~B:Y4O*[lX~BlN&r?bm745R:ZEjQxc8!e5=z+>)5Y');

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
