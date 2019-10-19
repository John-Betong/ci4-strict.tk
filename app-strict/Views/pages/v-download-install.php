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
    <h2 class="ooo"> Download preferred zip file: </h2>
    <div class="spc"></div>

    <ul class="w88 mga fsl lh2">
      <li>
      <a href="/zips/ci4-strict.tk.zip"> 
        ci4-strict.tk.zip - (876.8 KB) 
      </a> 
      </li>
      <li>
      <a href="/zips/ci4-strict.tk.7z"> 
        ci4-strict.tk.7z - (383.9 KB) 
      </a> 
      </li>
      <li>
      <a href="/zips/ci4-strict.tk.tar.xz"> 
        ci4-strict.tk.tar.xz - (388.2 KB) 
      </a>
      </li>
    </ul>  
    <div class="spc"></div>

    <dl>
      <dt> Installation: </dt>
      <dd>
        <ol>
          <li> download any one of the above zip files </li>
          <li> create path to "http://localhost/<b>ANY-NAME</b>/" </li>
          <li> unzip contents of downloaded zip into "<b>ANY-NAME</b>" </li>
          <li class="fgr fwb"> make writable path "<b>ANY-NAME</b>/writable/"  </li>
          <li> Browse to "http://localhost/<b>ANY-NAME/public_html/</b>" </li>
          <li> experiment by adding your own script </li>
          <li> debug by viewing "<b>ANY-NAME</b>/writable/logs/log-TODAY.php" </li>
        </ol>
        Have fun :)
      </dd>  
    </dl>

  </div><!--article -->
  
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>

</body>
</html>