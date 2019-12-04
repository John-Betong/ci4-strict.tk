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
    <pre>
<b class="fsl fgr"> File: system/Database/Query.php: </b>

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

<hr>
<b class="fsl fgr"> file: system/Database/MySQLi/Connection.php:</b>

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

    </pre>
  
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
  </div><!-- article -->

   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>