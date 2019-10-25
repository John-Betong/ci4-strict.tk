<?php DECLARE(STRICT_TYPES=1);  

namespace App\Controllers;

# echo __file__;die;

//=========================================  
class C_page extends BaseController
{

public $pages = [
    'disqus'            => 'Disqus',
    'env'               => 'Info',
    'info'              => 'Information', 
    'conversion-script' => 'Conversion Script',
    'download-install'  => 'Download &amp; Install',
    'myths'             => 'Myths explained',
    'modified-files'    => 'Modified files', 
    'readme'            => 'Readme',
    'rsync'             => 'Rsync',
    'strict-0'          => 'Test Strict_types',
    'strict-1'          => 'NOT IN MENU',
    'welcome-strict'    => 'Welcome Strict',
    'welcome_message'   => 'Welcome Original',
  ];

//=========================================  
public function index(string $page='myths') // 'welcome_message')
{
  $analytics = <<< ____EOT
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149630114-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149630114-1');
    </script>
____EOT;

  $data['pages']      = $this->pages; //
  $data['analytics']  = $analytics; 
  $data['title']      = 'Ci4-Strict.tk'; //
  $data['footer']     = view('incs/footer.php', $data, [TRUE] );
  $data['style_tla']  = $this->style_tla;

  #if( (int) $page && (int) $page <= 10) :
  #  $page   = str_pad($page, 3, "0", STR_PAD_LEFT); 
  #  $page   = 'vPage-' .$page;

  # if( in_array($page, $this->pages) ) :  
  if( array_key_exists($page, $this->pages) ) :  
    $page = 'pages/v-' .$page;

  else :  
    $data['title'] = 'welcome_message';
    // WHOOPS
    # $page =  'welcome_message'; 
    # $page = 'v-strict-0';
  endif;

  $data['vPage']  =  $page; 
  # fred($data); die;
  # echo $page ; die;
  
	return view($data['vPage'], $data);
}//


}///
