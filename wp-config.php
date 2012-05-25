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
define('DB_NAME', 'db404078502');

/** MySQL database username */
define('DB_USER', 'dbo404078502');

/** MySQL database password */
define('DB_PASSWORD', 'pr0ximate');

/** MySQL hostname */
define('DB_HOST', 'db404078502.db.1and1.com');

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
define('AUTH_KEY',         '(qH:;?/:q@cV>O,Xr!-,xQvCM}JFGA-_^ 0}L%Gr)0d6!>G)77X@,4U(_;%$bT4R');
define('SECURE_AUTH_KEY',  'XEPPC2JFNB8f+.P{^cW]-iS4+POmrH8R52Q<xRw-9LuB|8Hdg=,md>h&2=}kZ4;/');
define('LOGGED_IN_KEY',    'krb>x?j*T}SwOipn2[D3}r|enAb7DX9 uOq3jEMTv-VN2X]JJ/%#$%*!R-p?b8T.');
define('NONCE_KEY',        '|y.k^MqIk; ,iFFNi<!+7lV|G59|0?dSJ&2|(K5y&4j[S:pt+Wq6i4+O}0KWOL|Y');
define('AUTH_SALT',        '{=-so.yT%ulTPE9{<jr~7dI:[v/kJ>>jiS^m3mBAb(0IQIiF86C5h(-hW;#>1Z3h');
define('SECURE_AUTH_SALT', '2.*|58-;DP-9WXLW;vj@?-n +GjfOh# N_,ubfiaT[A`O)1|,Yx+~wj;v$O|D[9a');
define('LOGGED_IN_SALT',   '|i/iC53#/efzaOiOQi/^EL{O9b+EX#/XSWAk:;]g6eE+7WW]vjt59wC?LSHbtarc');
define('NONCE_SALT',       '991=I<oDuEa-DB3FVud(p76m1J15?PupK3O}]W*li~gJUU>Mj-YE0-D+$CquN@u@');

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
