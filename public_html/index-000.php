<?php DECLARE(STRICT_TYPES=1);
# echo phpversion();die; // 7.2.22-1+ubuntu19.04.1+deb.sury.org+1

define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
define('BASEURL',   'http://localhost/ci4-strict.tk/public_html/');
define('CI_DEBUG', FALSE);

if(LOCALHOST) :
  require '/var/www/ci2/fred.php';
endif;  
# fred($_SERVER); die;

// Valid PHP Version?
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

/*
if( is_dir('/var/www/ci4-strict.tk/app/Config/../../system') ) :
  # fred($paths);
 endif;
 die; 
*/ 
