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
define('DB_NAME', 'calligandivecompany');

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
define('AUTH_KEY',         ':ePy.iec*Oyd4l[7)`ciEQ.JO!A|V&hi!yxnV~G{z0u2k]Hb&C_z^kaxz`pTc,{8');
define('SECURE_AUTH_KEY',  '|,!xbyj/:w42faoVak!#S>;DIg1Z>Ket#={py;j-19}X?2N])D$`.m#~c_ei?EIa');
define('LOGGED_IN_KEY',    'Gc$w4P)5)meB(~lvjuU:^)`w0|M=Ss$KI{FlGmrTd{z{.K~_YMfLwk~@Sz!sSq+c');
define('NONCE_KEY',        'LYrw=@4D&&-5tT6:Vsv1;#=L5Mg]ecU3z)a,x:C(b+{4UT090[r90VIbbH/.!NW/');
define('AUTH_SALT',        'Q,EZlSt{M6 t<uT}sBEiO%yO*tskvdMnNG?h{7=-4{YfQn$f<Z#NH`OaUl]a)mI&');
define('SECURE_AUTH_SALT', '-Mr:{UMJxw*-R(5 -odAw;*UT~_6-{+w*39;(ECA;cX_p_txGi<b:X!mN$1:6V{d');
define('LOGGED_IN_SALT',   '?`mH6!SGFG/sX_~*)OrvK8AKyKKixyIoBQ0:EX@)iDn{[EFSg<$7W*iWOl!gU<hP');
define('NONCE_SALT',       'S>0=z4rYl90{:TZ5E+W1eDay~j@3c.Su#&V2t&X>]ZaHT?E*VK+bcUwkqA#Kt$9z');

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

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
