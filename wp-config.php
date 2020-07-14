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
define( 'DB_NAME', 'wp-quiz-headless' );

/** MySQL database username */
define( 'DB_USER', 'jeshu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssw0rd' );

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
define( 'AUTH_KEY',         ' ux>cxFpP#.R4uS@3ymv>$$<@s%`N0oq/ KbI6wpSEDK]if}R.<6KXl+3]aP@ymA' );
define( 'SECURE_AUTH_KEY',  '$q(X(V36%AM<>fjud/(-o)rS1%4e1qN)z+}wI:B*(jy[)+?8NW2C,$pj2D2cl[M;' );
define( 'LOGGED_IN_KEY',    'Ni[kKKIi0MLm8:`Y7g.j32n,FGIBt?1txO|fIYoW+&]RdS@]cLEe>fCk7L!6vk[#' );
define( 'NONCE_KEY',        'n~d!uO$B@PW(5l[Zc^LvD=C0jK?~;%#:53*k65NhAh<vegJ)pxZxd5*BD42S:iTl' );
define( 'AUTH_SALT',        'Zl`zMQXg4]wwVXSdvhL:#eC~7WoX.k^bef8EZW:fe?u2 gn4!7uE7N^%80jlu,fX' );
define( 'SECURE_AUTH_SALT', 'jzRCXMWA:-@5VaG6vsr+Ld(4aLvIZ4LY@7l0H#8fBZ?}F|,]5A ;10)*=T.0I&C1' );
define( 'LOGGED_IN_SALT',   'OX{nshW7^|!~Ua*q{rP2y+HWjs=6/O9]cci~8!|yI#5n}zG->|bKU[|ytaw3?p,m' );
define( 'NONCE_SALT',       '<g$f!}Re}acOu~x)({0B/<i<dE^Zz~i:Xl>~1Se](<`o hK24.r~l9p4efI/M]:k' );

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
