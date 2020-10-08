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
define( 'DB_NAME', 'db_seguridadsv' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4Ukl]IJU+Lo+roKm5LuRl~B@H|HPGXQe1A_l:gKVk2IQT3wUo7=9&kB*Hr{Z?{-q' );
define( 'SECURE_AUTH_KEY',  'v(lC(MZwrF).+V<s1;}d{b/YqmOIXF@-#1Q|9f^ln^}qPU>!jDWH`X VCIki<%Z}' );
define( 'LOGGED_IN_KEY',    'YoPmT?RZve}u3${~S:SYE~OPlLd-X@fr,sR 2F|{gNL=]u7-pV3>Lq%eqYJ^Q%R>' );
define( 'NONCE_KEY',        '!Zw*UH*$Pw,^TZa_ikAuiLWS`3HFZQ?goyMHANMLkT]SGj4J`q_WINA7.sglH>bQ' );
define( 'AUTH_SALT',        '[`-k,(9jY&y:,)Ak60p):7VT#ey:/?~2F Dy7!+8l2ze4)b^Vsb]gy5X$I&md5wA' );
define( 'SECURE_AUTH_SALT', '3EJpONimWUWbk/0PsR!NyRlv!qP+kg1%Q[:;}SmS6E*<6{9B(}dlY)l2V1!<?4!}' );
define( 'LOGGED_IN_SALT',   'xFvp%w?`Nn]bMRviBj/FVa1R#v.9F`/o0JL+/jP])9k[UaeUE ko3+_.xYT<X|[N' );
define( 'NONCE_SALT',       '7t5lqPor2FQx&%u6Q2[,TWC@/pb+jzWcq^D<6aVV=H]Nji42P,F?/$e;I-u P=I|' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'seguridadsv_';
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
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/**Personalizando WordPress*/
#define('CONCATENATE_SCRIPTS', true);
#define('WP_MEMORY_LIMIT', '1024M');
#define('WP_ALLOW_REPAIR', true);
#define('EMPTY_TRASH_DAYS', 30 );*/
