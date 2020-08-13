<?php DECLARE(STRICT_TYPES=1); ?>
<!--
    We are using View Layouts to provide a consistent
    look to the site. The `extend()` method tells the
    name of the view that this view will work with to
    display the final content. In this case, the view
    is at app/Views/layout.php
-->
<?php echo $this->extend('layout') ?>

<!--
    Everything between `section()` and `endSection()
    is inserted into the `layout` view where it calls
    `$this->renderSection('content')`.
-->
<?php echo $this->section('content') ?>
  
  <p> <br> </p>
  <h3> file: <?= __file__ ?> </h3>
  
  <dl class="w88 mga bgs bd1">  
    <dt> 
      DataBase: <?php echo $content; ?>
    </dt>
    <dd class="tac"> 
      <table class="dib tal">  
        <tr> <th> Table name </th><th> rows </th> </tr>

        <tr> <td> <?= $table1 ?> </td><td> <?= $row1 ?></td> </tr> 
        <tr> <td> <?= $table2 ?> </td><td> <?= $row2 ?></td> </tr> 
        <tr> <td> <?= $table3 ?> </td><td> <?= $row3 ?></td> </tr> 
        <tr> <td> <?= $table4 ?> </td><td> <?= $row4 ?></td> </tr> 
        <tr> <td> <?= $table5 ?> </td><td> <?= $row5 ?></td> </tr> 
      </table>      
    </dd>
  </dl>  
  <br>
  <h4 class="tac fgg"> Playground link should now be OK </h4>


<?= $this->endSection() ?>
