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
define( 'DB_NAME', 'matafgroup_decorate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'kH.=s~&E=WU-Hqb4R*^y1,)pf:@D[)p8/>Gug+~8`?n)k)jFFhWz=abYQ=dzSAJs' );
define( 'SECURE_AUTH_KEY',  '#gjrda_-7DTxtpv<Ma]&`?!k:2+8QEs9zg7BP1v*M)va|GGr-,X}nDpa<C$_aoLD' );
define( 'LOGGED_IN_KEY',    'Gv&yQ3YY&z^{Lx2%)[K-Hw,eW:l.8MKiFO<Yuw[!!_{/M?]!vKMF:$md8}Yf:_TV' );
define( 'NONCE_KEY',        ':ZUp?h]|E)qpqqF$6VI}M_Y^_bWK06i}jPS*=Ujm/{e@l?n+Ix+Ubv#go%(u/}g@' );
define( 'AUTH_SALT',        'v+O~hQPgHF|x3(MJPbjEQ(F-P0HOsdaFx1^1jNr~tz{Go(}/aL4.0sh^1||QbeOC' );
define( 'SECURE_AUTH_SALT', 'O@I>}<a };bvt_I~=bfQ9eC`z`KUs^ekl3S,+3xtP&RczKg/C-c AuW+j|7; L%p' );
define( 'LOGGED_IN_SALT',   '<4|8aMUu!Omk#W1:?;x|Q9&W)p]O3h  i:rNa{2omTXuWUR//8v3[wWBRot#<~x/' );
define( 'NONCE_SALT',       'uF%s3yAO2]Ow<fo{6D>zL)4xUqN60*wZID#8D_)f#+&MTG5444G@_%rdLdIB;MW$' );

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
set_time_limit(300);
@ini_set( 'max_input_vars' , 5000 );
