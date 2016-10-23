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
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':v2dodX>qj>j(=,J})1/k($,5?K_K4>88LE8$),[0%eFTR m B$uMKSMU?NT`Fk<');
define('SECURE_AUTH_KEY',  'wMe$dFCOI^W7vWbpgXTT1)ZVUQ_M;R6#fD3~NKBd[!t%|a-%>Gq*{ @3u<4rBKhl');
define('LOGGED_IN_KEY',    'tec?$  EZ<zlB,tEnNL-1PRYfiW9S>m;b I|+9JJ2_mLa>$*?<tSX@k lNcd{t>3');
define('NONCE_KEY',        'h9:wR|3%/.8WU}U[l$O)n7X*#&_mPI#T9`jODIU|-CrWQ^COH>r8{Y{JyQT&{QhR');
define('AUTH_SALT',        '1MFi!o7Nx;afaj?DLCBztSR@LGs%oiC{4K<b9j(lH$Hk>;?xrp<FXP1cTVfoeh ]');
define('SECURE_AUTH_SALT', 'V7;A]p0kKj3Jq44#&ZMt*8al`w/m,Q]>Dt%[?SUIOI8TlO~x@_h=l{tZ0?kHI]0j');
define('LOGGED_IN_SALT',   'LZ=XQz6Jh1ZnOmNrvoz9p$9-&D!}9S]^>]WE^ACIs%> Bk7Tdc32Y7w)5lH:-3zR');
define('NONCE_SALT',       ':Pogc]_!Ff_q5VR bpbC>AGbBFpolID/Bv@6o+}e2uh6;Yna9LNv&<uUGWi3$y{f');

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
