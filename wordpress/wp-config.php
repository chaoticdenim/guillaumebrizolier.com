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
define('DB_NAME', 'wordpress-363917a9');

/** MySQL database username */
define('DB_USER', 'wordpress-363917a9');

/** MySQL database password */
define('DB_PASSWORD', '7dd3f44e6cb5');

/** MySQL hostname */
define('DB_HOST', 'shareddb-f.hosting.stackcp.net');

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
define('AUTH_KEY',         'vCHwNHwV2077u6ShQMC60RIt7RyDTfA0');
define('SECURE_AUTH_KEY',  'EBFP0TsmDlpBmZ4cJ7IHJC7Wjyl9eEMr');
define('LOGGED_IN_KEY',    'yrcMRlkGoHxT8ZXfO9qsDgWrNrCrWsIc');
define('NONCE_KEY',        '1rtxBqjg+e77CSnP+2Oj/3d0MocSidGk');
define('AUTH_SALT',        'OLk52ju/pUC6+qwCXU0ABw39VnI2QHrw');
define('SECURE_AUTH_SALT', 'T8///HRPtfW+YFTvLeksfgdyMnpq43d4');
define('LOGGED_IN_SALT',   'o5Ni8adX/IO32fatDT7r8YNZhaMlGq6G');
define('NONCE_SALT',       'raiv8dlf0pLnZUfGi/3ID1zhQBSunoch');
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
