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
define('DB_NAME', '22541968_0000009');

/** MySQL database username */
define('DB_USER', '22541968_0000009');

/** MySQL database password */
define('DB_PASSWORD', 'an-dent2017!@#');

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
define('AUTH_KEY',         'A[ms:ff.0h:92z-YoXxqmnHsi#5>T qFsJ_2!(q|IfAU1/}Ue9LETYJ*Ba0qBwkx');
define('SECURE_AUTH_KEY',  '.?:-5K1x^~u?TjU<Ai8nC-WZq/B:^j^`*S{gZ!j$4?tf RJ#*`AhZ115Q4~UUQWe');
define('LOGGED_IN_KEY',    'Fa%yTWNm^CQv_A3D%4!vH`07W$D70ieUKdX4m6} k~y@Jm=Gi3U&cIx`plwCmZM5');
define('NONCE_KEY',        'CF+Y:%?}iyzpddtckZSuqc9H<MfNLILf&WcOzsdtu85eGS#qxU8Gi,u/Mx?0y2yK');
define('AUTH_SALT',        'vG0*:bX/sm~G6w#w37[#-liFRdt|?-uD8*fQD.$mrN`luQ=KhdQ)a1QHI0/N$X_T');
define('SECURE_AUTH_SALT', '#$#A[g^tR.[i?`e<eLp,@H45esClzwQ0#@80MOyg+{qg!3H5liau3d0jY2T`,=@;');
define('LOGGED_IN_SALT',   '<t,Yd)]b|xrp!l_Mx| _26e*R0[+4WQ <L9Pv#BKWJW(Fgs.A*SEEdvH{SNKS[1V');
define('NONCE_SALT',       '2UF{fBz9uEZ`75m6MGT!WlXaEr=nUzXK@rd+nQf}t1t7I[84faJK3,u~GaE2yB5l');

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
