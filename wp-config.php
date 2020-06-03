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
define( 'DB_NAME', 'lesecolores' );

/** MySQL database username */
define( 'DB_USER', 'lesecolores' );

/** MySQL database password */
define( 'DB_PASSWORD', '<Les_Ecolores>' );

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
define( 'AUTH_KEY',         'xRE+QR`_K#j;,5>pYwZo;M:|aw~4%J{gm4wvh4aFly?A]!:aPv%LVw0tD-]TDr+5' );
define( 'SECURE_AUTH_KEY',  'G.QR+(O$SLK}Y7K>FIIB-D>ohm1VjSnVpO7C7waA*Flc~p<rIhDPq2{*q~Cv({-2' );
define( 'LOGGED_IN_KEY',    'gf!f)Q[PPyI-LoE>R26b34$vo97NhfGpi]n# Owf9fZ i>uskBHH:Ik[#)IurvK*' );
define( 'NONCE_KEY',        '6rE|TbQf[S@/D%:Q,y3YfAv2rWzHkNN]MmjIKIQI`Q[/iFa^Ev=f2eSqWND! y[}' );
define( 'AUTH_SALT',        '@?1@&MO[JY$Ch4~a)k]<)Cdx)euW~Ub Ju|~kA7v^.IeA+b~7h0&EjNTN}lQwBR$' );
define( 'SECURE_AUTH_SALT', 'w~,LX/n1Yx;*x/7[k,ooaCCb|~2f^jCW;$E5^P?5unG@US.n&deU$Qdj2IDwhyJK' );
define( 'LOGGED_IN_SALT',   '7J[4U)&_0on3AB/MSg#LnK6oF0fR[]t T6ufMz,:zMtbJ#c]o?Kfm?)ZkpNrlO=y' );
define( 'NONCE_SALT',       '4xRYr9/j^P7H8ofl;O3NYaCdBbcot=o1Caxu+rlKHry)|m3ReMrTB8x>m 4EhJE5' );

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
