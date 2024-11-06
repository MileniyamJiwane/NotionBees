<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NotionBees_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~?PnhfR*j*qEwLYrWF`9=zS;z gzOtL3H)+$Sc&_k<9{oI 9b<`[lRL8O:q6,k<5' );
define( 'SECURE_AUTH_KEY',  '!V,.{dn5cED_OoQDlkO2C#ghSkpM6A2|%/9^%.j`U]fXR:X|aEaCmOP08omTl5@=' );
define( 'LOGGED_IN_KEY',    'O(*|w`f1!O`jn@~}b(=GeV4!5coiN<E;i1cE>_qN?BzECDyn?2Ujw&5eKQ{*T@Y?' );
define( 'NONCE_KEY',        '/f(GF.#04(c-G4s.`u}R#O#[JeV%g;{<8c5NYnf0_rY2YDLUvgaDLo^92}1n7M=C' );
define( 'AUTH_SALT',        '`T*VTl1&`lSkj q74H(N/UHlJ!tW#QSs~}$DiPxpM]Bp^McU_ dLOXm38Yq-ix}]' );
define( 'SECURE_AUTH_SALT', '9w7H=<mir9^1%*4Mwazh&g9$S/D4K;RV_%EEWe?4Kr#?u`braNv~<^=Td<I1IA-f' );
define( 'LOGGED_IN_SALT',   'kG6PID/~c?`xuZ`L5 =QTvtIxKy` g# $ BDqw(v80 Zll1UR^(Q|1Ub6koT07ZF' );
define( 'NONCE_SALT',       '<c@q+g@,df(TR$fZ`7;h-Og>N;cJ;d<0c{cNuKC RjXIM1Brhm#W/9}308a)+J w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
