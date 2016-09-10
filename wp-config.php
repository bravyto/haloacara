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
define('DB_NAME', 'haloacara');

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
define('AUTH_KEY',         '/vGC ~]d@XC8{)(g,rlL m8b3H2<8xe$?hp Iq:7[8(LBPxzR+]Glt^D23xU?IZA');
define('SECURE_AUTH_KEY',  'N1bFd&J~SNX>GFL5A{^x#w]LC_6#Wo>igSR*Sl&Jm,t;*a,frXy`^Qup%:y1fqpL');
define('LOGGED_IN_KEY',    '$Iy+BUvCK|<S^16eb2(d/J.y4x{Z66b|9EX/6e8=R2PY8:rFx{#k~=/W!nl,o,r3');
define('NONCE_KEY',        'x0r*X.zHZ]11)DQK??#TCWEbm(?9Ri<$W!isDQ=f,Q$zrQ{AhGZOvvQ`[huqVW1R');
define('AUTH_SALT',        'p<xeQ;WalU` <my@:A/?8W9?vCc&U+8.B_$e>~M%chn/!vC{q<(njpZavB&=dAYk');
define('SECURE_AUTH_SALT', 'S)Kb*QDY*vDcB7V#V_zFRGBCsq>^0d*~hGg.y`kzx0cn1iY[-+eeaTD[c21caEx(');
define('LOGGED_IN_SALT',   '4qW?V8/p$4(wf@lxiRnsI[<2l)S<lp%?csHPhaRhu2.Le>&nn$>. /Z+m/Vc9xW#');
define('NONCE_SALT',       'J>-yY,s}9at&3}$qH/a3{hJkA]G@n<=VXs{CLfK2dqk&f,S3Jg8PoxhFxlDT)/8o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ha_';

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
