<?php DECLARE(STRICT_TYPES=1); 
  
  define('LOG_FILE',  '../writable/logs/log-' .date('Y-m-d') .'.log');
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
  if(LOCALHOST) :
    $_SERVER['CI_ENVIRONMENT'] = 'development'; 

  # CLEANER -  only shows last error logs and debugbar JSON files
    if(file_exists(LOG_FILE)):
      $ok = unlink(LOG_FILE);
    endif;
   # $ok = unlink(LOG_FILE);
    $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));
  else:  
    $_SERVER['CI_ENVIRONMENT'] = 'production';
    $_SERVER['CI_ENVIRONMENT'] = 'development'; 
  endif; 

# dynamic BaseUrl - https://forum.codeigniter.com/thread-74649.html  
  if( TRUE || DEFINED('AUTOMATIC_URL_DETECTION') ) :
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

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();
