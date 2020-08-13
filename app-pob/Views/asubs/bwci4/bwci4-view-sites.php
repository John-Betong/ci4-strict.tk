<?php DECLARE(STRICT_TYPES=1);


# fred($content);
# fred( count($content) );
?>

  <div class="w88 mga tac">
    <h1> Built with CI4 </h1>

    <?php
			foreach($content as $key => $row) :
					$URL 	= '<a href="' .$row[1] .'">' 
								.		'<b class="btn bdr">' .$row[1] .'</b>'
								. '</a>';	
							
					echo $tmp = <<< ____EOT
						<dl class="w88 mga tal">
						<dt class="fsl"> $URL </dt>
						<dd> {$row[2]}  </dd>
						<dd class="tar">by:  {$row[0]}	 </dd>
						</dl>		
						<p> &nbsp; </p>
____EOT;
				endforeach;
		?>
  </div>
  
