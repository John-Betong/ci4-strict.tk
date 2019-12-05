<?php DECLARE(STRICT_TYPES=1); 

error_reporting(-1);
ini_set('display_errors', '1');

$_SERVER['CI_ENVIRONMENT'] = 1 ? 'development' : 'production';
define('CI_DEBUG',           1 ? FALSE : TRUE);
define('jj', "\n<br>");
  
  $debugFile = '/var/www/ci2/fred.php';
  if( file_exists($debugFile) ):
    require $debugFile;
  endif;

# CLEAN TRASH    
  $ok = @unlink('../writable/logs/log-' .date('Y-m-d') .'.php');
  $ok = @array_map('unlink', glob("../writable/debugbar/*.json"));

# https://forum.codeigniter.com/thread-74649.html  
  if( 1 || DEFINED('AUTOMATIC_URL_DETECTION') ) :
    $url = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) 
        && 
        ('on' == $_SERVER['HTTPS']) 
        ? "https://" 
        : "http://") .$_SERVER['HTTP_HOST']
        ;
    $url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    # define('BASEURL', $tmp);
  endif;  
  defined('BASEURL') ?: define('BASEURL', $url);
  
# USES ENV ???
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
    # $url = 'https://ci4-strict.tk/';
    $url = 'https://ci4-strict.tk/';
    if(LOCALHOST):
      $url = 'http://localhost/ci4-strict.tk/public_html/';
    endif;  


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
  if( isset($_GET['pg']) ) :
    $pathsPath = FCPATH . '../app-playground/Config/Paths.php';
  else:  
    $pathsPath = FCPATH . '../app-strict/Config/Paths.php';
  endif;  

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
