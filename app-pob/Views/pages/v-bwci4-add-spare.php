<?php DECLARE(STRICT_TYPES=1);


?>
 
  <div class="w88 mga">
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
     
  </div>
  
