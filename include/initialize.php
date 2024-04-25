<?php
// Define the core paths
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Use __DIR__ to get the directory of the current file
defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__DIR__));
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'include');

// Load the database configuration first.
require_once(LIB_PATH . DS . 'config.php');
require_once(LIB_PATH . DS . 'function.php');
require_once(LIB_PATH . DS . 'session.php');
require_once(LIB_PATH . DS . 'accounts.php');
require_once(LIB_PATH . DS . 'autonumbers.php');
require_once(LIB_PATH . DS . 'categories.php');
require_once(LIB_PATH . DS . 'orders.php');
require_once(LIB_PATH . DS . 'stockin.php');
require_once(LIB_PATH . DS . 'types.php');
require_once(LIB_PATH . DS . 'services.php');
// require_once(LIB_PATH . DS . 'promos.php');
require_once(LIB_PATH . DS . 'people.php');
require_once(LIB_PATH . DS . 'transaction.php');
// require_once(LIB_PATH . DS . 'settings.php');
require_once(LIB_PATH . DS . 'database.php');
?>
