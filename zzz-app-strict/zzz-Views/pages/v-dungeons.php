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
    <h2 class="ooo"> <?= ucFirst($title) ?> </h2>
    <p class="ooo"> &nbsp; </p>
  
    <h3> <?= 'Dungeon soon to go here' ?> </h3>

    <h3 class="tac btn"> <a href="<?= BASEURL ?>playground"> Playground </a> </h3> 

    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>
    <p> <br><br><br><br><br><br><br><br> </p>

   </div><!-- article -->
  
   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>