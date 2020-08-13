<?php DECLARE(STRICT_TYPES=1);

  require APPPATH .'Views/incs/doctype-001.php'; 

?>
<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
  </div>

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>
 
  <div class="article">
    <h2 class="ooo">CI4 Applications </h2>
    <p class="tac"> 
	  <?php 
		$imgs = glob('assets/imgs/links/*.png');
		foreach($imgs as $key => $link) :
			$aDims = getimagesize($link);
			# echo '<pre>'; print_r($aDims);die;
			$dims = str_replace('"', "'", $aDims[3]);
			echo "
				<a class='fll img p42'  href='//ci4-strict.tk/myths'>
					<img 
						src='$link'
						$dims
						
						alt='#'>
					$link
				</a>	
				";
		endforeach;
	  ?>
	</p>
     
  </div><!-- article -->
  
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>
  
</body>
</html>