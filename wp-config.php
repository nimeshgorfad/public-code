<?php
 // Added by WP Rocket
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
define( 'DB_NAME', 'wp_cathrinehammel' );
/** MySQL database username */
define( 'DB_USER', 'cathrinehammel' );
/** MySQL database password */
define( 'DB_PASSWORD', 'b0NBQeZyJ0v3AlnzIm4A' );
/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'bfe02e64b56e963730b103f0b6da7199351611ce88d1896e0540ad291c12ad75');
define('SECURE_AUTH_KEY', 'c552a79812f2d3876f73c1c4170c096a0293c2b13efc229b06b1cf4f80c4441d');
define('LOGGED_IN_KEY', 'ca9c661ebca2dc43432d55cb642d115c93dece6ddf719b0a738e9c89d97287c9');
define('NONCE_KEY', 'b2f6b69e7cf98913391d0afc8428a0dcb358b762673a3c4a65cc7d055940baca');
define('AUTH_SALT', '381981fe0c485574d79e6c93c1676fd9ee961517d53a3a071b7f94d7fc66e699');
define('SECURE_AUTH_SALT', '1186a96f405c5583daa2f29f2e60ff37686f8440e0d29b3d67a96d9735fb70a2');
define('LOGGED_IN_SALT', '0eb0fb537568ac9c87a30c14ffe012372e45fab2db87f3df34972c12f03042d8');
define('NONCE_SALT', '924a58c83606fd67dcbcfa58b058ac67c5a7856ca92cc18c497898c26b8e9dca');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rAv_';
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', FALSE );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_AUTO_UPDATE_CORE', false );
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
//define( 'WP_HOME', 'https://cathrinehammel.wpengine.com' );
//define( 'WP_SITEURL', 'https://cathrinehammel.wpengine.com' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. 
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
/** Sets up WordPress vars and included files. 
require_once ABSPATH . 'wp-settings.php';*/
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'PWP_NAME', 'cathrinehammel' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );
umask(0002);
define( 'WPE_APIKEY', '35db2b8e4cc4bd37da038a39d0a067ea12c65bde' );
define( 'WPE_CLUSTER_ID', '120389' );
define( 'WPE_CLUSTER_TYPE', 'pod' );
define( 'WPE_ISP', true );
define( 'WPE_BPOD', false );
define( 'WPE_RO_FILESYSTEM', false );
define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );
define( 'WPE_SFTP_PORT', 2222 );
define( 'WPE_LBMASTER_IP', '' );
define( 'WPE_CDN_DISABLE_ALLOWED', false );
define( 'DISALLOW_FILE_MODS', FALSE );
define( 'DISALLOW_FILE_EDIT', FALSE );
define( 'DISABLE_WP_CRON', false );
define( 'WPE_FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_LOGIN', true );
/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/
define( 'WPE_EXTERNAL_URL', false );
define( 'WPE_WHITELABEL', 'wpengine' );
define( 'WP_TURN_OFF_ADMIN_BAR', false );
define( 'WPE_BETA_TESTER', false );
$wpe_cdn_uris=array ( );
$wpe_no_cdn_uris=array ( );
$wpe_content_regexs=array ( );
$wpe_all_domains=array ( 0 => 'cathrinehammel.wpengine.com', 1 => 'cathrinehammel.no', 2 => 'www.cathrinehammel.no', );
$wpe_varnish_servers=array ( 0 => 'pod-120389', );
$wpe_special_ips=array ( 0 => '35.234.146.122', );
$wpe_netdna_domains=array ( );
$wpe_netdna_domains_secure=array ( );
$wpe_netdna_push_domains=array ( );
$wpe_domain_mappings=array ( );
$memcached_servers=array ( );
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
define( 'WP_CACHE', TRUE );
define( 'WPE_SFTP_ENDPOINT', '' );
