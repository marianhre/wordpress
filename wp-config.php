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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'ibb+iy>tp1]9AXrH>5uSxvF)nFDoXuL6kT*c?@a?fIKBaw<;*`o#aXodm!<h_W<O' );
define( 'SECURE_AUTH_KEY',  'Kw*Hd{Sff&7OGgc{e#Ja5DZn<nZPhrX5@`9d.lWoHCgNLm@5a<vF1!xf/N<Q9O7f' );
define( 'LOGGED_IN_KEY',    '`@^,^ZG{E}=5K7,tY4CsTyd~@TR/Lb_g]:wnuy9j-1H;6j% -o*uL*P8b(ykZ`8>' );
define( 'NONCE_KEY',        'i}CKco*H9NAwfxAc<ASvmxtY$.[+KqQ>t!BVab[JdD>b>yP,:qNka5agp0I$Cbr{' );
define( 'AUTH_SALT',        'Tbr1<A0nC2chg[0Iny[bBGVqo?K=_mqdpLz:Y@]&cv-6*YmLL12=Su_, *24$iXe' );
define( 'SECURE_AUTH_SALT', '%XGR0D(h.vgbDZh%}u,_8huD7!~q;u4RPk:/)8~&+L;h7:p1]L0WD2[p]on3OL@6' );
define( 'LOGGED_IN_SALT',   '^!N&14=ofiqb_5!l>CA:~AUo}7+&3;[iEo/^ U8l]=3]+#-6DQf-0}UVqHIVRt*:' );
define( 'NONCE_SALT',       'd9]V[E@$c+b>8l;g%&DwA!3-^I,-Jcvg n>|P6X|}*TLZ=dM9rg_`UA u1*WEXCq' );

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
