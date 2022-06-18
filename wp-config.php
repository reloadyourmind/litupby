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
define( 'DB_NAME', 'litupby_db' );

/** Database username */
define( 'DB_USER', 'litupby_db' );

/** Database password */
define( 'DB_PASSWORD', 'p5js!S99)4' );

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
define( 'AUTH_KEY',         '6597lx1aleq9pcajlqsidbo3lyge0fvwf0eqouvtk5vb6n6ms2ldait6wspxjx3r' );
define( 'SECURE_AUTH_KEY',  'sqqysyan4pwiwmpggbxvwnwyhcbm2juxbq0rpdaeicgmykpoqg7k00h4eqqvsvrp' );
define( 'LOGGED_IN_KEY',    '69rwccoieeoyixasgfvdvparhnpiigm2dwhthdinhea8y80vjbcyacgdxalvgako' );
define( 'NONCE_KEY',        'z1nahrgbtzbtgcuxnq9insu4suwg1wgmhztzqp4zbrqrbtotxalxtucaoqiivwyg' );
define( 'AUTH_SALT',        '8qovlu30d2wiasecxltesl9ivafrtmc7b0vdmtzbtksk8ivqjzid4chpnowzid9e' );
define( 'SECURE_AUTH_SALT', '0ifxlz2mjrccnacta7tngmsngaguppqygnjhhv5hzierekx2adbzbrphlol4qm65' );
define( 'LOGGED_IN_SALT',   'ecfnl5nickifx979z4lok5mctejsiuupo6vidoqcfxfqvlffb0g9lui4sl7huj89' );
define( 'NONCE_SALT',       'o59n87cqbkirqri1hw1wafyxdqvvzw6oot0be5bxvpehwqdhfmeqvlbb4uzn98ed' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppv_';

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
