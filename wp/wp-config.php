<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'baleeed5_wp465' );

/** Database username */
define( 'DB_USER', 'baleeed5_wp465' );

/** Database password */
define( 'DB_PASSWORD', '5JpS@9Y(M9' );

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
define( 'AUTH_KEY',         'k6rrlndc89o8hdcy0wolnjh0fnep3rttsxv2aytchk90m20oqpw9pfwxc23bcpvy' );
define( 'SECURE_AUTH_KEY',  'ejrsbyuggdw8myvchvfcgoqoqmt21dfyknwjq9ocvef84umhxc9xqah030z3nmml' );
define( 'LOGGED_IN_KEY',    '8ctct6qmncqxau4zw07erzunzljxbr2tynd46bgsaprnzt4ltumpskrs7ponlfeb' );
define( 'NONCE_KEY',        'yibagnefnzlf0kzyqjctvdk1fy7wgfawwazmouzdwuuu9mypdhczy6cjlkyiskd0' );
define( 'AUTH_SALT',        'gipbnfueauetokmtstuyejrfipwz1kft8u369xqcfqjvggsfily9ukpeiguynaz0' );
define( 'SECURE_AUTH_SALT', 'gyrjcx15mbstarxs2jadzn3mtqbbxybyumtbzlrzjzuymjcr8ah6v0vogtn4rivp' );
define( 'LOGGED_IN_SALT',   'woftvf6teiquceae3tugdgreqabtojvapnbafspp6btrwcr5vuctnkpgenflonli' );
define( 'NONCE_SALT',       'aco5bdhm7emulyiwi6kqctprosf0j7pfh2uzztdqoridd7ijsu7eztny4jcrike8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkx_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
