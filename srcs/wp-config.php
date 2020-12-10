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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'n~-XW,IZH;P>DGB;>(p(2~q=?n-L#{U(c)H 8OW,, CaVQ2(h+isTxnveei}V/?6' );
define( 'SECURE_AUTH_KEY',  'ymsS8)CD]|jL]f+YvN62%#]${5Ka,RLG6I[{86VSx^s$.Lk(J0te;je}.G5OvcND' );
define( 'LOGGED_IN_KEY',    '^L1ggQb|]d?!f*&n 0Ft27+F Vae]c4Dt6::-7bM*t2!5e6U*500S+g$5_OXFQ%?' );
define( 'NONCE_KEY',        'eJ>+z_7G%gR:P>1=aJhEiwy`J2aQNeLSX=~?1SORu)sp$4VN$ CEj!D[CfTIr_ F' );
define( 'AUTH_SALT',        '#gagg`(yX{Xrh46F6hE>N:fTI[?Xo~%oE0,WG#vHCnFa 1n[}`2TRj={V@>@$7Kh' );
define( 'SECURE_AUTH_SALT', ']k.gp.zG+#gxEu.=6f=`NzqQ$#L;#rM:BNUbzu?@6UI.&{i~2 VLp/|&PqV}]S$<' );
define( 'LOGGED_IN_SALT',   'HfCU6t*;4e7-osb.ys}I4}vh7D,Ut~!~lCYU5n;4t(e[86fQ@13Ta`E|t#EU:6`;' );
define( 'NONCE_SALT',       'XLz$/-)^sc`NF1#;riy7>&%!Iq[{<eZ*toO)W,Urzfj,WLh1_!`]Fb&t%sR[l0ZY' );

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
