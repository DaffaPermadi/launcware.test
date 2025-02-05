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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'launchware' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'sR5NwRCI3d2QAbjurxRsfx03ljtwCLyO9mxiQCN3fChZCoHMlTw6stATgM10TXti' );
define( 'SECURE_AUTH_KEY',  'eZ0a3uMC5ljgrgUuq5k7beT2VvcFDMPKZpVP9RajaBBdTdgIXpIensNLiVkti5nU' );
define( 'LOGGED_IN_KEY',    'H1maHcprvym9pmYX6TIWJ0Q9YmYZ3w3xuuVaTuiVP5fsoIQ57KOvymJqyFBPDgIx' );
define( 'NONCE_KEY',        'JR2BWqhvoVWrJcnSwI2ddKYLzoVPG0mG6uZQDnzTVN5OFAuDdqHQ7rwOgXx3tqro' );
define( 'AUTH_SALT',        'v6XuYtpTQ5nZThUOlhUxxloxPkC1H0m2nBppdKiUZEJABm9ePjponDPlZLvWOO5c' );
define( 'SECURE_AUTH_SALT', 'CrE9pDNBTp86wL2B8kRVszhJULUzInHlc46D0raf7q8E9wpaLyfaFNHNqliwI9WV' );
define( 'LOGGED_IN_SALT',   '0zMH2d03DiZVa7awLE28h9P4aYkFCfI6pPozemxaeRh05D6ESPv8OGwQ4x9nwRRP' );
define( 'NONCE_SALT',       '2PF32UNMXpakhQShlshnIkRNgGm8vl5O0VXbEB2poebVAaorjrUiZyUMnuNWTy1D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* JWT Configuration. */
define('JWT_AUTH_SECRET_KEY', 'vwsYg+SIQ9JIWmACtOuf7oaYd0wFzeqt0t55fpPEG44mlIKjgS02afhcBziHNSPN');
define('JWT_AUTH_CORS_ENABLE', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
