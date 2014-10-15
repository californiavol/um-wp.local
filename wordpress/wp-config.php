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
define('DB_NAME', 'umwpdevtest');

/** MySQL database username */
define('DB_USER', 'umwpdevtest');

/** MySQL database password */
define('DB_PASSWORD', 'uMwPd3VT3$T');

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
define('AUTH_KEY',         'U>NuHGL(j)^p1[tA|N+f0b0A:c6`T26k)mzX} @y]FM>%2qU5Tp,%QSqd[K1J^@v');
define('SECURE_AUTH_KEY',  '^J)1U99%WFtLH}Jo:Q]#=X?&o;1)b[@2{s(GBW@VU<l!&tRjT8,+fd9a{[<M`2tj');
define('LOGGED_IN_KEY',    'Bfq(+=Ld^XhQO(2gah_Mf>$a3H$)ThE&}3@+T%+fm4O*(T%9oCXAY6^jgG[ P)ia');
define('NONCE_KEY',        ')#G)&ML+O3xYpFAgeuiS! M<H@Xq{Qutv%8@>Senhx8n{>c;6HqHu88g-SbeV>xt');
define('AUTH_SALT',        'gr6?UJZm>mb%`-gz-9]@Sg&-|RbG1;-S7%>^I$C~a7t(SS|mC*+bW!q.Us)vf+7>');
define('SECURE_AUTH_SALT', ']4 3*K&Et!ATSr(*E<{v(!?GPRlB!yF]<dV=rP)j}hWHAbFr+Cm%J=IKjuHmIr<q');
define('LOGGED_IN_SALT',   'KUW)Obi>zXf/3h(ak@XTMBYV;^As|lr=8eaou.)x|i<A,IWm;*WPLXEg75@;VT>O');
define('NONCE_SALT',       '=Uu`auX06;HhDz#zkU[g]?Vzw| zr_y1;$*Fi;/>xJhF)c[z#Hg:Gw$+[,!-7ui$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'umwp_';

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
