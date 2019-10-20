<?php DECLARE(STRICT_TYPES=1);

require APPPATH .'Views/incs/doctype-001.php'; 

$github = 'https://github.com/codeigniter4/CodeIgniter4';
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
    <h2 class="ooo">Source files: </h2>
    <p class="ooo"> &nbsp; </p>

    <dl>
      <dt> Special notes: </dt>
      <dd>
        <ol> 
          <li> Gitub <a href="<?= $github ?>">source files</a> </li>
          <li> 
            <code>
              DECLARE(STRICT_TYPES=1);
            </code>
            inserted into:
            <ul>
              <li> every PHP file with a single PHP occurrence </li>
              <li> PHP with multiple references requires manually insertion </li>
            </ul>
           </li>
          <li> NON Php files not modified </li>
        </ol>
      </dd>
    </dl>
    <p class="ooo"> &nbsp; </p>

    <dl>
      <dt> Path: app  </dt>
      <dd class="dib p42 bd1 bgs fred">  
        <!-- pre class="dib p42 bd1 bgs fred" -->
          <?php # "\r" .trim(file_get_contents('../STRICT-LOG.php') ); ?>
          <pre><?=     "\r" .trim(file_get_contents('../README.md') ); ?></pre>
        <!-- /pre -->  
      </dd>
    </dl>
  </div><!-- article -->
  
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>

</body>
</html>