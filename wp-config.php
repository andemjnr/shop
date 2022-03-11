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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         ',Lwwbup?<>}J_mEeRm?Ub)u;{B^lpyxG`;<FhO 9C%g=NwZ1_E}rn8z92fy-{M!D' );
define( 'SECURE_AUTH_KEY',  'VRLZ#> 3i(epXRhJ/.iN?5=z6hF0:{,f0eOrqCH``sKLi:[y*/I9{&iCMUX]`M+s' );
define( 'LOGGED_IN_KEY',    '7w&uVNlE-+.nxeewhQY,oP,_G([5voDi5A4#Or*t]vwF1x(5Jlg&szG3kU{wxtJ?' );
define( 'NONCE_KEY',        'MZ`1E}?xX<dc8Q(!GG96Ro.Q7H#GKiQ+/)1l8R Vm,Vdq337!vFd+st{1&}l1UUh' );
define( 'AUTH_SALT',        '2a<Y1dy{.6Pyf~1j^P r{S:G%VnmUYPG|64w|5w eY_T=XpwS})zP<O|HL)d l;Y' );
define( 'SECURE_AUTH_SALT', 'Htwo FMK&Nx/w5S@R}OW+{NnR*s_sjLQ9xkw*f%;:e7Rw)=W!Bp-BN~[fF} sTZa' );
define( 'LOGGED_IN_SALT',   'Wo<?__217)~D WB_@/2eok*R.kIz$./@7eAQ&ca0PEE;iiT}i,JYT_lMn*/7t{Ut' );
define( 'NONCE_SALT',       'CC)fxVo|jf`R]#UC_8v!Xa kt(!vf7&|7dVb;]+Tk* ONeZf}$9Ry^-%AV?^X6JE' );

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
