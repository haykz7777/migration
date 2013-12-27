<?php

// enable error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// define constants
define ("PROJECT_ROOT", "C:/wamp/www/migration");
define ("SOURCE_ROOT", "C:/wamp/www/migration/source" );
define ("OUTPUT_ROOT", "C:/wamp/www/migration/output" );
define("TEMPLATE_INT_PATH", "C:/wamp/www/migration/templates/interior.php");
define("NAV_TEMPLATE_PATH", "C:/wamp/www/migration/templates/sidenav.php");
define("PROP_TEMPLATE_PATH", "C:/wamp/www/migration/templates/section_prop.php");
define("LOG_PATH", "C:/wamp/www/migration/migration.log");
define("NAV_FILENAME", "_sidenav.inc");
define("PROPS_FILENAME", "_section.prop.pcf");

echo TEMPLATE_INT_PATH . "<br/>"; 

echo SOURCE_ROOT;

?>














