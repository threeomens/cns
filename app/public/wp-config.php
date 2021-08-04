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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bEWF7Mv2LJcxx/OGGzz2wlTG3uvw1sZr08OddTGuKFcGECctSACtTOKVzvkBRhNnht/2VtvDl3+SIna4nq80hw==');
define('SECURE_AUTH_KEY',  'md9bWhfXSzjpE6o+QvNfyy+584/fTGqyNCQs92KJ6ZerBGRJVVdtN/dDoketexFffdHeiKpN7DSSW4LHLR7SPg==');
define('LOGGED_IN_KEY',    'nxOwkV8xyS1qX/WhtUXCT88AEMke7V7UrR3zk1QOXAByJWkxeHnqKHno51ehc2L2tkVOZGR1oUYvLaZ/qc2Mqg==');
define('NONCE_KEY',        'slr5Q9Mk3adFV5KmxVqjUWC4gZ1iuRnQAF6bx5IOXsPoL7poxkK9pawqgzTAtbSlwrLFYskHxLTnzJalNuCP5A==');
define('AUTH_SALT',        'ZGHwMQEnxp8ptHADAI2wgcsDnnQ52w5FL0YmbIHiA9jRj1WakzrtRduf+8b+VxDjaNRK16K9sI023/zqEkKtpw==');
define('SECURE_AUTH_SALT', 'usmFy+6gawMi+IzJqeYpI7a9sQraNfNXlM1eKcB1jvec/vqXupSvtSYPgPOuDFTkUrGSbby9lNwwte5nxJmxdQ==');
define('LOGGED_IN_SALT',   'S7b/m1p5uG/9E5RdFmrwWOjOX/G3LqYWLc++qyRz/Dfa1zYhKnzBBfJwmDk5r9lG+sMPX2hI8wUMUYUwq0dRhg==');
define('NONCE_SALT',       'pL9uuSML3PswwbqAl/P0nr5WLw6xq2lOwrNAN/QpmMppzmSXRem+LvBJMrF/rH5ovZ21MEbkIhiZQbowzK4DTQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
