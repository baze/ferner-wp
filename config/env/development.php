<?php 

define('WP_HOME', 'http://192.168.1.75:8080/ferner-wp/public');
define('WP_SITEURL', WP_HOME . '/wordpress/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

define('WP_DEBUG', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ferner_db26');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'ferner_26');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'ifqprLPy4EPATRJ8');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'dedi856.your-server.de');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
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
define('AUTH_KEY',         '4cq&yi&#8v}|g84:1R8nymB$$t(,Q@2@u}[}0:ztTwCI)=gNh?=^,D0^4E8m{sIf');
define('SECURE_AUTH_KEY',  '!j|&Bz4u}s^z-h>[J|HtL*zeR|SNiueyGp+BQ+IYS%:vx,Gz0BZT4FB}_Ov!Ay|&');
define('LOGGED_IN_KEY',    'O^@6zpbw_BuOg^$[e`o8s0V||{2N=21iP1A.kVo,#>P[|XCu_JSaop8P7WA/-0sD');
define('NONCE_KEY',        '?I!o~2R-cl8J.{p0/U vhD-kHXH-T@$8t9(u|!Q_HepmHgQ:{m{!6sQ?Iso-A<>-');
define('AUTH_SALT',        'E~(wc+^93l^Z<1>OSU55y+FNt=Q.E3FW8iHOjWe9$^>J~P3x7J+5-B&^g..=yoCD');
define('SECURE_AUTH_SALT', '{*!Eo_r$J4Js==R@qqkCTlkbhScX& MgTNlE>&2cFE=OAXnSfB}PS?CRE**@_;8M');
define('LOGGED_IN_SALT',   '=mV+fJZFod?|]9B)=Ab+$?q3.Ix~J*!)|w:bzHeFco4/F}brK:udup+?$W!{y}T(');
define('NONCE_SALT',       'nQoMQ++_:kiq%9_9#5F,/7|v+hrxw<:t5*,])2c/~|Sga,Z/_|6cDBO.2!`j<LDw');
