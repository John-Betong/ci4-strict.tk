<?php DECLARE(STRICT_TYPES=1); ?>
<?php

define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

$_SERVER['CI_ENVIRONMENT'] = LOCALHOST ? 'development' : 'production';

define('CI_DEBUG', FALSE); // regardless
# ensures CONST bool set in:
  # app/Config/oot/development.php
  # app/Config/oot/production.php

# DOES NOT USE ENV 
# https://forum.codeigniter.com/thread-74649.html  
  if( 1 || DEFINED('AUTOMATIC_URL_DETECTION') ) :
    $url = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) 
        && 
        ('on' == $_SERVER['HTTPS']) 
        ? "https://" 
        : "http://") .$_SERVER['HTTP_HOST']
        ;
    $url .= str_replace
    (
      basename($_SERVER['SCRIPT_NAME']), 
      '', 
      $_SERVER['SCRIPT_NAME']
    );
  endif;  
  defined('BASEURL') ?: define('BASEURL', $url); 
  # used in app/Paths.php, etc


# ORIGINAL SCRIPT BELOW


# Valid PHP Version?
  $minPHPVersion = '7.2';
  if (phpversion() < $minPHPVersion)
  {
  	die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
  }
  unset($minPHPVersion);

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = FCPATH . '../app/Config/Paths.php';
// ^^^ Change this if you move your application folder

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();

// Location of the framework bootstrap file.
$app = require rtrim($paths->systemDirectory, '/ ') . '/bootstrap.php';

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();
