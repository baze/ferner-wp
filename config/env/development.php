<?php

define('WP_HOME', 'http://127.0.0.1:8080/sites/ferner-wp/public');
define('WP_SITEURL', WP_HOME . '/wordpress/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

define('WP_DEBUG', true);

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
define('AUTH_KEY', 'PBrwR[^gGBvKoYCaEzSGAQ76Wxsv(iHjZ0QO;I=F{CBER{HdtEOCv5qN7a[Gh?t[');
define('SECURE_AUTH_KEY', '|.hVNaEL|Y<c7]?+^Wy>s(`02`@KuxZsmcvY.A/ Y|Wf3}}`8l8w4JZA TwIVwcU');
define('LOGGED_IN_KEY', '[SEoWNfM#DGuelyuMl5ENozF@9vk&s,-{tAD5p$)3>lQLH`2~t|fpj!sQsgQKpWp');
define('NONCE_KEY', 'G3=#1qSV3MWW+PkxA}s6x/;$x5F&EsUKUA8PQK-]LMY]ZNq#2NX9mM+y+LeR]jV7');
define('AUTH_SALT', 'gG`>3r;3z|_i*,R;,..R@cIvfODPnO<q$C)T9Gd|i5]^Z6b!O_m_otdm[DJF[)X>');
define('SECURE_AUTH_SALT', '@p.+r+BL3fHNoD1pI$J#vYN9LB(Tg@%M&,Br:r|:Z;FoRzPl<:]Pj2)S{/nB+Z]W');
define('LOGGED_IN_SALT', 'EiWxW|SNs-B^L+r:8EkG-(/{<LN8 0M-D_afJR/Q;Kx-Ur+xQ|qB2.ckH-P^_H<S');
define('NONCE_SALT', '/!m@dx8o#wp0Kt8Gw~%gv5+9Yq#,P$4E>V5N a/(]?GN.kiADIb3v+&jZ~w/D2ub');
