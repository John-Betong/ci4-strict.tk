<?php DECLARE(STRICT_TYPES=1);

?>
  <div class="w88 mga">
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


  </div>

  