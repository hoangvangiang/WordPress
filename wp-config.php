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
define('DB_NAME', 'root.vn');

/** MySQL database username */
define('DB_USER', 'root.vn');

/** MySQL database password */
define('DB_PASSWORD', 'root.vn');

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
define('AUTH_KEY',         'l._c7e@O~.bw7p9F/)[dK*$l[&(#gQy=5UQMl/`ObIwo;S<oz9;W,mYCo-ECnDWU');
define('SECURE_AUTH_KEY',  '8)b(zDT0?etgV(40^O,XLr[mOMuI&s?+K}J+*s^fGmV)f&GAi0,=U[>Zj]^c>: p');
define('LOGGED_IN_KEY',    'YaFt*n-l@8a2d;vxSKvXpZPg%B?i37||+sPX)-*7i25|n|+DH.{AMSEUETKmp7d!');
define('NONCE_KEY',        'Eg/~BeQR9W,]VZ#]j^#l4ojr-}=X/@bT$Pn.k3Y9Ev-P2jlT6~K`W3rt`W/_m~Pu');
define('AUTH_SALT',        '!^*r|PoJLSNd+vR7Cl $d_g:iuodb_[`=$3P-EF<V3|<Qb-(&]_?z69wL}PbPc/S');
define('SECURE_AUTH_SALT', 'zDJFLvr|6=p*K+xxp YGTPzQ-?(#V|(`-Ug+a;La5Gare8qGpkaeOX.5=JRS_U07');
define('LOGGED_IN_SALT',   'nujTVK1>C|`2(-Z5y6M+Is_v{|y6102lOPJqcAdB{Pp% .;&Mk=,Q)*qidm{l>14');
define('NONCE_SALT',       'neR T9BL>{A.,goV|6O`Y~Ix|Oa8 /`]z`x0gdSn7:rm]l#:PMPtCaIfs|)GLouW');

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
