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
define( 'DB_NAME', 'Alambic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';PSi0j.uK2u~QlS,N6n?5[PZJ~h4FWV3BGcj1t&&}2K/V/&+9!~dRG5@k9XpWN+M' );
define( 'SECURE_AUTH_KEY',  '~ZwWVrWbHE7u^$[/hZm1m$K{sa0&+G]A`8YU)5R/V0]XQjZW>e]8uU{E uJg26l7' );
define( 'LOGGED_IN_KEY',    'B{`b+^a0Iy;r8qI94ypaj`0z{pn;m|*bs~/KgSD?Dz`/+1Cx)hu`E=AC>|~${$Fr' );
define( 'NONCE_KEY',        'r^}>5UlW(ev=c+4@-|XbssgrRD?bo-&?lXjD@+ZAp%uGOZ6CLdrQojA/(A5nia~|' );
define( 'AUTH_SALT',        'hJibEj0>M$P!_S,VS|3_91j#%H%.ps| %wTo=.~0ly/[iwsr3(1k;#)1jm[ }B+0' );
define( 'SECURE_AUTH_SALT', '$6Zurk 6vo]<7AL#hln&@)#L}%e[[KL.MLlhiqTP^(y$a1~lVQcK=C#&%_2HM5FA' );
define( 'LOGGED_IN_SALT',   'bGJ%}^7)?y!)RT}?_*>FdH<D0q~;|9p6Q+2N34fnEA^d5]HI-i)`H4>tEZ&LNNSL' );
define( 'NONCE_SALT',       '8axc(&:,S>E`A5.[r#!/`fXSKm/~`#p,I:5{ I&Y8JY EC9pe8y>Fee^oDq[5r2z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '33cr12sm65wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
