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
    <h2 class="ooo"> What a difference a define makes! </h2>

    <p> 
      This site is built using 
      <i>
        <a href="https://github.com/codeigniter4/CodeIgniter4">
          <b>CodeIgniter 4 Development</b>
        </a>
      </i> 
      -  Latest commit 9da5509 (2019.09.16)...
    </p>

    <dl>
      <dt class="fgr fwb"> Except:  </dt>
      <dd> 
        <ol>
          <li> modified 
            <a href="<?= BASEURL ?>5">
              ./public/index.php 
            </a>
            to ease debugging 
          </li>
          <li> declare(strict_types=1); is now called in all PHP files </li>
          <li> 
            <a href="<?= BASEURL .'3' ?>">
              strict-insert.php
            </a> 
            &nbsp;- inserts declaration if PHP file has a single PHP reference
          </li>
          <li> manual insertion required if multiple PHP references found </li>
        </ol>  
      </dd>
    </dl>
    <div class="spc"> &nbsp;</div>

    <dl> 
      <dt>Declare Strict Info:</dt>
      <dd>
        <p>
          PHP 7's strict feature is a major improvement and now runs a lot faster.  I believe this is due to every internal PHP function now uses "Strict types" parameters and  return type declarations.
        </p>

        <blockquote>
          <i>Cunning implementation ensures the processor intensive "type juggling" is not effected. &nbsp;
          The new features are only "file wide" when "declare(strict_types=1);" </i>.
        </blockquote>
        
        <p>
          Using this declaration also has an additional benefit by "failing fast" - program execution immediately halts and an error is generated - regardless - even when error_reporting(0); is turned off. 
        </p>  

        <blockquote>
          <b><i> Once tried always used because it is far better than just using error_reporting(-1). </i></b>
        </blockquote>
        <div class="spc"></div>

        <h4 class="ooh"> When Localhost CodeIgniter4 runs: </h4>
        <ul>
          <li> log file is deleted, only localhost </li>
          <li> program halts if error occurs  </li>
          <li> {TODAY} log file examined </li>
          <li> error rectified and continue... </li>
        </ul>
      </dd>
    </dl>

    <p> enjoy your new debugging :) </p>
  </div><!-- article -->
    
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>

</body>
</html>