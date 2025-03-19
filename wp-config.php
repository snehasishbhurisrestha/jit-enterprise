<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jit-enterprise' );

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
define( 'AUTH_KEY',         '8ILH`fKcw`!7$VHVe2+=a^@BP.W-BeIQ[,QWDAqF-(;+*6pyIA9B2DjAZn^Kg;]w' );
define( 'SECURE_AUTH_KEY',  'eI0_CfKx#qY^Bj{HS$zn<?MiAO0~I6d!}M>g)ZNF)^,m:hu8z^#w/|&Ak1?Yk Z2' );
define( 'LOGGED_IN_KEY',    'W$VZqsk:9t=EKE@Dby#|)B9.`gLwj:/UeWSeji;NT*!g,oAMsx=*Pj?2tSOd*r-5' );
define( 'NONCE_KEY',        '(iQ-6t7L,4jVIy?aJGHx?q)+7 D1.MZ@t] 7wG;-nsj0yu7w{aab`mC&mSe}%nJg' );
define( 'AUTH_SALT',        'nJv/0NRB4?d/LxTSPGzD8r>n(@L5nV<$3ZU[8awIkz6HB8.blGte[Is!KfXIGoj:' );
define( 'SECURE_AUTH_SALT', '3O#*h0[K+*2F@Y4QL8)61$bn9wNju_5h )Zx?pop+2y_JHi2A5h4G.SxSeZo5:cN' );
define( 'LOGGED_IN_SALT',   '7vM8Sk#Z;3U|7BLtR1c@$E)|1D$m/iioYrwC!pX2.h(q3%+K4|0<ANLi#:Bar ak' );
define( 'NONCE_SALT',       'gN[Y39vyuH=7bCB1DN`$Pulkc wL2z6#XTBgkpZz;$4N719)#cVvzl.JY!DYo>S4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
