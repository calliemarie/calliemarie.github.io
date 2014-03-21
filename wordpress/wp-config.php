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
define('DB_NAME', 'callieandgrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'j=:EA)d6Pdo5mbOSIvWeO+r>N=)4OUA3jIRwo)1+#y!FXbKcJPWnGA).lJ-dcQ=i');
define('SECURE_AUTH_KEY',  '3bgoM9+mDfy+0o~`>E -uL&jwe.lj9K{ZqA3el%X72+kV<gxCQmM8k]D-? QyO_g');
define('LOGGED_IN_KEY',    '}<~J~fo@~QuU0B6{}7oC4[IbW1hSzk]nRK6#&Low9X3gF79nH*7ADv+s![};E:_f');
define('NONCE_KEY',        ':?sWEM;UI;WywFL xy[+OU SzLv_w0>4o(#L96;X^x_:JX#!Kb0-+!B$aa*}ubY,');
define('AUTH_SALT',        '/lrMiE..Pe2?,P!_&ss]7(5]_@2$I&.7$Zah3f-LIU&h1*/4mJ!:]DjK)/yn-L]s');
define('SECURE_AUTH_SALT', 'X]=?>g)_6UvDVwkXBDQIc5(ZgtK<lz|6|Vt-I.-RHvl6 U1;T+-9s$H8k%`huU^<');
define('LOGGED_IN_SALT',   'mnpeV?ROZTfvn*C^yUfD[bruk(:<U VKx-XdVXZ*2dPccQ0qmsh1ma[B1Mkjv2<S');
define('NONCE_SALT',       'GLilJz+>&59s6c3}_coL{FiP!Z)P<E gs7Wr?0r,sNQ,c8!v8/@VB~$W}Yss1/Af');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
