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
define( 'DB_NAME', 'pluggin' );

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
define( 'AUTH_KEY',         'koeF#]PxT}U)E]*BCJ>n.1+/-Pyf/L_aM,%rEZ*~m:Mpm[oW~Ehn[E*%yn/$%tdn' );
define( 'SECURE_AUTH_KEY',  'UZ1>H7GRTK~U&}J3/D?yY:(m`wu60Nc+zBD-p-vI 6vsm$M++&em(rt%cVw07b_p' );
define( 'LOGGED_IN_KEY',    'sI3s]2q(xI]fq< ]0e;A_>W@O<C4k0@UJqac`nm~ibFe1|DgU=Kh4DKnOkXE:2r2' );
define( 'NONCE_KEY',        '1!r}@wf8!7r+7<u@:z6K*![8=q}Ah8p,K]FkMgk3hVpgND+R#0B]l%U.!@JyZPS,' );
define( 'AUTH_SALT',        '?e,()]g,^/0]$VCvd|`o(mg-<Q$MOm/zv&LS6GRMQQQGZS>tyoy@9n|x4SIuyi#9' );
define( 'SECURE_AUTH_SALT', 'kyal|{-V=4t;|$TR?!doGsC6Ym9G01]4.$fdz{MPH4l`xz}BMhO_){EU3kK8+5S5' );
define( 'LOGGED_IN_SALT',   'YTDmP=t`9#]S;{@;X!HTQ+R`I5SKLRqR%Xj60~v:1JwkW]O9yLrq)%YZ~cYCdL 1' );
define( 'NONCE_SALT',       'UXn^;T-Jrc}v*{J49p!e6RG+hFg2O}hLIDYx*JGHoa2W(5fh<C9HzP7Fe@g?GUu$' );

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
