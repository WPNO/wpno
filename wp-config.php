<?php
/**
 * The WordPress configuration file.
 *
 * @package wpno\wpno
 */

// Include the Composer autoloader.
require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv( dirname( __DIR__ ) ); // load the .env file from parent dir.
$dotenv->load();

define( 'DB_NAME', getenv( 'DB_NAME' ) );
define( 'DB_USER', getenv( 'DB_USER' ) );
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) );
define( 'DB_HOST', getenv( 'DB_HOST' ) );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', getenv( 'AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY', getenv( 'SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY', getenv( 'LOGGED_IN_KEY' ) );
define( 'NONCE_KEY', getenv( 'NONCE_KEY' ) );
define( 'AUTH_SALT', getenv( 'AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', getenv( 'SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT', getenv( 'LOGGED_IN_SALT' ) );
define( 'NONCE_SALT', getenv( 'NONCE_SALT' ) );

$table_prefix = getenv( 'DB_TABLE_PREFIX' ); // WPCS: override ok.

$hostname = ( strlen( getenv( 'HOSTNAME' ) ) ? getenv( 'HOSTNAME' ) : 'localhost' );
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $hostname . '/content' );
define( 'WP_SITEURL', 'https://' . $hostname . '/wp' );
define( 'WP_HOME', 'https://' . $hostname );

define( 'DISALLOW_FILE_MODS', true );

define( 'CONCATENATE_SCRIPTS', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
