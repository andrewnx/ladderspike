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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ladderspike' );

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
define( 'AUTH_KEY',         'lnNUDIKqvV4bXfV5GcpvvhUUJpkImyXQYc25XNMQdl7zzun8n81oiaFb96nh7kT8' );
define( 'SECURE_AUTH_KEY',  '2zMkI8mr66KS0FiaJwVTHiJJ0zHEwsANNjkyHiKDdHxmVtmwbh1jEERjhMFwqo1X' );
define( 'LOGGED_IN_KEY',    '4qrMXlewYsjbtvH60leabTRmKAEta6VWojnerb3CipmIcm16iXUFdKFHY4AJgyJN' );
define( 'NONCE_KEY',        'vN3HfdW5b2fHhoqO4PSXkNybZNyl0zTPl4f8q7Fyhg9uDZQFwamgbH3mpHxrMz9d' );
define( 'AUTH_SALT',        'Wlhy0rOolWNDj5VUvUYnlPF05RGDGQbZSiVt157nfKpIESO8PxbofiIFAVSmBR02' );
define( 'SECURE_AUTH_SALT', 'nssEOmFtdQUCZKTYm1LD4OCwuiNsICQmC57me8I5iGld1dPp85KIturjCZ3zoiwV' );
define( 'LOGGED_IN_SALT',   '62Ho487qzFyYBoXEhKxd5FRApXWuPdvf6d8S2B4PmOXR7rIMRg0jVWm0RWMSmdou' );
define( 'NONCE_SALT',       'ax4Y6EEVzmUtsFQPCoXeQ1aUlfrtnfbQvbAAzmJ4sfPldR8zRElBiKxf46WGzPSA' );

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
