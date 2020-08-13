<?php declare(strict_types=1);

# $request = \Config\Services::request();
?>
	<h1 class="tac"> Info goes here </h1>
	<p class="fsl fs2 tac"> 
		Please select a <b>Sub-menu</b> from above 
	</p>

<?php
if(0)	:

$aXXX = [
	'__file__' 											=> __file__, 
	' base_url() '									=> base_url(),
	'$uri->getSegment(1, "home")' 	=> $uri->getSegment(1, "home"),
	'current_url( $default=false )' => current_url( $default=false ),
	'current_url( $default=TRUE )' 	=> current_url( $default=TRUE ),
];
$tabs = '<table class="w88 mga bd1 p42"> ';
foreach($aXXX as $key => $item) :
	$tabs .= "<tr><td>" .$key .'</td><td>' .$item .'</td></tr>';
endforeach;
$tabs .= '</table>';

echo $tabs;
?>


<?php 
if(0):
	 $uri->getSegment(1, 'home');  
	
	current_url( $default=false );  

  vd( $uri->getTotalSegments() ) ;
  vd( $uri->getSegments() );
  vd( $uri->getSegment(1, 'home') );
  vd( base_url() );
  vd( current_url( $default=false ) );
endif;

endif;