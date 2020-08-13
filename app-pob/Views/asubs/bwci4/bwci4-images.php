<?php DECLARE(STRICT_TYPES=1);

  # require APPPATH .'Views/incs/doctype-pob.php'; 

?>
 
  <div class="w88 mga">
    <h2 class="ooo">CI4 Applications </h2>
    <p class="tac"> 
	  <?php 
		$imgs = glob( FCPATH .'assets/imgs/links/*.png');

		foreach($imgs as $key => $link) :
			$aDims 	= getimagesize($link);
			$dims 	= str_replace('"', "'", $aDims[3]);
			$src 		= str_replace(FCPATH, base_url() .'/', $link);
			echo "
				<a class='fll img p42'>
					<img 
						src='$src'
						$dims
						alt='#'>
				</a>	
				";
		endforeach;
	  ?>
	</p>
     
  </div><!-- article -->
  
