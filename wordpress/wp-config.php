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
//define('DB_NAME', 'gold');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'claymoredesign');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '=HFc@8wLLou-{Z+RbSKMv-*+&|q2=Y6aAy|gY~+6Xm{/!t.<jNYzK+TQ0eNh%,&Z');
define('SECURE_AUTH_KEY',  '~@W)TMi/EKEAPkLxO)*SGhK5ZKlM{g5`B+|~5bjA3UJYRRnG[3N5#Sl<Yw$>2`WD');
define('LOGGED_IN_KEY',    'U_%XQBDh[,=?-B3o+2Ur7#W2B}M+k6b%xdA,2LVyC=4!],`3W|SXQFb]J?;.A~p~');
define('NONCE_KEY',        '?+8wKpK)5-;,jin!S8HBH@bW78e:Dc%}3yj7,VSw+CT fZI!x%NtWVBhrV?jDYtm');
define('AUTH_SALT',        'fi-MXw} g1qc,Q(bI@hUH,/pF6h+E8<`VVwMB:N;cGPP?-KggHLQTLg@=?4L|H{6');
define('SECURE_AUTH_SALT', 'j|cl1P(xedX;IK0VDpd }GK4UVy6I~W[zx28JCZXG5X.ygpiOmo|+W!<d0N;k dY');
define('LOGGED_IN_SALT',   'y+HVm7`#;AE1Y !#jtH+(D1e,s8d9^N30Hb@F?g%=siobd.Kc26mh;J5ICWuP_={');
define('NONCE_SALT',       '~B{^gXDywn~lx5~ D}Z<q&=HCgN!]Q*;V&u8.=Y9ThOGc^/.pO-1{flOu+Q{j70=');

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
