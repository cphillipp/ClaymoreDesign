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
define('DB_NAME', 'claymoredesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OH_LK#yW3C>E(e`)T~T,;4H,6#$P}i-)P]OwxfpF&VyCdnfQ|dIdf#K7,IM%;$K-');
define('SECURE_AUTH_KEY',  '|]WBsk_1Q80~A[:>>Pv)Ax!asv1t_J#D|>_lx?$fJt,)Q?35,C-+)ms@`FVqKrOa');
define('LOGGED_IN_KEY',    '567zNL7;ryUh#z|XBbq$g}wMiWoK*Zv2HsFYiNt!;bU3jo>i3t4.&5M](g>?m]}~');
define('NONCE_KEY',        '5|;,/yi7*Y0]Y8c|tqB2QXkY*rf0`|=7h9z,yuTTe+q )]T/{]sVkuP(,V.j[u-U');
define('AUTH_SALT',        'Br6mL;?M(F|qGGrcNK<7EhOtx 8G-:1e|<0u^fY*/ir~%Zr.Ju<#z,>8GJS,`2r$');
define('SECURE_AUTH_SALT', 'o -[I$cZ0~,LbNMCJH/A,T1|>i12w+c5Yf2u3]u-XY!0[wi;c`d}*:|$}7%tLL1K');
define('LOGGED_IN_SALT',   'a(SVq#;`rsz5d-,+3oftNhg$!K)f|3w6p3;-!fFY/k(6V~STz+9i?T?uv?5QEp5y');
define('NONCE_SALT',       'xQDKOgd>SVj%f&jhWanty+Vz(l+Y`*wM@/DDPpG_<o;C4,fT=O^iCw-f4Yp.Set6');

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
