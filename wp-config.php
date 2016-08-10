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
define('DB_NAME', 'visitisb');

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
define('AUTH_KEY',         'R5((,bHA/clpeq=z-l/{e5%G mTrhD^W?{s|>+^=rZ$Xf,R,&$9JT{hJ o3cQpdO');
define('SECURE_AUTH_KEY',  '8?S%dQ9 u_x!-2=gr|LZ#GIW0f|O_snP8ya:mFQY/D(UDL@`q#O@[*q8-4[}GO#j');
define('LOGGED_IN_KEY',    'i`d)MY%e3j8jGC4|{Pl0Iv+g494i#k&4]->-0J7ESyma8LIi`u[OC*B)vhDgQax9');
define('NONCE_KEY',        'JC:l/C{W#wNphn{YJ+&6k?n!S$%k^0#Uqt5{^d56JSyE0]d#b:@_qG[Vn8:Z#KK5');
define('AUTH_SALT',        '7<DfAa~%b*ekC;25tz]o5)q-:o?Op}[plltToOF@;[tq!f-mSyW=4NHEY@t$930d');
define('SECURE_AUTH_SALT', 'q~<kv;85cG`T$e{6-Ge1equQxEJVmjYGlz/3fY#Ez$|GZP2>fI_7E49b9QDe$]A=');
define('LOGGED_IN_SALT',   'U>e*@{<w2IW2l)-[e3Q|*)o|%y|>(uYiGE)%*OqUwU^0iTG=-$s>Q@cu.kSN3[aG');
define('NONCE_SALT',       '2tMK6{q;a?{Jm5+KpkVk-YU_~vracY9t/)YPWr?PznUALabOh1@K=U.8:U5Jxue{');

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
