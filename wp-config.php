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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         'qtDj$8*@>nC=B98xFDyW6QnB~&%gHt]R-#Vf:WXQDHh3FDP8c0e[D}5H9kn/Y?yw' );
define( 'SECURE_AUTH_KEY',  '4rxgCLlE?kf ph&rJhRE4hb?k[:whA?hN(L-(E;XADx4*g.MnaSHkDatJs`]Qjif' );
define( 'LOGGED_IN_KEY',    '&sPL*v|xx%2qlV]Vp)K>aBm~~)BEXksLQNl[g>cdQIIB}Or$.8|vcI/wQDA,=`#8' );
define( 'NONCE_KEY',        '@6){{b(N:>rMD&VXhB%Qecv$-JP>oMy9xdqN{i>Y1@I`0Fu}`:g0ayxN]`Y)ZU<l' );
define( 'AUTH_SALT',        'Ys?px[zhH/l2D91_a *%WA0*tf?w;B0UYmh882iMP%efw`5OP~NnJx!bk+Qlm1UT' );
define( 'SECURE_AUTH_SALT', 'yq@Lq^Z@p)klm^8Fk9T;;tx2;_bc(e}w3Z7[xS#IC,KBS `2*W*|R]|D)=D2}}~E' );
define( 'LOGGED_IN_SALT',   'u6Q`7!#C3YK(#FOSXNcupKgL-@W~}*mkqe`iqb@yjtspk?qk-6,g.[6+CoAhD4J`' );
define( 'NONCE_SALT',       '2|j*7,(fg&/~?|d&tjC/AxN ,Cs rhXpSfew7(UZlLb?=CCCO1.AA?cVm>(S8awN' );

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
