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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotelchevalier' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'DVwZrv>spBYpdC@_. _D4YT12>0CQlz%+I}Lg3,5p-@Y, kOF|N&:BzC_1|nA=0(' );
define( 'SECURE_AUTH_KEY',  '/f#=|W0>s4H5i?y@wHp>Gq3XQJ2_UfISx1,BOHGsf&-@I{;j5[9g(I!n^e22C]J8' );
define( 'LOGGED_IN_KEY',    'v]1<ISklclcoKk,<g)rWZxB_y7jF^1Nz($u.O]~95a_b:u.PZjr!19m5[diw_js2' );
define( 'NONCE_KEY',        'B&RlX<]D;^rm|,&eWPo+2;~.lb)fG)~m6+Y4C<>RT4mYGy,2-xh(p!3akZeca](g' );
define( 'AUTH_SALT',        '+8AhQ#1$.O2QjxVQ-IO5D/#m]X^fLI+4*Qwq3TL9,5[}Z}]qrnc9Syv1;@a{VEYL' );
define( 'SECURE_AUTH_SALT', 'Rg=cx&_U6C{|hj9ZB9j71d5aX(k.%h6U?0t|:}lWVw(G;`|peP!>#MUpKmz<Wf$T' );
define( 'LOGGED_IN_SALT',   '^WvvsnxpcOR m=sW>RgKREepJ~h^zPl@E8lSg>ecUb.,:2qY>}~xnTEmbAaX-9Ys' );
define( 'NONCE_SALT',       'pWkLSNfxoX122}x([,e<=:n-*&od_s;!0qYC97/![$<Y].::1el7N+G(cu6/=ebz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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


	/** Загрузка плагинов и обновлений без FTP. */
	define('FS_METHOD', 'direct');