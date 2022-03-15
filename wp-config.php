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
define( 'DB_NAME', 'clickkfr_wp58' );

/** Database username */
define( 'DB_USER', 'clickkfr_wp58' );

/** Database password */
define( 'DB_PASSWORD', '336pSb99[(' );

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
define( 'AUTH_KEY',         'nevyr1zrxzdpbatwylgpuskddxdfvmh5oruj5bpekpth5570u63vichsxzjwillt' );
define( 'SECURE_AUTH_KEY',  'wqowa14c2j9ik9cp54bb1h12zdptsjz9gq6asyvguea5tq83whzsacmsxno1asau' );
define( 'LOGGED_IN_KEY',    'kmidrdexqkodozuphrotst7rpieodzdpfxulibn6bjfqabt7inbttqitlgl24vpf' );
define( 'NONCE_KEY',        'v35abkjmjyaztzaq419uofpqewzlnnday9n4wluc95uoslzmjyrz5b7e6t3vq8su' );
define( 'AUTH_SALT',        'mbhkhw42sg9augexanvgbauatzxi22flac0kwmce6p0q7e8a6bazaizplkzkefsr' );
define( 'SECURE_AUTH_SALT', 'e9oflnm23shqmmg1ao7t1x2qzch3zx9aoked4wo1lx2psrwzztg2sdpjbjftevvz' );
define( 'LOGGED_IN_SALT',   'zhwduoko4de0vz9fn2615ays14vitxezdtoet4pgszlnohbixgcbgtgasg9fashf' );
define( 'NONCE_SALT',       'mdebu0zekvop2gub2i1lr6zlqbixjplfkywjitcgjtlkiq5jc36zridunwc9odxq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptb_';

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
