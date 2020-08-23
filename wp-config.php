<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'wordpressecomm' );

/** MySQL database username */
define( 'DB_USER', 'ishandb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ishandb1' );

/** MySQL hostname */
define( 'DB_HOST', 'db4free.net' );

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
 
 define('AUTH_KEY',         'q<C1-+f8F9C2yB4&$OJzJuqQ-[LBpS+u>k;KPALa&|W9Jkmuv%pl|A7GB_9kaee_');
define('SECURE_AUTH_KEY',  '-Xu3ibw.6sO>kiC|2,a@=USH{c5aw}A#-958}x|^3|jIIRYo=&BU RJQ-ZgCY| b');
define('LOGGED_IN_KEY',    '-4F,ir)SLg;sg37y*othdj| .q8lzomI+qB|u2#hrt-RJ+i@/a+LUIjeD@P|PQC%');
define('NONCE_KEY',        '9n6+fq|FLA6s&.#11H1oS>4Bw.]v`I>7nk5hw^o00_OQrR:q|v,U;-C/hC$/A|!@');
define('AUTH_SALT',        '+>26yZb1Jea?NXlW~C#mL-*lAU4-Z21LC.P$TfC,a^51t6{__8ALI-loCfU] HQ3');
define('SECURE_AUTH_SALT', 'r5?$B-%Qd5R<_6>b{LyLpB+4V!{/1=;^S@-z^w1-_>]m4-BS2>XaRf|_p9CakC2_');
define('LOGGED_IN_SALT',   'NA2K2:!We1u ]qq,a(zvC,(]G}+ uZ*c[m1fsp5#& >$gXeueF!#lJjnXiPE{_]e');
define('NONCE_SALT',       'q1/XZ&C<wf0|o)@21>ySS#9NU_cvB9B<!3+5Df8|9nk?ja!vC+`_:+-o^$-|!e6H');


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

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
