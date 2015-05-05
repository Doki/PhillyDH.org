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
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'phillydh_org');

/** MySQL database username */
define('DB_USER', 'phillydhorg');

/** MySQL database password */
define('DB_PASSWORD', 'J5Unr4Hv');

/** MySQL hostname */
define('DB_HOST', 'mysql.phillydh.org');

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
define('AUTH_KEY',         'L2DcXznZ7IJNEU%G;?kUouYSd?%"rQP5/1S38(LtWaOiB?f&A#!pIr@aLE;;NtUN');
define('SECURE_AUTH_KEY',  'j+UwJ(qAXmh#ZWHrB"WNM(8yD2vDgStRMqHeZlMnHOcRUmyK$#*LQqUU%&ovaK92');
define('LOGGED_IN_KEY',    'ERX@1KvzhnY)/!KI#_(FQwnn"~lBD`~#4:(Suxh1UsR#OavC:sE8;3;G#7kASJ#l');
define('NONCE_KEY',        '4OF@w21JnIkdGocBG:^unVQ|:Y1bMLB_@3aF1%qS09$c%7)@@TgmC4VT#9x)WEaS');
define('AUTH_SALT',        'kfS3M&y^j(OhClXNh7V4LWmjo):nTth5BxaIlU!U+(7Pk$NfYaQ!w;4ME_f29va!');
define('SECURE_AUTH_SALT', 'dvMMNxBY_F/2C;xA+)pp:9N!mH_^bGlX0Bf0Y(Arg"M);qz#;gt6e45I|5b%gZek');
define('LOGGED_IN_SALT',   '$ACB@YydPj%dPIb+#e@ut")(DxO%LSXWF(n:dSs/sE|7|lt:*+$+zEymJrKE_N?6');
define('NONCE_SALT',       '?@2@_K^hz!1+e^W@Vy62I/h^vXeD2zon_&R$(O_szUO5IpiL|l+PCmJQppW/wbfh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_srm6eh_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'phillydh.org');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

