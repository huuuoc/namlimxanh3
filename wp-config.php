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
define('DB_NAME', 'namlimxanh3');

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
define('AUTH_KEY',         'yw8s2>nj5 cS%iLtgJ`W?x#G*v{U/o/}YP`OY%)9S/d;K{l~Ufi2_cb0$$HtO6E+');
define('SECURE_AUTH_KEY',  'SVXewHm10#_e1!~-V:!{*$U8[&W|h38:Kh%B;YOI!h8guc24&P,l^FwqpXf|:7j_');
define('LOGGED_IN_KEY',    'f{r~*{nAs/czQwNNg]ju;pXVQ{!q#UREG1x-RmLqPS(CvRpUznTihkEQg0rJ<!G=');
define('NONCE_KEY',        'kGLE 5m*d?MbE-x&a{~H?JB}wrkXNo$XMejb;|J*|eS^ep.[yosf)JB$?zyd9X%9');
define('AUTH_SALT',        'W2qc`qoFkl2f6AO]oK2Lw2R1z$,MBK1> K_LlMgCvis_yA8vOva:MbU^2w>[#DH4');
define('SECURE_AUTH_SALT', ':/0<>2P=Y#2(bw$ePRLW%2yw:WbD26(d+:G%FUJXhH&wBrdASK:pE@(uL!79uus7');
define('LOGGED_IN_SALT',   '9o3NW-i+L`-vL;tz<d ]|CYjHzw+fBTAnj(cYO{|E,P0[!,h,?5i1ZF7dT1QLp[W');
define('NONCE_SALT',       'v-1LCc.362SGwuv2:qEBj|m:_/+9O(?Ky#Ue^4U<TehWI}S(|SmI|x:Ox>*ENdtX');

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
