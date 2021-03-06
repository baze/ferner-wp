<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

define('APP_ROOT', dirname(__DIR__));
// define('APP_ENV', getenv('APPLICATION_ENV'));

define('APP_ENV', 'development');

/** Require environment-specific configuration */
if (file_exists(APP_ROOT . '/config/env/local.php')) {
    require APP_ROOT . '/config/env/local.php';
} else if (APP_ENV) {
    require APP_ROOT . '/config/env/' . APP_ENV . '.php';
} else {
    require APP_ROOT . '/config/env/development.php';
}

// require APP_ROOT . '/config/env/development.php';

/** Require Composer autoload file */
// require APP_ROOT . '/vendor/autoload.php';


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'de_DE');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(dirname(__FILE__)) . '/public/wordpress/');

/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');