<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5<jR6,?st+_ys7Oe16v4hf>Ja<;l`Yh.bqesK=S=C:f%g@DPt%*Ffxn*r4$DjdOf');
define('SECURE_AUTH_KEY',  '>`fzX;+#8MBFy<$2Em;8SNOew5!CBB1cm,|]m%`x)-vWFbaoekjPn2f+I,:l|B9v');
define('LOGGED_IN_KEY',    '.*30M5nDk(P,6>y.<fQ[p5?4BPhQ]_,H+QK}##H;U+[28QibbC7qA(3B7+9|L*vW');
define('NONCE_KEY',        'Zp@l[^ke}TA)!I(1N|-SB^inm7kgv#7x 4&;&p:w-MJ=|RuIm|&J<+6@Ex<&|o]l');
define('AUTH_SALT',        'tYefgKE|LfkIz(Gughs-+-*vjP>338^fmH~fR)p=[Oo;,oHJX+7HLFc^&x0)22.N');
define('SECURE_AUTH_SALT', 'lpOWen,EX`$Lr|c9aVHh_Ip99L6!/L}koIQV{ltPU|7AKqI;;+I6bLui(O<X;^VL');
define('LOGGED_IN_SALT',   'kV9zj77J-jxTmyS]X`{HUo/E}>z=Lc[~xXip-o8eG|B*]-SDn+w(tSe-ZE[Uw6lv');
define('NONCE_SALT',       'z ,.oKKnS:d.-VxmW^R-;]*U{a>F+EE)u{;*8/buW|kksz.fgMH2NVS-h/MyJDsl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
