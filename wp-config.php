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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         '>6A!UpC*o=6N&ZRnD:4Xg4D@G%~; oY =R(`:Pd?:c5fx*>`EMX(IQ%{;Zx4Xx:,' );
define( 'SECURE_AUTH_KEY',  'Ijk5>i;[R&8 /).sYe/&0d%O4Y0ExArjRT6yX#3,S&7tykhTdE=jM51},Xjd5s)[' );
define( 'LOGGED_IN_KEY',    'kM`Ni+j8e|hkL}KwJ!)EiAZ8>KLJ3/Od]+.^=<Dt=5!.X:p`C@*(mT?K,O4`G81=' );
define( 'NONCE_KEY',        '}0/6>XUocdAKP?u%1NT;4tTCGd~e#}(.?zwzpz}pEj+79/bC2yyvH.hvt6+G~{,2' );
define( 'AUTH_SALT',        'Q}ank(dfdkbpiC+41#BhV|1.D[l3a:xptG(#jNth~CnA[e ;dYUu5;c2zh9i; r8' );
define( 'SECURE_AUTH_SALT', 'o?3,aVi5{C{IZV5oyTwe~,-rX@=EHEWe*hI7y&nRglIV8=`4;rr$vhxS%DlR@sD}' );
define( 'LOGGED_IN_SALT',   'BG69~GF0^G[u>!EafE+3N>NN}eN>smT!6#9s<;k.Fmd]8UfO6T0lpi8hmfAAl5iH' );
define( 'NONCE_SALT',       'lAqZVI4k|H{$&(yfF7~[,:e> >L=yOOvC<P5kZ*FKaG@nj}7@=U93~FTn]u?-n>s' );

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
