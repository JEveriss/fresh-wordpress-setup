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
define( 'DB_NAME', 'wordpress_local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '_T{M;qW16A )#sb@b+4s.i=#%CUw28gL@3TuxvqD $/-?yu5:U)EpIi__79:S)>d' );
define( 'SECURE_AUTH_KEY',  'a{zUm0W*Bo 2;+n%li*?3Rr.<=9jXLRg8#f(<;R zlrrQF3yoh|LsBC/M0LwTVbL' );
define( 'LOGGED_IN_KEY',    '.hsw}Y%#PWPgVl`2{ c?voFxROM<OIyyaDEl[6b.N?F%As9GMcBWhW-9|n)s0#j]' );
define( 'NONCE_KEY',        '/QyC1Kk1$GK5D+hrwxSh4t@[4VTZ(Tzxeka/{(%J4g{m6=.&W!XU4S0#f7sOf&`}' );
define( 'AUTH_SALT',        'qqE9:#2X!7]oBQCO`<ILm9ww/LOA?<aiwYc{]U(3-}}n=hL1I,&nc)uZqrTOyP.~' );
define( 'SECURE_AUTH_SALT', 'X<}F1T}CdSh29?O8kTMU/p!]NIJ xCbA)V_tGlDc.VO91YqKy$PT~S=&c5{h2OA,' );
define( 'LOGGED_IN_SALT',   'tbLSb:ct1L*hCXd{@3yZ57!EPf/DFaDL#5a.,k#N,W;gyS/CtfVi9a35f:ZQz)Wa' );
define( 'NONCE_SALT',       '[q;%o`LfFGJ3|%+=V-wRQy$,90T=nuQ-l9hx<Q>HMc5A{_y[j#hIxiOhB/jji,PN' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
