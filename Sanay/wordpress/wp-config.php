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
define('DB_NAME', 'sanaycom_sanay');


/** MySQL database username */
define('DB_USER', 'sanaycom_sanay');


/** MySQL database password */
define('DB_PASSWORD', 'sanay1q2w3e');


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
define('AUTH_KEY',         'oJLObc9fys$L)={{d:tjb2^4!&D(m;cAn>-j>^KJ9GA<G4xWGX0&As.n|_IuiQm)');

define('SECURE_AUTH_KEY',  '0lW,{2U<Z6-=MK_*P)L/EhQ?7t3~);]697fG=HM 0}i-w*Pk*(N9|]k}1b0A|U#0');

define('LOGGED_IN_KEY',    'Xe#FtmMdF0T!Sr@qGs>EH[KYFPQ#_0fO$+s1=*|VL99=e*Bf~;>6DD@RGU9Z{|GV');

define('NONCE_KEY',        'ay.Takv*!8}M,P/{>^<[0;@_:Y~rQdgC5|<sDg3<#u&m|nN#)-mr#tE_-;XV#$$[');

define('AUTH_SALT',        '<=(bh+}#[z-+;ic4E3q5o;T=m{wn2` P9?-E<F$`|aoWO47?m-u|>SsNGI[+DF>`');

define('SECURE_AUTH_SALT', '.|rnm8gG%x+gSR%nGf*P/qs[jQ3-?l<+OpX-*9Hu|$*8 1lsz3&B%Takuv:V x>K');

define('LOGGED_IN_SALT',   'R&}$@t%_)u_B*0[-;kB:ey)!K/(7 i$/aFi|m!44YC6E++~*V&*oUXm0aoB8rN^f');

define('NONCE_SALT',       '.7pQ}|K+dTcU(e-{g`e=(U/M<qXGu6Z_v<ge[~YYF1m>gQi<og!<T{stjG-m-{LP');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rafaelb_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'pt_BR');

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
