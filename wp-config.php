<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Qwer!234' );

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
define( 'AUTH_KEY',         'O;KTA(p_8?7bHx~U4G=d`UA(yr|K*U1Pb!,6rZm{(3izw-1?[w0zSC}+Gr)GF?G_' );
define( 'SECURE_AUTH_KEY',  '#8/?r-oVa,4!A{Tph4gzwWyFVp:?-+e:E+]smH%Re1Ble/5Q^vc@sga:fkM(ilxS' );
define( 'LOGGED_IN_KEY',    '#k{VN|qNg]SF,6X%U-LH3FfwAKav0u_)EjgKw8}yR.1fD]E^9]1{ Jf%[j#w5+lt' );
define( 'NONCE_KEY',        'U5F(]M/2{wnA%Xv{BRj,F(t2m;[Ze)=KP7Xd$aArUKt.i;N<R`[v]w&r?rC$X^g@' );
define( 'AUTH_SALT',        '=7.xPWwzOL`i@b[1$upfqj24VbW+zug>z4pv(cz*o_-eS,JGxu2u/c D%6Ni9AXK' );
define( 'SECURE_AUTH_SALT', 'SwogyXVVi97]xTU)aZDG!<1]T/))yGdz:JeTe d:j[2J{DU|B/PBnSe|niC(!p9c' );
define( 'LOGGED_IN_SALT',   'q$Ee5coN*O)Jqf59tb=_h[Dxly$~x5DUfi[F*q4[^{k@>By^VfnHu`Q*I5t}s?S,' );
define( 'NONCE_SALT',       'EepCmw,ShHd:~|Q2*->T<tLShjNfi]M;/U]+.k:k9%ON8#k!tqI(l%qU~fk.+zgw' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
