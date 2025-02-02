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
define( 'DB_NAME', 'bayzidsi_wp330' );

/** Database username */
define( 'DB_USER', 'bayzidsi_wp330' );

/** Database password */
define( 'DB_PASSWORD', 't-p7S)o544' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

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
define( 'AUTH_KEY',         'o0sjw5jimcvntwkp6o22cb5dibty8dotwpyufvkj7we9rlreee6okcrmdkvtwhic' );
define( 'SECURE_AUTH_KEY',  'fosziegz3ybmmzexej3wlb8gbhvkt0ynjmwskaellhu9keboheaidu1k1qklyxtl' );
define( 'LOGGED_IN_KEY',    'q9pilz23l7wkuwzabge7lsv7mcsl3wgtobnusf55lny971zwv80x9qlllihdurwb' );
define( 'NONCE_KEY',        'htt147pqsj15jycxqkyz2ng1auujtgg0h0qzfpmufpudqqd82w8joda64wcfjdok' );
define( 'AUTH_SALT',        'cwlolhuhyhs7grduqx07mgp8hnoazr1gd7wuaku9lb7xm1hlusmz22a8ofbglxxg' );
define( 'SECURE_AUTH_SALT', 'huc4mkhak40iuamrelhjmymou63ole9klm4iq0ngczdvugi6rbhx3e8betg2u6qu' );
define( 'LOGGED_IN_SALT',   'gcfkhktjj0oldxcqlr4kz9ujkul6me6mceoz4rojrywrnw8qia1m3pkbpkuxuf0e' );
define( 'NONCE_SALT',       'mo5jmurrndacfd0ssistbo57sbpxbyhhpmiazzwg4gbkyjebzmahstr6jpato9qd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3k_';

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