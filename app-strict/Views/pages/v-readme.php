<?php DECLARE(STRICT_TYPES=1);

# namespace "Views\incs\doctype-001.php";

require APPPATH ."Views/incs/doctype-001.php";

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
    <h2 class="hhh ooo"> 
      README.md:
    </h2>
    <p class="hhh ooo"> &nbsp; </p>
  
    <?php
      $tmp = file_get_contents('../README.md'); 
      fred($tmp, 'File: README.md');

      # print_r($tmp); 
    ?>
 
  </div><!-- article -->
  
  <div class="footer tac p42">
    <?= $footer ?> 
  </div>


</body>
</html>

