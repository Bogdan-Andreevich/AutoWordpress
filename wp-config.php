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
define( 'DB_NAME', 'auto_bd' );

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
define( 'AUTH_KEY',         's~DcOyk co*XH?K0NlBr7A79CnfwejA#BK9fc[?+cqi4HYV_q`^4yZ6mA}aPb]xv' );
define( 'SECURE_AUTH_KEY',  'eX8i;CZ-M$5OGLd3KF}s6!}&Q-+VD.rK]kG6@t5Jjr;v{c^m;/ Ov~XrC(br{Sm$' );
define( 'LOGGED_IN_KEY',    'E %2RHP:>vW^@jt?Nq-vEJc)Cueigi3m(R$^K cQ9OzpI:^QKIrAAnN7N;~]VicL' );
define( 'NONCE_KEY',        'xa&b4`S`IX15YmdUf= M98HrF]*<SU@X)(92WWO+>}kQK{`l@mx]_}$Qe&LKcv/(' );
define( 'AUTH_SALT',        '#=niDo y1u6u`.@E$0;>bH1{%rMl0q4x.MeZ/:oFpVgNIzmJ{;*)--u1;O4o~ffs' );
define( 'SECURE_AUTH_SALT', 'Y$C8<K0EfUbM0B^Y8AAUIC|:&!r^Wql(@LAN+iP*Y.].#KTn>:wLT!*T.b[ZK53a' );
define( 'LOGGED_IN_SALT',   'n/Ot/{/b7.,PMM3CW<PRS$-G1MpsMeKuc$jY:Lu1Ga3}tQ[?s NHwZ1$meuu^?36' );
define( 'NONCE_SALT',       'xPnzrA]WpU#peyi(iRLG2dBelVI^F&9x[*nzxQ45vo> VR]J=~dbGr|MJ6/YOVkR' );

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
