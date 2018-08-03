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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Z1SW>BSTuj5PSy,a%<o->%0)UFmdb%[],BjM&}%d9x Fs`E(;{24GleUb{aV96d;');
define('SECURE_AUTH_KEY',  '$oE U#3xl  !!>|T@b<EontUk$v,@be[Hux;@>zRJp]|?x$e:)7T ]H&WPU4QMBn');
define('LOGGED_IN_KEY',    'a/(<<Y o.k5wn`es~Y)tG[81r(,|/{DB*G~yrm~%JhLO4!&ZR{%7MWQT_u0.=V?1');
define('NONCE_KEY',        '9w8I68o0&BK,ao~B?X6?-ee]{=0V;LpN<u03wYDbBij>abADrBJ<V~ ,5RD#USvu');
define('AUTH_SALT',        'u}OJ&pjIou|b.mkBi ;V;a@xl7W1avaH/1IBG1WI-p!M:JM}|->WWQ)=j#XhPMX=');
define('SECURE_AUTH_SALT', 'V;UI_y(Fviv(oOV[;qmYw{q&sVD`Vy!{tPHupnd>qV|ElBw|cWCV@o0Txra*e7mz');
define('LOGGED_IN_SALT',   'y)4~$=?|c*y-@NUJx V-cjoD vN[U@oxCACM0V8BD3~4ixxXCxC tmiPIz?ufv2>');
define('NONCE_SALT',       ',vPOKm[&,YKU)ZGQ#[}NLGC8Im xTxGmuj-NI4LKVK{~*&I$ps2tS5GV9^ u07s8');

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
