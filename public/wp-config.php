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
define('DB_NAME', 'csgoeventsgg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'G8!_xHiW`#_dEEZAf,eP6C_y*8/|3fH5bKc:<z6zD>ee+/|Wnk!w_flVCe 4c9=>');
define('SECURE_AUTH_KEY',  'm/W]M!B$XI|%7y.4r1u=steRkZ5<tGZ,8aX~0Z+K)ymo6gOr-d2i?[%UcDC#|jul');
define('LOGGED_IN_KEY',    'n<z-12jc3:D~<p-dTJ/Dn}k78tr^.MXK}Q5PLoAtIrdg;Vpi4Bo_{dS kx}QY^~)');
define('NONCE_KEY',        ']88k<i~3<>Nl2:jTMhzJC2|((scS}osrE&zIwCi5+II1=UAUW;J_n3p0B8R2R3`_');
define('AUTH_SALT',        'UqQwx6[D4?~20uN,Nf=VFJ_F)9tLv.i<Pm9`#H3iEGOj5NfG{m>(6ya|ruDr@IN$');
define('SECURE_AUTH_SALT', ' V;Om*Mwg9AAWI79UzCE11;dou7>5m}~:R|U/JWp+LOPrfft*^g7mS]tA-P=t0,:');
define('LOGGED_IN_SALT',   '?F5<Pb9fz!moFx~qo3}U9_wg3SRL<b:5aq-7Rfa@Gq`jW`=#B8X==b19=h=Td-Te');
define('NONCE_SALT',       '.yyRtnSM5x2wnh$5(KbnE|cG?X$AE>X,qr8G%g9n5[(Y4*A981[aH=_.D=HmrBl ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xxx_';

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
