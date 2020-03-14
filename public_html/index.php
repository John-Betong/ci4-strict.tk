<?php DECLARE(STRICT_TYPES=1); 
 
error_reporting(-1); // regardless

require '../app-strict/Views/incs/fred.php';

define('jj', "\n<br>");
define('LOGFILE',   '../writable/logs/log-' .date('Y-m-d') .'.php');
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
if(LOCALHOST) :
  define('CI_DEBUG', FALSE); // bypass (bool) app/Config/oot/development.php
  ini_set('display_errors', '1'); 
  $_SERVER['CI_ENVIRONMENT'] = 'production';  // bypass .env & .htaccess
  $_SERVER['CI_ENVIRONMENT'] = 'development'; // bypass .env & .htaccess
  $useKint = FALSE;

  # require '../system/ThirdParty/Kint/kint.php';

# CLEANER -  only shows last error logs and debugbar JSON files
  $ok = @unlink(LOGFILE);
  $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));
else:  
  define('CI_DEBUG', FALSE); // bypass (bool) app/Config/oot/prdouction.php
  ini_set('display_errors', '0'); 
  $_SERVER['CI_ENVIRONMENT'] = 'production'; // bypass .env & .htaccess
  $useKint = FALSE;
endif; 

# dynamic BaseUrl - https://forum.codeigniter.com/thread-74649.html  
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
  defined('BASEURL') ?: define('BASEURL', $url); # app/Paths.php, etc

# ORIGINAL index.php scripts below

#  Valid PHP Version? - should throw errors if not correct
  $minPHPVersion = '7.2';
  if (phpversion() < $minPHPVersion)
  {
    die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
  }
  unset($minPHPVersion);

# Path to the front controller (this file)
  define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
  $pathsPath = FCPATH . '../app-strict/Config/Paths.php';
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

if(0) :
  fred($paths,   'function fred($paths, $title=""))');
  table( $paths, 'function table((array) $paths), $title="")');
  vd($paths,     'function vd($paths), $title="")' );
  vd3($paths);
  die();
endif;  

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();
