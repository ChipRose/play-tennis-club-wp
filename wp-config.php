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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tennisclub_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'RPs]5K0tc<-Wv;,z<hXOD&_`mY1,_gGam,gE#R=rJv1;@+S|2#EJS)wcIi%fRvIL' );
define( 'SECURE_AUTH_KEY',  '0!..Zp{EJIPYsthRivoB q|d}uf^f]JHzci$4IbG|`qk[J]5qybS,*,RG!54Tt~`' );
define( 'LOGGED_IN_KEY',    'PmyOW_+lA;t9(M-c*~Ne&w<JCF26J}=hZF+l7<K7dL@TOu;+ >70kUqpL9YS?,Oj' );
define( 'NONCE_KEY',        'TE%jFGf.2(oVw~0Uc]*B7=}JMgI;!:k8s[T^-KoqgjH];I>23!61q<s+JF&a+(pT' );
define( 'AUTH_SALT',        '!]zw$H]-@ quA/TteQuolM?)GS<Y7ha[DVKd]A[*{YUMMPG%6mBY_ANLxH~4@naC' );
define( 'SECURE_AUTH_SALT', '+g|w0:7O N(G]2<yCaAtWn*JPYWke8[Rl]6q$e6Qe&NH9^tk>e+IPJ:_1SNw?xY4' );
define( 'LOGGED_IN_SALT',   'De2WaxF&D{lKbCGj]%_& d?1<Fe}XB1(2?S9>YU>D^2&KcP%@X:$F.r`j$*=;Z[?' );
define( 'NONCE_SALT',       ' <ECj,bexHF)D7ykv2V).*SX(|>`<9m N]2M74v:M~{R Vc3c{tVEW18mkJHz.;o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
