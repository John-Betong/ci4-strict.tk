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
    <h2 class="ooo"> Source file used to insert DECLARE(STRICT_TYPES=1); </h2>
    <p class="ooo"> &nbsp; </p>
  
    <em class="fsl">file: </em> <strong> STRICT_INSERT.php </strong>
    <br><br>
    <div class="dib p42 bgE bd1">
      <?php highlight_file('../STRICT-INSERT.php'); ?>
    </div>
  </div><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>
</body>
</html>