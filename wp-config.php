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
define('DB_NAME', '4rodas_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ohz+4Rw_YCm]3b<7.Grawl_U^{:,#,]=<}W(?Y+UuAGiUysV3{bdn`5Q-Ot[u+OE');
define('SECURE_AUTH_KEY',  'eHC:C/UQ#W+g_k!u$c Qt#-.S|x!5;>R+R+:4~}MixMx}SAd#6_cx|}m+Z.Or&U[');
define('LOGGED_IN_KEY',    '&x}_iL&uWXK8zK-{q(g*tx?UF!>_DWP=>O$AKyeT(un&i3UywT*@-=w~%DM>_J(?');
define('NONCE_KEY',        'mL_a@wYw.6lkSz!Fe~V$U[fPK(]VDe~Ovlqd],cIW@33<NJ=L5`Enb:z+ELK<e|)');
define('AUTH_SALT',        '5pa2;lyu@gs!,yEaX,P|rf`Mv~4D5=-JYy%*P2,vc*!-LP9YZi-9u}oM-0)xu>+X');
define('SECURE_AUTH_SALT', 'F896C5 }VjKZ-1sIb`*:. +e0k3y1m-.WG$ipx7H;v0Ml]<14%|w-BBv+lX!Zu@$');
define('LOGGED_IN_SALT',   '^:g3~j.F?M{>kKjcYbB7}<swU*%o0*M+;wCT9>4+S3r@&QqNNej|it.lyK_Tmh@e');
define('NONCE_SALT',       'JNy<X!#tn=ny_*9>@e|C?v5,f(qw|5S=aQJQbV6zbC=}xR.?;~^5|3c)VuR|SA?j');

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
