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

  <div class="article w88 mga">
    <h2 class="ooo"> 
      Bugs Fixed in App and System 
    </h2>
   
<!-- ############################################################# -->   
  <dl class="clb dib"> 
  <dt class="fsl XXXbgg fgg"> file: /public_html/index.php </dt>
  <dd><pre class="ooo p42 bgE bd1">
&lt;?php DECLARE(STRICT_TYPES=1); 

error_reporting(-1); // regardless

require '../app-strict/Views/incs/fred.php';

define('jj', "\n&lt;br&gt;");
define('LOGFILE',   '../writable/logs/log-' .date('Y-m-d') .'.php');
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
if(LOCALHOST) :
  define('CI_DEBUG', FALSE); // bypass (bool) app/Config/oot/development.php
  ini_set('display_errors', '1'); 
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
</pre></dd></dl>


<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgg fgg"> file: system/CodeIgniter.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
  # JOHN MODIFIED 
  # PREVENTED \Kint loading if CI_DEBUG is FALSE
  if( defined('CI_DEBUG') && CI_DEBUG):
    $config = config('Config\Kint');

    \Kint::$max_depth           = $config->maxDepth;
    \Kint::$display_called_from = $config->displayCalledFrom;
    \Kint::$expanded            = $config->expanded;

    if (! empty($config->plugins) && is_array($config->plugins))
    {
      \Kint::$plugins = $config->plugins;
    }

    \Kint\Renderer\RichRenderer::$theme  = $config->richTheme;
    \Kint\Renderer\RichRenderer::$folder = $config->richFolder;
    \Kint\Renderer\RichRenderer::$sort   = $config->richSort;
    if (! empty($config->richObjectPlugins) && is_array($config->richObjectPlugins))
    {
      \Kint\Renderer\RichRenderer::$object_plugins = $config->richObjectPlugins;
    }
    if (! empty($config->richTabPlugins) && is_array($config->richTabPlugins))
    {
      \Kint\Renderer\RichRenderer::$tab_plugins = $config->richTabPlugins;
    }

    \Kint\Renderer\CliRenderer::$cli_colors         = $config->cliColors;
    \Kint\Renderer\CliRenderer::$force_utf8         = $config->cliForceUTF8;
    \Kint\Renderer\CliRenderer::$detect_width       = $config->cliDetectWidth;
    \Kint\Renderer\CliRenderer::$min_terminal_width = $config->cliMinWidth;
  endif; // ($useKint):
</pre></dd></dl>  

<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgg fgg"> file: app-strict/Views/errors/error_exception.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
# JOHN MODIFIED
# GLOBAL REPLACED TO ENSURE ONLY STRING
  # ! is_array($value) && ! is_object($value)
  is_string($value) 
</pre></dd></dl>


<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgg fgg"> file: system/Database/Query.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
public function getStartTime(bool $returnRaw = false, int $decimals = 6): string
{
  if ($returnRaw)
  {
    # JOHN MODIFIED
    # return $this->startTime;
    return number_format($this->startTime, $decimals);
  }

  return number_format($this->startTime, $decimals);
}
</pre></dd></dl>



<!-- ############################################################# -->   
  <dl class="clb dib"> 
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