<?php DECLARE(STRICT_TYPES=1);


?>

  <div class="w88 mga">
    <h2 class="ooo"> CI4 Applications </h2>
    <p class="tac">  QQQ goes here </p>
	  <?php 
	  	if(0) :
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
		else:
		    $tmp = <<< ____EOT
		    	<form action="bwci4add" method="post" class="tac">
		    	  <div class="dib mga bgs bd1 bwci4 tac">
		    	  	<label> uname 	</label> 
		    	  		<input type="text" name='uname' value="{$content['uname']}" />
		    	  		<br>
		    	  	<label> url 	</label> 
		    	  		<input type="text" name='url' value="{$content['url']}" />
		    	  		<br>
		    	  	<label> notes 	</label> 
		    	  		<input type="text" name='notes' value="{$content['notes']}" />
		    	  		<br>

		    	  	<label> images </label> 
		    	  		<input type="text" name='images' value="{$content['images']}" />
		    	  		<br>
		    	  	<label> details </label> 
		    	  		<input type="text" name='details' value="{$content['details']}" />
		    	  		<br>
		    	  	<label> created </label> 
		    	  		<input type="text" name='created' value="{$content['created']}" />
		    	  		<br>
	    	  		<input class="flr bgr" type="submit" name='bwci4-submit' value="submit" />

		    	  </div>	
		    	</form>
		    </div>
____EOT;
            echo $tmp;               
			fred($content, '$content');
		endif;
	  ?>
     
  </div>
  
