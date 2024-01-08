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
define( 'DB_NAME', 'ConferanceWebsiteIIMS' );

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
define( 'AUTH_KEY',         'JO<9h@}[v|eHR*t8w>7rsYTkQ|(5Y^}[(.]91u=0U%fhG2_8ZWx{71Hg$G;zI>Im' );
define( 'SECURE_AUTH_KEY',  '<g4|4X9PDNR.x}NpE&V}xn<;R8(dt/DAB+}9NI/vKGuUv{Y FtSA$-;pB?Tko-:E' );
define( 'LOGGED_IN_KEY',    ']]isw,o&#96*M>3P]C!xrO?;Q4,rEA%!D[7[I!mi-dWnSkGbytsB=<((y230ZV8>' );
define( 'NONCE_KEY',        'n%}g?vIjvqx~H~[Z_}ny9[Ut|e|/QEp7TN9xg3Z4#9fFY#rvD k]t_=<=AX8b@jJ' );
define( 'AUTH_SALT',        'I`r-5Tab3@oOVq0x4%#HLK+O0DOXYiL!e]0>.tKu6JTEj*yIqO;xLxT^ZcWCj#xm' );
define( 'SECURE_AUTH_SALT', 'F+wYrEi?e:2@g%2*ncC&5nUl[]S<,P=|#M+^:>F#LQ.aD:K}6Ef55LT6j6NI5(_o' );
define( 'LOGGED_IN_SALT',   '{5kF?K-u~,_|/jx5i9=$Fl3k]jGBb0&&:rRb1&>5vlX_0Gq93Qty_F+ S%dwfU!s' );
define( 'NONCE_SALT',       'S:+s6fZN}:9;?ZkX[A.3D}C_Kr==@C#*kPl>DC>BkpUh>D|NzRr[Q2;M9Zp9yXra' );

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
