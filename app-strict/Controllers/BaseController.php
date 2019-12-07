<?php DECLARE(STRICT_TYPES=1); 
namespace App\Controllers;
 

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers 		= [];
	public    $style_tla 	= '';
 
public $pages = [
    'conversion-script' => 'Conversion Script',
    'disqus'            => 'Disqus',
    'environment'       => 'Environment', 
 #  'information'       => 'Info',
 #  'info'              => 'Information', 
    'download-install'  => 'Download &amp; Install',
    'more'              => 'More info',
    'myths'             => 'Myths explained',
    'modified-files'    => 'Modified files', 
    'playground'        => 'Playground',
    'bugs-fixed'        => 'Bugs Fixed',
    'readme'            => 'Readme',
    'rsync'             => 'Rsync',
    'strict-0'          => 'Test Strict_types',
    'strict-1'          => 'NOT IN MENU',
    'welcome-strict'    => 'Welcome Strict',
    'welcome_message'   => 'Welcome Original',
    'heroes'            => 'heroes',
    'dungeons'          => 'dungeons'
  ];


	/**
	 * Constructor.
	 */
	//==========================================================
	public function initController
	(
		\CodeIgniter\HTTP\RequestInterface $request, 
		\CodeIgniter\HTTP\ResponseInterface $response, 
		\Psr\Log\LoggerInterface $logger
	)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		if(0):
			#	$this->style_tla = file_get_contents(APPPATH .'Views/css/style-tla.min.css');
			# $this->style_tla = str_replace(["\n", "\r", "\t", "  "] , ' ', $this->style_tla);
		else:	
		#	$this->style_tla = file_get_contents(APPPATH .'Views/css/style-paul.css');
			if(0) :
				# $this->style_rst = file_get_contents(APPPATH .'Views/css/style-reset.css');
			endif;
		#	$this->style_tla = file_get_contents(APPPATH .'Views/css/style-pof.css');
			$this->style_tla = file_get_contents('assets/css/style-pof.css');
		# 	$this->style_tla = str_replace(["\n", "\t", "\r", '  '], ' ', $this->style_tla);
		endif;
		# $this->style_ci4 	= file_get_contents(APPPATH .'Views/css/style-ci4.min.css');

		# $this->style_ci4 = str_replace(["\n", "\r", "\t", "  "] , ' ', $this->style_ci4);
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();

		# $uri = $request->uri;
	}

}
