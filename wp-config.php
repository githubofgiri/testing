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
define( 'DB_NAME', 'wp_122720' );

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

/** Disallow The theme editor in admin panel  */
define( 'DISALLOW_FILE_EDIT', true );

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
define( 'AUTH_KEY',         'xIcrEsVc?j:8Y=b_nM`E=_F|p,&5 Jv #,*T6HY[5Ry>e/DRQeUD}j0jsHAJIW8r' );
define( 'SECURE_AUTH_KEY',  '(YIrw#5*p3)u>0,%5BN:rExzWTJt;CF<;kl-2+t!`P<CUvKDk0<35;D=10_)k^!n' );
define( 'LOGGED_IN_KEY',    'j2D/.y7&JL]gF#v4n;SzT1c<xw?73.%,.1iZ5xc@RhoNIS&aCCn2TJXK9mu@.yI/' );
define( 'NONCE_KEY',        'VKSLHA?RZI#LrAf{iVrB~2KJksAivZWa]GEMyj:v$.HEIceX9VU>_>d0At1?K(5m' );
define( 'AUTH_SALT',        'e:ZKSDA+&Y]YD6Hl-@.0[2N.]}NI3_*_SL>q d>IcY;@g#aGhn=[sF_6M&Xyj:u.' );
define( 'SECURE_AUTH_SALT', '1s|Vv<d=5o,)!rMjx}@)+D~ag]x+,O<*NscSX6PZ:tjhK9bJ,03Vt,kPb7_1oixr' );
define( 'LOGGED_IN_SALT',   'ryWZxJ7Twh.VctnCM!)s-~ctZ`9~H}8$Y-r)smJeDCJlW=CVehkF<>KZR~iRG:+=' );
define( 'NONCE_SALT',       'DIS{@BCjx}vKJypc[[p|=(E-)5<-$:eu#>N-}Ilg~h9E<mnzpFZrKkXHOp&m;vvg' );

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
//define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
