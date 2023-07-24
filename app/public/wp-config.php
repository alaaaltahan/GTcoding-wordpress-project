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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Y24145h7Gq+RVkaMnRAHN63ZZ7mpsT41GS6nTCBzEcNTCWHNyXQdpPs+EC+XJ//BdnETeXLqlaJJ9MEHJiGA7A==');
define('SECURE_AUTH_KEY',  '0CwZ1JLxi0hoveTD5Eq6g1XIWuBGHaKcEMdRaS0ciPFU2LnCNiQ+rOSngBuKSUFEY5OS1VZvBtCNnENCW8aucQ==');
define('LOGGED_IN_KEY',    'pyXp4fCAhOgCzLKwemdN702TopEg5SdbTiBGH+Og0HASjMEn5YNZtTb3RqsN42yXwBgIGLeIrolB6BxwlliNcw==');
define('NONCE_KEY',        'kBwReVBXWmOYTe27J//j1Pya0caycL9pzOs8LrITMq3IQaD+d65HtpaVK35TsEBFP8THe9bBzfapx+UlJstsag==');
define('AUTH_SALT',        'zgnJPtgjpmBlh7YujyyjRnHtJKL3IOXEkT24mzpyq/6s6qEqSnLI/OU7D4BHd/D0P+hzV+Aopx0rkvelN0L6YA==');
define('SECURE_AUTH_SALT', '8vqTJBGBjBrlTJQZNedWEoHQ83ZwSmnt0yBxMOMLU2JTGv2O6hOy+GrWaDzUrv32j78bRb2EBWTnUHkCU9whuw==');
define('LOGGED_IN_SALT',   '5bneDiFK7JK3prkxwX+iAam5InoGA8m7c84GsXCbE58tOtu5ea6MwkcWF7fCLUialxoTiOZ0Q9hU3DJI0nYtcg==');
define('NONCE_SALT',       'foJhIcUgdettHhFS6WUkUe3OPZhmyrKgGvt2Ji7c73VisbYwd202P0ft8ralgM8bfvIMgm5xrx/K17GOsd+bSA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
