<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'campusi2_wp412' );

/** Database username */
define( 'DB_USER', 'campusi2_wp412' );

/** Database password */
define( 'DB_PASSWORD', 'Sp@61H@65X' );

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
define( 'AUTH_KEY',         'cxlkkbvn6v9ylkrxnaof9wftfj0n83vsfqontcgw10vrjpa8cyh3wmvrte5izce7' );
define( 'SECURE_AUTH_KEY',  'yel8zor78ea2mh3yrbncrjpn5c8eqjl7a4qc6zjqtnmiofkkjpd0tibomnarigp8' );
define( 'LOGGED_IN_KEY',    'sdtvdxggbcvwpsqrxrjeimxj0vl1n8vtnixjyjhkqfnepshbx16fykcry0ggtpp0' );
define( 'NONCE_KEY',        'vcinzn0ktgrekyg67gvpsvappi2695agmg0fopxof2uamwasccbc10jsxe1pg3ak' );
define( 'AUTH_SALT',        'qizbmy3kezp60l6v6vevibef2cfgjnp4cl78bsrznu18jerp6nmqyr1a9zn7v0sh' );
define( 'SECURE_AUTH_SALT', 'iarz3xbndhaggw1ng8guh4jvdktekuk8m1nauqpcdxaagq3kpab93e5nfim2z1ew' );
define( 'LOGGED_IN_SALT',   'ygao56wixhxrrqmnyxrkurth62gkioxxnsvsccabgh9ad3hux5hyrffnkelxveeb' );
define( 'NONCE_SALT',       'fbvmq3tl0qeaysky5cetw8hwegse1ddkzdyqroazefsxlefgb928smsziejvm7kj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxu_';

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
