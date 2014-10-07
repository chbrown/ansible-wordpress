<?php

define('AUTOMATIC_UPDATER_DISABLED', false);
define('WP_AUTO_UPDATE_CORE', true);

define('DB_NAME', 'blog');
define('DB_USER', 'blog_user');
define('DB_PASSWORD', '{{ lookup('password', 'tmp/mysql_blog_password length=10') }}');
define('DB_HOST', 'localhost');
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');

define('AUTH_KEY',         '{{ lookup('password', 'tmp/AUTH_KEY length=64') }}');
define('SECURE_AUTH_KEY',  '{{ lookup('password', 'tmp/SECURE_AUTH_KEY length=64') }}');
define('LOGGED_IN_KEY',    '{{ lookup('password', 'tmp/LOGGED_IN_KEY length=64') }}');
define('NONCE_KEY',        '{{ lookup('password', 'tmp/NONCE_KEY length=64') }}');
define('AUTH_SALT',        '{{ lookup('password', 'tmp/AUTH_SALT length=64') }}');
define('SECURE_AUTH_SALT', '{{ lookup('password', 'tmp/SECURE_AUTH_SALT length=64') }}');
define('LOGGED_IN_SALT',   '{{ lookup('password', 'tmp/LOGGED_IN_SALT length=64') }}');
define('NONCE_SALT',       '{{ lookup('password', 'tmp/NONCE_SALT length=64') }}');

// this is dumb, but for some reason, a table prefix is required:
$table_prefix  = 'wp_';

// the rest is not really related to Wordpress config, but required to be in this file...
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
