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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clandestinapp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XEzFeNK-TeuPm>N.FOQo`Y[m+7A{4jD#p|4?mSgM-f[fFXQem/_9Da@=<E0Cp]oS' );
define( 'SECURE_AUTH_KEY',  '3&5OA1d^K.n(3.zLjJ-dHh)[h;@G<G04`l16Y*V=D4AxW<rzBSoM[C-BxXp*fd/;' );
define( 'LOGGED_IN_KEY',    '*8O/<P%fjkn-1NC4:RVD[mj&c|vl}9;jqC_D.5`)e6QWB6=wNhzbo/!$wn)!{zYG' );
define( 'NONCE_KEY',        '} j7TxB}9lI=u-&>xw@Zmj9JT|vQRE8k,.wmRUH7|vFnJ]V3+trn4A$eOBa_8wn;' );
define( 'AUTH_SALT',        '`LseEVV>`d@xkpJK+Jd3 Zy|4OC-hb@ptRl~q|CR^u_@6.fHdbDSXuANA-#}9QJ1' );
define( 'SECURE_AUTH_SALT', '1Srtp<&99j:4O%68:RZX?w)O6)g?1h=TDHQ$DYm4PRU&#^T$WDj`h[UGL^A,jHep' );
define( 'LOGGED_IN_SALT',   'R=Z7U$:XC+| 4.tnV/[9$tsK!C;Tu&YN}!Mx=V5AtmlxTGV<@?2gy>!8N;m[NVS5' );
define( 'NONCE_SALT',       '{;RzFEP]g[Mp-l;G@H @mRr^i,Y]4T<uwhV;mWT`%,EFh#C+2O5cN)pd[Qe3- RQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
