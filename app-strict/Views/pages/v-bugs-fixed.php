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
      System Bugs Fixed to Enable MySqli
    </h2>
    
    <dl class="dib bd1"> 
    <dt class="fsl fgr"> File: system/Database/Query.php: </dt>
    <dd><pre class="p42">
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

  <dl class="dib bd1"> 
  <dt class="fgr">
    file: system/Database/MySQLi/Connection.php:
  </dt>
  <dd><pre class="p42">
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
  $socket   = ''; // null;
}
</pre></dd></dl>

  </div><!-- article -->


   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>