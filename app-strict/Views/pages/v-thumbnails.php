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
      Playground get thumbnail
    </h2>
  
  <h2><?= esc($title); ?></h2>

  <?= \Config\Services::validation()->listErrors(); ?>

  <form action="/news/create">

      <label for="title">Title</label>
      <input type="input" name="title" /><br />

      <label for="body">Text</label>
      <textarea name="body"></textarea><br />

      <input type="submit" name="submit" value="Create news item" />

  </form>


  </div><!-- article -->


   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>