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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thanhthao' );

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
define( 'AUTH_KEY',         '&gYv:<l&gq63+0q]S|0-iH>tulldI-_8~mB>;DU/^DJL}X^D[L| kSZz >uA/AT*' );
define( 'SECURE_AUTH_KEY',  'zj2Xq m%=W2c0DB`jt^ZKi)Bi}IXg%4Etl/>oq(=oNq|u? F%rD&RpB27E%5Il;>' );
define( 'LOGGED_IN_KEY',    ';o_n|53r}3$E[ra$lgQUZb*#/l}.Vq|8 *D7%KWYq/&[;lX,YEk}l8&ZwYO)l8(*' );
define( 'NONCE_KEY',        'D0aK<ya^$x^Q`KMhSHpA|s?XQH?Acd#WM9[MeKMQ9[,+C=Wg[r%:FnEx@B6>)K&C' );
define( 'AUTH_SALT',        '0Fzgcq/GpB|Oin`0*X,$ ;u5TT3|sh2{]B>HN4~1U=X)BI6#{XBv saG:I5WR<!N' );
define( 'SECURE_AUTH_SALT', ',Kzsn?|H}7iAxf0 /PtlcSt%0_2z;LapNZ.NO5@kImbt^Q#&bVnnrS:NsVj)rIm@' );
define( 'LOGGED_IN_SALT',   '9rlqbay8Rubo(Aj(e`b`Hx]$${(?$ YdOGV&4yW6RU@TI;,hETdq!9k`mRm`Z6QC' );
define( 'NONCE_SALT',       'uNE:#x6d{q.!=2:<oEEp%C}rHv>[V.A`AHRB^?^u^H yPl#`3]rczhm/(ax_GW!{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
