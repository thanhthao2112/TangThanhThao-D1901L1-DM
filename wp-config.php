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
define('DB_NAME', 'thanhthao2112');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'myEW>sOSI?Z(l,=;bV/96d6SAaWS!$iC6KR.Wr}=8|3>y(nVRQ#EI{p)6Q4Yc]TQ');
define('SECURE_AUTH_KEY',  'tNDpDCrkIvrdhpbeD4LUyK?q$#^r$woDMX#gusXwVAwVc#H=Z~miNa%VT:F$B]=e');
define('LOGGED_IN_KEY',    'U;]lwsD*)/QYi!Psm*7cV(^WlwE$6Y=s$Zg9{QSQPA,{OOnx<wDU:Em>%if[{O7_');
define('NONCE_KEY',        'yC;<?)yh&-j<_p?_Mwzd}wNH v6>&a>jJIrc)@epOurG^QF*`mD^de#{zJn5o^-!');
define('AUTH_SALT',        'X<wCXp3E>glS@bV73!Y]kwl2~bFdH-/Up2bV#zQq?JcU<Z3Lp04-MOcJ-0gEfSW@');
define('SECURE_AUTH_SALT', 'lE`?zK{**,GaH_h>rvD}ADn;qxlUwF<<Pplgbzc%>/F1*@k|Xq7P&|qz5Mg~7y<q');
define('LOGGED_IN_SALT',   'M YURd@u4U5nUCXq%9lglv+H^!)36:2Br.T@wU:|vux[EG@-:9RsWuH@1l$Z-<O]');
define('NONCE_SALT',       '?I:+m+3$6)S0$B@zNGFHF,P`#JobM19){[~~+^L%^1BY!]RV.mdbkB`] 13X=hK(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
