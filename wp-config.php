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
define( 'DB_NAME', 'walzer' );

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
define( 'AUTH_KEY',         'k.>8KLZa{F:G$TQY$`m:SX:7P<JN^7}.r3l&w2|bnC-d%P3sBZw%q,~7q_s>Ay.3' );
define( 'SECURE_AUTH_KEY',  'GIz36`!EzgC4}1V2%_xesK&FujcDhR6<KBR02LvrOitv<NK7gR{Ef5Z qI4JPNQ|' );
define( 'LOGGED_IN_KEY',    '[e[-U(|QAE#{.VQXFL6RNZw9W4`q)-9fJRJO~,YDu9:Lvsc_;:wuFc#a_-kC$ !u' );
define( 'NONCE_KEY',        'RyXy641uRm]3QEP}A;F.1Q0~I/}yHMV,31lD^$UR gN1WyognCKWq&n-Bzg~jklp' );
define( 'AUTH_SALT',        'gE&9r-4ef|$Xd~G3+-I0}ew6l74m2*4:[m7.ZAjl<`m`| 28_&kL6),YPtqb5aRN' );
define( 'SECURE_AUTH_SALT', 'G6At?%,@kDj)?zN27l,)8[FU<HRw 4Q:%#ke-Qde|Q&<h0pm`pTm[rhe]?s7{2oO' );
define( 'LOGGED_IN_SALT',   ',k#qZU)FZl<!gBQ|cmS5=h:KQ-3FW,+E_?Hh;4Z!&#vOh.A5AmxOLn1sxM9%`$X#' );
define( 'NONCE_SALT',       'mP=?HwnG-VJyBn;>Fo=%6VXq!a`4CnU83b8ld*gpN%2rXzjYb#pTyIxdp6iGo[;R' );

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
