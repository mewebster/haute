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
define('DB_NAME', 'shophau1_WPIET');

/** MySQL database username */
define('DB_USER', 'shophau1_WPIET');

/** MySQL database password */
define('DB_PASSWORD', 'oUIlUi<U)R:2VxOlg');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'cec564cf1e9d64678251b815dd2e769428311854300becc75de847cb2ced37df');
define('SECURE_AUTH_KEY', 'ea89d57a60665619afda62673b653a9bca57edbf18dab62e45e635d5141a0104');
define('LOGGED_IN_KEY', 'b938a5eff89bbded6fc3ba7549c2237b95d62d64363d780736a5b040e7466181');
define('NONCE_KEY', '8f44e2cfb2bf20e3c94e3e41e36490a3d2be7fba53949c603f03ff958ef67e29');
define('AUTH_SALT', '866c4d1f0462ccbe921acf78eca8915e3dda7f1619fc704340052a198bd80eae');
define('SECURE_AUTH_SALT', 'cba4db52999e96d429f07e8a0287b00fa454984fb2e15f04359abbc8e64eb9db');
define('LOGGED_IN_SALT', 'dbc600f28e8376efac7931173b6fa3e9dff878ad68158ee71ad78e5df6e8a68e');
define('NONCE_SALT', 'a13e3c93973caa07ffa2bc8bc6e73b2179669cee785a2988db37c51716ae7267');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '0cg_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
