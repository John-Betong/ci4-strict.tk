<?php DECLARE(STRICT_TYPES=1);

# namespace "Views\incs\doctype-001.php";
require APPPATH ."Views/incs/doctype-001.php";

?>
<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> 
      Bugs Fixed in App and System 
    </h2>
   
<!-- ############################################################# -->   
  <dl class="dib"> 
  <dt class="fsl XXXbgg fgg"> file: /public_html/index.php </dt>
  <dd><pre class="ooo p42 bgE bd1">
&lt;?php DECLARE(STRICT_TYPES=1); 

define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
# Toggles server name and other server specific variables, etc
  error_reporting(-1); // regardless
  ini_set('display_errors', LOCALHOST ? '1' : '0');

$_SERVER['CI_ENVIRONMENT'] = LOCALHOST ? 'development' : 'production';
# easier than setting directive in two .htaccess files

define('CI_DEBUG', FALSE); 
define('jj', "\n&lt;br&gt;");
  
require '../app-strict/Views/incs/fred.php';

# CLEANER - only shows last error logs and debugbar JSON files
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
    $url .= str_replace
    (
      basename($_SERVER['SCRIPT_NAME']), 
      '', 
      $_SERVER['SCRIPT_NAME']
    );
  endif;  
  defined('BASEURL') ?: define('BASEURL', $url); // usedd in App/paths.php

/* #  Valid PHP Version? - should throw errors if not correct?
  $minPHPVersion = '7.2';
  if (phpversion() &lt; $minPHPVersion)
  {
    die
    (
      "Your PHP version must be {$minPHPVersion} 
      or 
      higher to run CodeIgniter. Current version: " . phpversion()
      );
  }
  unset($minPHPVersion);
*/

# ORIGINAL index.php scripts below
</pre></dd></dl>

<!-- ############################################################# -->   
    <dl class="dib"> 
    <dt class="fsl bgg fgg"> file: app-strict/Views/errors/error_exception.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
# JOHN MODIFIED
# GLOBAL REPLACED TO ENSURE ONLY STRING
  # ! is_array($value) && ! is_object($value)
  is_string($value) 
</pre></dd></dl>


<!-- ############################################################# -->   
    <dl class="dib"> 
    <dt class="fsl bgg fgg"> file: system/Database/Query.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
public function getStartTime(bool $returnRaw = false, int $decimals = 6): string
{
  if ($returnRaw)
  {
    # JOHN MODFIED
    # return $this->startTime;
    return number_format($this->startTime, $decimals);
  }

  return number_format($this->startTime, $decimals);
}
</pre></dd></dl>



<!-- ############################################################# -->   
  <dl class="dib"> 
  <dt class="fsl bgg fgg "> file: system/Database/MySQLi/Connection.php </dt>
  <dd><pre class="ooo p42 bgE bd1">
public function connect(bool $persistent = false)
{
// Do we have a socket path?
if ($this->hostname[0] === '/')
{
  $hostname = null;
  $port     = null;
  $socket   = $this->hostname;
}
else
{
  $hostname = ($persistent === true) ? 'p:' . $this->hostname : $this->hostname;
  $port     = empty($this->port) ? null : $this->port;
  # JOHN MODIFIED
  # $socket = null;
  $socket   = '';
}
</pre></dd></dl>

  </div><!-- article -->


   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>