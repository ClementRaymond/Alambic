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
define( 'AUTH_KEY',         'y;!Q0*^wCh(0EH-V>zcpj]p;+k9OD.N6OrqxRgp%?n)i4sVOAx5}bVcDUoIK52Ed' );
define( 'SECURE_AUTH_KEY',  '4Wmd*Dvi;cG1bHZ9/c.vBY9Fzg,FKP?~M$X`:y*D,0`WsA#395^i]?S}6^LO,6,6' );
define( 'LOGGED_IN_KEY',    'TVm*@piWtY/.;VXa6bN.weV9NRLG00MHoZ><+<8>-qT):9UQT3c4GNcn-$,QR1H.' );
define( 'NONCE_KEY',        'oo2pZ<dWo48v;6!Y<?`GGomac!LKOU]:@}`C:NkEL7:B+6wUR])}it!%=*R0Ktxk' );
define( 'AUTH_SALT',        'mdw9H( M)GM.Gzmf*K@`WUg^QC&)0H:h$4]O}2_RTQL`3v*4yW!;PTf~1;]U<m%V' );
define( 'SECURE_AUTH_SALT', '3o+0}=N^(PZ-Pq0Xtof>6!m_hQs>T:j-RF{?a1hA9Dek{ppKEXeYRh;9ctK[J3*q' );
define( 'LOGGED_IN_SALT',   '+-KNDKac%P47OWz>|jFyP9W}L1{hIg~UwdLb]+|E[__4}bB)D-[-,uhc:isjyX_O' );
define( 'NONCE_SALT',       'y!H=c?dpr8N>mQJjrj)39k~.?(IdUW{_Jp<&UN(0j~yt54[Yx`g):NAaef(]0;&e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '34rt56a39wp_';

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
