<?php declare(strict_types=1);

?>
<div>
	<h1 class="tac"> MISSING PAGE? </h1>
</div>

<?php 
if(0):
  vd( $uri->getTotalSegments()) ;
  vd( $uri->getSegments() );
  vd( $uri->getSegment(1, 'home') );
  vd( base_url() );
  vd( current_url( $default=false ) );
endif;