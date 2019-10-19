<?php DECLARE(STRICT_TYPES=1); 


  require '/var/www/ci2/fred.php';
  $ok = @unlink('../writable/logs/log-' .date('Y-m-d') .'.php');
 # $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));

# NOW USES ENV
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
    $tmp = 'https://ci4-strict.tk/';
    if(LOCALHOST):
      $tmp = 'http://localhost/ci4-strict.tk/public_html/';
    endif;  
  define('BASEURL', $tmp);
  define('CI_DEBUG', ! TRUE);

/*#  Valid PHP Version?
  $minPHPVersion = '7.2';
  if (phpversion() < $minPHPVersion)
  {
  	die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
  }
  unset($minPHPVersion);
*/


# Path to the front controller (this file)
  define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

# Location of the Paths config file.
# This is the line that might need to be changed, depending on your folder structure.
$pathsPath = FCPATH . '../app-strict/Config/Paths.php';
# if( isset($_GET['original']) ): // isset($_GET['strict'])
#   $pathsPath = FCPATH . '../app/Config/Paths.php';
# endif;  
# ^^^ Change this if you move your application folder

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

# Ensure the current directory is pointing to the front controller's directory
  chdir(__DIR__);

# Load our paths config file
  require $pathsPath;
  $paths = new Config\Paths();

# Location of the framework bootstrap file.
  $app = require rtrim($paths->systemDirectory, '/ ') . '/bootstrap.php';

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */


$app->run();