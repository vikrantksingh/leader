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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agilencr2021' );

/** MySQL database username */
define( 'DB_USER', 'agilencr2021' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Agile@2021' );

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
define( 'AUTH_KEY',         ';ozb1*C(s`eK8[&);T1[#)8rZrj|HtdF_blE-Rz0[&pAze#@[t%Xv&z,n<H2CiS^' );
define( 'SECURE_AUTH_KEY',  '0kkWOC_`vd*x0*aQD(_t|:?D*Jssj3SHta34}w`u&/t{v;>d7T*,So]Taur]UTy~' );
define( 'LOGGED_IN_KEY',    ')X-]!s)d&V7qwAf~Ee70K^ H{yE4dqI8Xm;y:N%HwgiA$=HQ-*Yd[,IO;L#Y7HFg' );
define( 'NONCE_KEY',        'O5NzI=)m4Tn% TXI8D48&S T|U,c:#Cy#0fly,!7YP-et$y.~Jb7fj39(`vRbPu3' );
define( 'AUTH_SALT',        'sr}idtgod=Kf8Yx09 y^;G`j.WM| jkR}=VrrQo]| 8U<;+c!0ZitLI<Uzi&Ra<y' );
define( 'SECURE_AUTH_SALT', '1]-o6}[KAB?G8I9h*Cr;am=n(p.Zb6P.SPsfO. N/?YZ:je7>,l*lA[D}(0?[=*@' );
define( 'LOGGED_IN_SALT',   'N[)Gih2NeY_T)U*u@0X@1c#qjEuTW2TM}ZCWAqQCu)o[Q}:LY^Ik6R0{J[[QEB]3' );
define( 'NONCE_SALT',       'XhIm5^.!ZxWC>t{dR)8n 0W:K6`Ej@KA77)Q*6LduQgRyC`&1+^&C`vZFx0x?Sb$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
