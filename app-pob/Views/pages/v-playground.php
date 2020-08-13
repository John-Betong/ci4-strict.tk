<?php DECLARE(STRICT_TYPES=1);

/*
  <div class="w88 mga">
    <h2 class="ooo"> <?= ucFirst($title) ?> </h2>
    <p class="ooo"> &nbsp; </p>
  
    <h3> <?= 'Dungeon soon to go here' ?> </h3>

    <h3 class="tac btn"> <a href="<?= base_url('playground'); ?>"> Playground </a> </h3> 
   </div>
  */
?>   
	<div class="article tac">
    <em class="flr">
        <a href="https://github.com/codeigniter4projects/playground">
            GitHub PlayGround
        </a>
    </em>

    <div class="fss">
      <?php echo $this->renderSection('content') ?>
    </div>    

    <p> &nbsp; </p>

    <div class="tac">
      <dl class="dib tal bd1">
        <dt class="bgd"> Stats: </dt>
        <dd> &nbsp; </dd>
        <dd> Page rendered in {elapsed_time} seconds.</dd>
           
        <dd>
          <p class="text-center">PHP <?= phpversion() ?></p>
        </dd>
        <dd class="col">
          <p class="text-right">Environment: <?= ENVIRONMENT ?></p>
        </dd>
      </dl>
    </div><!-- class="tac" -->  

    <!-- KLUDGE -->        
      <p> <br><br><br><br><br> </p>
  </div><!-- class="article tac" -->


