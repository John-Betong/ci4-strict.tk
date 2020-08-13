<?php DECLARE(STRICT_TYPES=1); 

require APPPATH ."Views/incs/doctype-001.php";

$showDbugBackTrace  = defined('SHOW_DEBUG_BACKTRACE') 
                    ? 'TRUE' 
                    : 'NOT DEFINED';
$aConsts = [
  'APPPATH'       => APPPATH,
  'CI_DEBUG'      => CI_DEBUG ? 'TRUE' : 'FALSE',  
  'ENVIRONMENT'   => ENVIRONMENT,  
  'FCPATH'        => FCPATH,
  'SYSTEMPATH'    => SYSTEMPATH,
  'WRITEPATH'     => WRITEPATH,
  'SHOW_DEBUG_BACKTRACE' => $showDbugBackTrace,
];

?>

<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> Useful links </h2>
    <h3> <?= getenv('app.baseURL') ?> </h3>

    <dl>
      <dt class="fsl">
        <a href="https://github.com/codeigniter4/CodeIgniter4">
          GitHub CodeIgniter4
        </a>
      </dt>
      <dd> Gihub CodeIgniter4 System Files Repository </dd>
      <dd> &nbsp; </dd>

      <dt class="fsl">
        <a href="https://github.com/John-Betong/ci4-strict">
          GitHub John-Betong
        </a>
      </dt>
      <dd> Gihub Repository for this project </dd>
      <dd> &nbsp; </dd>

      <dt class="fsl">
        <a href="https://github.com/codeigniter4projects/playground">
          Github CodeIgniter4 Projects - Playground
        </a>
      </dt>
      <dd> Gihub Repository for this project </dd>
      <dd> &nbsp; </dd>

      <dt class="fsl">
        <a href="https://forum.codeigniter.com/thread-74919.html">
          Forum CodeIgniter4 Playground
        </a>
      </dt>
      <dd> Forum CodeIgniter4 Topic this project </dd>
      <dd> &nbsp; </dd>
    </dl>
    <p> <br><br><br><br><br><br><br><br><br><br> </p>
  
  </div><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>

</body>
</html>

