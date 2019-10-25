<?php DECLARE(STRICT_TYPES=1);

require APPPATH .'Views/incs/doctype-001.php'; 

?>

<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
    <h4 class="hhh ooo"> Strict_types=0 </h4>  
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> Moved to GitHub : </h2>
    <div class="spc"></div>

    <h2>
      <a href="https://github.com/John-Betong/ci4-strict">
        GitHub Source 
      </a>
    </h2>

    <div class="spc"></div>
    <dl>
      <dt> Installation: </dt>
      <dd>
        <ol>
          <li> download from Github </li>
          <li> create path to "http://localhost/<b>ANY-NAME</b>/" </li>
          <li class="fgr fwb"> make writable path "<b>ANY-NAME</b>/writable/"  </li>
          <li> Browse to "http://localhost/<b>ANY-NAME/public_html/</b>" </li>
          <li> experiment by adding your own script </li>
          <li> debug by viewing "<b>ANY-NAME</b>/writable/logs/log-TODAY.php" </li>
        </ol>
        Have fun :)
      </dd>  
    </dl>

    <p class="lh2"> <br><br><br><br><br><br><br><br><br><br> </p>
  </div><!--article -->
  
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>

</body>
</html>