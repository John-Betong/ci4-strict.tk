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
    <h2> 
      Bugs Fixed in App and System 
    </h2>
   

<!-- ############################################################# -->   
    <dl class="hhh clb dib"> 
    <dt class="fsl bgg fgg"> file: ./system/Cache/Handlers/FileHandlers.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
      public function __construct($config)
      {
        $path = ! empty($config->storePath) ? $config->storePath : WRITEPATH . 'cache';
        if (! is_really_writable($path))
        {

      # John's PROPOSAL START =======================================
        $aTmp = [
         'Unable to log Errors and/or warnings', 
         'Please set ../writable folder permissions to 0777',
         '../writable folder permissions not set to 0777',
         'Please consult manual regarding ../writable folder',
         '\t\tWhoops! \n\nWe seem to have hit a snag. \n\n\tPlease try again later...\n\n',
         'Better suggestions welcome \n\n\t\t :)\n\n',
         'Shit happens :(',
         ];
        $tmp = $aTmp[mt_rand(0, count($aTmp)-1 )];
        $tmp = $tmp 
             . '\n\n'
             . 'https://forum.codeigniter.com/thread-75857.html'
             ;

        ?&gt;
          &lt;script&gt; alert("&lt;?= $tmp ?&gt;"); &lt;/script&gt;
        &lt;?php
        # throw CacheException::forUnableToWrite($path);
      # John's PROPOSAL FINISH =======================================

    }

    $this->prefix = $config->prefix ?: '';
    $this->path   = rtrim($path, '/') . '/';
  }//endfunc

</pre></dd></dl>


<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgg fgg"> file: app-strict/Views/html/errors/error_exception.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
# JOHN MODIFIED
# GLOBAL REPLACED TO ENSURE ONLY STRING
  # ! is_array($value) && ! is_object($value)
  is_string($value) 
</pre></dd></dl>


<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgr fgs"> file: system/Database/Query.php </dt>
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
  <dt class="fsl bgr fgs "> file: system/Database/MySQLi/Connection.php </dt>
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