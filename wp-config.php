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
define('DB_NAME', 'ydscDBd4r');

/** MySQL database username */
define('DB_USER', 'ydscDBd4r');

/** MySQL database password */
define('DB_PASSWORD', '0K5syj28ve');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'p]t~;9L]9LWhKWht~ht~:9~[9KW5GSdpO_:s-![4COVdCKRdks@Zgs-|:sz!}4GN>');
define('SECURE_AUTH_KEY',  '5OaltOahp-_;pw_]1DK#:9GOZhCOWdlw~Zls-|:5-!:5CO[1CKRdkGRZhs-!@,08F');
define('LOGGED_IN_KEY',    '+;t*]2DL]6DPWiDLWepxWip+_;t-#;9HS:9HSalKSdlx~dlw~[1D~[1COW5COZhsO');
define('NONCE_KEY',        'B>3FNU3BJUcjvQYjrz,}ny^}3BM>BIQbjEMXfny^fnu^<3u$<7EQ{3EMTfmITbi');
define('AUTH_SALT',        '.6HP;6DPWipLWelx*#lt~#;9H#;9HOa5DOWepxSdlw~]1s~#19G|:9GOZhCOVdpw_');
define('SECURE_AUTH_SALT', 'cv!goz!}4B^>4BJRc7FNYgnzUgnv^>nv$>7J,{7FMYfBIUbjv$Xjry,{7y,{3EMU');
define('LOGGED_IN_SALT',   'XMbqTfq*u*AL{APbAPaq+eq*;t.;DP2DSeHSet*~[9KW5GSZlsSZls~|kw~[5CK');
define('NONCE_SALT',       'rcnz^}ny,}7F,{7FQYfEMYfryXfry,{7y.7EQ{6EQXjqPXju$<iu$<2A+<2AIT2A');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
