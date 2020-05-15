<?php DECLARE(STRICT_TYPES=1); ?>
<?php

// Valid PHP Version?
$minPHPVersion = '7.2';
if (phpversion() < $minPHPVersion)
{
	die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
}
unset($minPHPVersion);

// START NEW STUFF GOES HERE =========================================================
error_reporting(-1); // regardless

# require '../../app-strict/Views/incs/fred.php';

# define('jj', "\n<br>");
define('LOG_FILE',   '../writable/logs/log-' .date('Y-m-d') .'.php');
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
if(LOCALHOST) :
  define('CI_DEBUG',  FALSE); // bypass (bool) app/Config/oot/development.php
  ini_set('display_errors', '1'); 

  $_SERVER['CI_ENVIRONMENT'] = 'production';  // bypass .env & .htaccess
  if(01):
    $_SERVER['CI_ENVIRONMENT'] = 'development'; // bypass .env & .htaccess
  endif;  
  $useKint =  FALSE;

# CLEANER -  only shows last error logs and debugbar JSON files
  $ok = @unlink(LOG_FILE);
  $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));
else:  
  define('CI_DEBUG', ! FALSE); // bypass (bool) app/Config/oot/prdouction.php
  ini_set('display_errors', '1'); 
  # $_SERVER['CI_ENVIRONMENT'] = 'production'; // bypass .env & .htaccess
  $_SERVER['CI_ENVIRONMENT'] = 'development'; // bypass .env & .htaccess
  $useKint = FALSE;
endif; 
// FINISH NEW STUFF GOES HERE =========================================================



// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = FCPATH . '../../app/Config/Paths.php';
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
