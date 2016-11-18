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
define('DB_NAME', 'zedityplus');

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
define('AUTH_KEY',         '[#{hs+lp#9;@!S7$k.:j0z[!_b(UNWJ7?E:{]]+^5rI$Q1,74,4]u5iV3gaE}7N4');
define('SECURE_AUTH_KEY',  'dVw87vn6vOX2Toa`)1<)k-;DQ4$6YN#$R`*vVg9:BYf<@J#l.%+QV,otVFv^1?{g');
define('LOGGED_IN_KEY',    'l^mR a^]@z_>1+$~*JyUCbpkk_M2]#ybmA#A_R`M(II1K|Bh(`O>j? YF@M6B91T');
define('NONCE_KEY',        '~seqY6pdeVF(*=#)[,b@$GY?V*8^HSSe[H;aXz.8 3/ehZ7]u; b#@`dqMNQWu]5');
define('AUTH_SALT',        'z9o)tu,4+NhLBq:;_P!w AeTyZ~}xeRE;x*<#24%%$:agLW)$rz^~QZ9O%MiXq=q');
define('SECURE_AUTH_SALT', 'qh1%km~i|HS^N2-UR-DYX8{~OE^ v{Y;&Ps;mAP-=B{2~)(0KX9C*rWi.R >Ahjm');
define('LOGGED_IN_SALT',   'a k:Ems~HBb~0&4eiO#iHf-[Ho]2_sQn6jTNs?<YK Ax`Kn.@T>c[208jDZYXzx6');
define('NONCE_SALT',       '$u=)#X_7O|ZU{<gZn9DK<UWC:^5Y~:$fJ*A.ah;=QbrmF#k)[`L|0`||TTey[qV=');

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
