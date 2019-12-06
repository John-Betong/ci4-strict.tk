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

  <dl class="article">
    <dt class="fsl"> The GitHub README.md </dt>
    <dd><pre class="dib bgE fga bd1 p42">
    <?php
      $tmp = file_get_contents('../README.md'); 
        echo $tmp;
    ?>
   </pre></dd>
   </dl><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>

</body>
</html>

