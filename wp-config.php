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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'VdqLVYliKpsVqVg7RPpLBJDALzejTcEJiUmzZfYPQ7GHSvUGQikqCiHJCRQERHyB5oVJ26osyu8cVITrjU57YQ==');
define('SECURE_AUTH_KEY',  'm6JJqBC9lcWPUgrIj5EGXtAYSOWibYZunceyZd8tOupeur37HazU6XSi+SqQjprS2tx3OhWjqgu4m3DBS15JpQ==');
define('LOGGED_IN_KEY',    'mY0MWSQL1RVPJIV2HrkaD95+oQELZi7IDAgtP+BK6GP83KgiWjJJd4Joq/83koI2iqNL65GKQBPry5W2Yd3VOg==');
define('NONCE_KEY',        'ky3prtowDBp6HNEmbkFRCtXNimeJ1qj2ZICOgdYSXHNZmzywRO5XWmDH7zhiFdL1qTfm8ajwrNZmrKKPp/LOcA==');
define('AUTH_SALT',        'ts8rmJNVijxO3XbYbDERCzxrZL6Aqx53h66tMm8fA+S7hZJ7Q78BcwImjgYXe5nArMjv8VC5A8qPBDMj4KhgTQ==');
define('SECURE_AUTH_SALT', 'rwnzjy/MO3SGTQ0bpc2rP58LjFI4zvYUcvUPwptO96ugO8q4WfVr5Um/+sE+FK/0EMHin7ckMRoWhLrrZiDWig==');
define('LOGGED_IN_SALT',   'Iq0rM2cv/jlyWQ6wP807GEbRi+ZcF/d0h/iveiFv38yqZ+ckcinnC+/4fGls9k+Y+/0+Yw7g9ddiesRpbYtg5A==');
define('NONCE_SALT',       'mV6uC5/Qjw1z8KyFDX6iWMHNVz2X52FRvZmJv31RvUKSlO6CA8J51EM1U/0UtJU6Qb2cXaWuONv0dKxDdnfb0g==');

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
