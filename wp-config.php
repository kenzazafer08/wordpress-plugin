<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nUf$(}6IDCP#yzh;4An?DNt&`2XNi48+U><h:rV0(Epj ^zx}Aj |$:&|SBaL0c)' );
define( 'SECURE_AUTH_KEY',  'tz;-hJ*7~x^W1^q;qh-;H?%P aa.M=uqo*/B<=2>MFeK8|[)vN@Jp<m_hT& gi/=' );
define( 'LOGGED_IN_KEY',    '1P}0rT-9k**uZhNzM|>}sO!VUkxv(ydRlgyzXa>^ujVBA;0*pH@Cn.J^8$7 fC||' );
define( 'NONCE_KEY',        ':|u8xiHgrUP0%$z6:>]0}<!<n/u?_eNzgdyq=_:[v(57K>#e=C?umT.>e51}XR8 ' );
define( 'AUTH_SALT',        'DyKPpaeoMLc^jeGtii3MNDB3 JegqLAi31BdiklIHh$qKWfdC@sE#j`HMv!8V[Lb' );
define( 'SECURE_AUTH_SALT', 'PpJ#]04u,aJ,u#a7;26Rk%DA- NX bgF3iLLIKUC-(L _@813w;|+?pepx]t+@v^' );
define( 'LOGGED_IN_SALT',   '88SISIwe[NK0vQo;bk@G[6,qhMg||Xc9FGs`v4(q8^bo5vrr^9I+&J2dH9+g~+`M' );
define( 'NONCE_SALT',       '4%S|)47_WH>{xZ;2deh=`PO*FLZuiW;(%!^z;WHGR]9Xw?U?(XpjuR<uqZ|J7NmI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
