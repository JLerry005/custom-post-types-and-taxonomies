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
define( 'DB_NAME', 'custom-post-types-and-taxonomies' );

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
define( 'AUTH_KEY',         'n0FuDEajb2UBfFWo1Gnew3nYLEfYv5BucjXcyp561EigBsokPgKllaLE18bT0Fpf' );
define( 'SECURE_AUTH_KEY',  'XnognwdvoQoI2DZqD7zSixZJOkbzIELMVfJzAFBrwHFd85ouIDV8Pjn4yVhQityb' );
define( 'LOGGED_IN_KEY',    'osoG8a4EmoUQVvSl1tZGkFFc2jdgEdArALumEeac2WskxR24WLSvJExHRziP2GLY' );
define( 'NONCE_KEY',        'IMY52VuGOkqFoviJ1gTPsgPET87bhr7oNSXCM70kBbOrD5aYoFZbb9Yf3jDWX9Nm' );
define( 'AUTH_SALT',        '0pVJwgjytSwRXnECNE2samkwrt7pJuhfFWeVuITXbSgPokOnCYGMg5adcMtdDtng' );
define( 'SECURE_AUTH_SALT', 'VCHVE3q11EmylE7o9wwkO7upuXJtEhrTSNeoTCA3H4Ldpx5g9sLocoUKcbhUUDPY' );
define( 'LOGGED_IN_SALT',   'TNvyaFAJSmyOlfXVaOlpl6arxh22iiBSyzsXG0qQfno3VkARi2JQCTMpGaPki9Cs' );
define( 'NONCE_SALT',       '5NIEtQFV7EvfJmrOmY36TbYsKxNC8IrV8J79egDvOcGQltei1xfDpVtyTbHhuG7k' );

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
