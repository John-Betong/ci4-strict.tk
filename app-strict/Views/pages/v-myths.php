<?php DECLARE(STRICT_TYPES=1);

  require APPPATH .'Views/incs/doctype-001.php'; 

?>
<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
    <!-- h4 class="hhh ooo"> Strict_types=0 </h4 -->  
  </div>

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>
 
  <div class="article">
    <h2 class="ooo"> Declare Strict_types - Myths and Clarification </h2>
    <p> &nbsp; </p>
 
    <dl>
      <dt class="fsl fwb"> 
        <a class="tdn" href="https://en.wikipedia.org/wiki/Wikipedia:Too_long;_didn%27t_read">
        TL;DR
        </a>
      </dt>
      <dd> 
        <blockquote>
          Instead study the following examples... &nbsp; 
          try to guess the result before selecting a Test(...) option:
        </blockquote>
      </dd>

      <dt class="p55 tac lh2"> 
        <a 
          class="btn fsl fwb bd1 rad bga fg0 p42"
          href="<?=  BASEURL .'strict-0'; ?>"
          > 
          <strong> Test Strict_types </strong>
        </a> 
        <br>
      </dt>
      <dd> &nbsp; </dd>
    </dl>

    <div class="tac">
      <h2 class="dib rad p42 bgg fgg XXXbgr XXXfgy bd1 fsl lh2">
          Declare(Strict_types=1) <br> it's like <br> driving with a seatbelt...
          <br>
          <em>
            and an airbag!
          </em>
      </h2>    
      <br>
      <h2> <strong> ¯\_(ツ)_/¯ </strong> </h2>
    </div>    
    <p> <br> </p>


      <dl>
      <dt> PHP - Brief History  </dt>
      <dd> 
        <p>
        Introduced nearly 25 years ago! Originally designed to simply enhance web development. The simplistic approach necessitated a large amount of script to make writing HTML script easy. 
        </p>
        <p>
        Unfortunately making PHP more user friendly increased processing time and PHP aquired a reputation for being very slow...
        </p>
      </dd>
      <dd> &nbsp; </dd>



      <dt> PHP 7 has overcome slow processing... </dt>
      <dd> 
        <p>
          Released December 2015,
          it not only but also achieved better performance but also does not affect legacy code! 
        </p>

        <p>
          Most performance is due to eliminating "Type juggling". 
        </p>

        <blockquote class="w88 mga fwb">
          Native PHP functions now have all function parameters types and return types set!
        </blockquote>

        <p>    
          This feature would have made all legacy libraries fail but has been cunningly implemented and applies **ONLY** if the following declaration is the first file statement.
        </p>

        <blockquote class="w88 mga fwb">
          &lt;?php declare(strict_types=1);
        </blockquote>
        
        <p>
          The strict_types validation checks <strong>only</strong> apply to the file where the declaration has been set!
        </p>

        <p>
           This new feature is vastly misunderstood and can be simplified with the following three usage types which cover every eventuality:
        </p>
        <ol>
          <li> Do not use the feature - ideal for **OLD** external libraries. </li>
          <li> 
            Declare strict_types - usage: 
            <ul>
              <li> 
                Native PHP function parameter types must match otherwise errors will be activated.
              </li>
              <li> 
                Included files having functions have two options 
              </li>
            </ul>
          </li>
        </ol>
      </dd>
      <dd> &nbsp; </dd>
      <dd> &nbsp; </dd>
      
      <dt class="XXXfsl">
        <a href="https://belitsoft.com/php-development-services/php7-upgrading-from-php5-performance-security-reasons-and-case-studies">
        Source
      </a>
     </dt>
      <dd> &nbsp;  </dd>

      <dd> 
        Why treat warnings as errors? They are just warnings!
        A compiler warning signals a potentially serious problem in your code. The problems listed above are almost always fatal; others may or may not be, but you want compilation to fail even if it turns out to be a false alarm. Investigate each warning, find the root cause, and fix it. In the case of a false alarm, work around it — that is, use a different language feature or construct so that the warning is no longer triggered. If this proves to be very hard, disable that particular warning on a case by case basis.
      </dd>
      <dd> &nbsp;  </dd>

      <dd>
        You don't want to just leave warnings as warnings even if all of them are false alarms. It could be OK for very small projects where the total number of warnings emitted is less than 7. Anything more, and it's easy for a new warning to get lost in a flood of old familiar ones. Don't allow that. Just cause all your project to compile cleanly.
      </dd>
      <dd> &nbsp;  </dd>

      <dd>
        Note this applies to program development. If you are releasing your project to the world in the source form, then it might be a good idea not to supply -Werror or equivalent in your released build script. People might try to build your project with a different version of the compiler, or with a different compiler altogether, which may have a different set of warnings enabled. You may want their build to succeed. It is still a good idea to keep the warnings enabled, so that people who see warning messages could send you bug reports or patches.        
      <dd>
      <dd> &nbsp;  </dd>
    </dl>
  </div><!-- article -->
  
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>
  
</body>
</html>