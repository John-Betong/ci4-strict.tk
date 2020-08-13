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

  <div class="article w88 mga">
    <h2> 
      Bugs Fixed in App and System 
    </h2>
   

<!-- ############################################################# -->   
    <dl class="clb dib"> 
    <dt class="fsl bgr fgs"> file: ./system/CodeIgniter/CodeIgniter.php </dt>
    <dd><pre class="ooo p42 bge bd1">

      /**
        * Handles some basic app and environment setup.
      */
      public function initialize()
      {
        // Set default locale on the server
        // John ADDED FOLLOWING CHECK BECAUSE STILL TO BE SET ON MY SYSTEM  
		if( function_exists('locale_set_default' ) ) :
			locale_set_default($this->config->defaultLocale ?? 'en');
		endif;	

    </pre></dd></dl>

<!-- ############################################################# -->   
    <dl class="hhh clb dib"> 
    <dt class="fsl bgg fgg"> file: app-strict/Views/html/errors/error_exception.php </dt>
    <dd><pre class="ooo p42 bgE bd1">
      # JOHN MODIFIED
      # GLOBAL REPLACED TO ENSURE ONLY STRING
        # ! is_array($value) && ! is_object($value)
        is_string($value) 
      </pre></dd></dl>

  </div><!-- article -->


   <div class="footer tac p42">
     <?= $footer ?> 
   </div>

</body>
</html>