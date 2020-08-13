<?php declare(strict_types=1);

# $request = \Config\Services::request();
?>
	<h1 class="tac"> Built with CodeIgniter4  </h1>
	<p class="fsl tac bdr"> 
		<a 
			class="btn bdr" 
			href="<?= base_url('bwci4/bwci4-view-sites') ?>">
			View sites
		</a>
	</p>

	<div class="w88 mga">
		<p>
			Please note that adding a site is by request only.
		</p>
		<p>	
			Request to be sent to John_Betong on the CodeIgniter 
			<a href="https://forum.codeigniter.com/">
				<b class="fsl"> forum </b>		
			</a>
		</p>
		<p>	
			Only if it is possible to test that a site is actually written using CodeIgniter4 I will create a submission form.
		</p>
	</div>	










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