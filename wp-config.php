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
define('DB_NAME', 'mastery');

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
define('AUTH_KEY',         '`UYQg;n~{O;0]B+rzm;>`{RDGt$V=X^2ASe^G4d;V$*[jsQAuG|k4pXkZM/j^W~A');
define('SECURE_AUTH_KEY',  'nFF%{@^Lw 8MH<1Eui@h%N2Pr0{9b 1yjCdUC=!]j>rZ(3lQPYxut4KU]df:@GA4');
define('LOGGED_IN_KEY',    'Rr/^_.SS+}`2FG_J#-<%_5`3iT]|oi~ dW3C8V/l!5TcR-5,BL&[u#`st<vf{jem');
define('NONCE_KEY',        'X*w&TqPEg2&,kwFSVLM&f;BR_Xjj$Po-&;kSp/gdAD*0aF8@y!fp#z6$?A9R<(bo');
define('AUTH_SALT',        ']~wQ, *IL@L]q>_:z`JYSLQ{9^s<iWJR_U=` F0QmDZM2H1sZ sD{7>Rnx`/XS{v');
define('SECURE_AUTH_SALT', 'a-pX$S]iGV*!B*/L4aSyL_>gy6W0ikfWmhh.k<QphaYSrR9OF)9Mm%{x@)ykQuoV');
define('LOGGED_IN_SALT',   'sHOwli{4eQFZKe7QSU$%3(/0+N%i7HI_lVD/QTzP$2is]+FgM$TdFmtFDt*c9[CX');
define('NONCE_SALT',       '>Z~HO/jB$QLr3T%d(1m@B4!+x]lF=Mc3D*9l?u{.vSdX]W1;a/C6)+B:P{&tRW5~');

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
