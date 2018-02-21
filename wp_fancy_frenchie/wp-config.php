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
/** The name of the database for WordPress */
define('DB_NAME', 'wp_fancy_frenchie');

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
define('AUTH_KEY',         'c:xI=];yN$7$7Br &g$BqlHyq5}zFa^:|e+~WYQ&$#3[spSj<^OCXG#*p39are;0');
define('SECURE_AUTH_KEY',  'CMD~ 8CW)hTpxqC<2hIKU(,)pD1`[~Adxa,86TD7l7]o`cYst]i.I{ZpDDPPi6:2');
define('LOGGED_IN_KEY',    '_4b5^`rTS1AF#*Tgyq0S5+b#;YInd=P4o|eIiOx9%B~(,O1KwBET$dY%^!FFzb|{');
define('NONCE_KEY',        '9<^(8d+bGc)@Z*e|yKl:fU5H@NL8A[Dza%e%-@Gz}UP&mQY;3OQ]u^aKET3ND?XR');
define('AUTH_SALT',        '=jyRA)IBlec,@InJxm[unT6)(!YRtRH@-]7>y!R%+qvS1[/Jpvf|2o-D.M:oSp+H');
define('SECURE_AUTH_SALT', 'Yq3ht9GgcKq|8nU+_m~.DuXE[Ad,/! S+FX:91H!*O2gsk$nJ!!bj5xxu=0hBx@F');
define('LOGGED_IN_SALT',   'WAp>LkphTxu(g5($K6N823xH*b*@2ZI+SA5I.$j(r/0N g0L2JrW`l7qOsC.{6*4');
define('NONCE_SALT',       '?=wY]=21qf mwZE^ R[4^J)_j&p8$ZPxM]6*:Pb5C-IWLu+)9GMD7]*e->]{&.7A');

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
