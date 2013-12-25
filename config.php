<?php

// enable error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// define constants
define ("PROJECT_ROOT", "C:/wamp/www/php_migration");
define ("SOURCE_ROOT", "C:/wamp/www/php_migration/source" );
define ("OUTPUT_ROOT", "C:/wamp/www/php_migration/output" );
define("TEMPLATE_INT_PATH", "C:/wamp/www/php_migration/templates/interior.php");
define("NAV_TEMPLATE_PATH", "C:/wamp/www/php_migration/templates/sidenav.php");
define("PROP_TEMPLATE_PATH", "C:/wamp/www/php_migration/templates/section_prop.php");
define("LOG_PATH", "C:/wamp/www/php_migration/migration.log");
define("NAV_FILENAME", "_sidenav.inc");
define("PROPS_FILENAME", "_section.prop.pcf");

echo TEMPLATE_INT_PATH . "<br/>"; 

echo SOURCE_ROOT;

?>














