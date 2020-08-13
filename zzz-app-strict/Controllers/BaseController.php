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
#	public    $style_tla 	= '';
 
public $pages = [
 #  'information'       => 'Info',
 #  'info'              => 'Information', 
    'conversion-script' => 'Conversion Script',
    'disqus'            => 'Disqus',
    'environment'       => 'Environment', 
    'excel'             => 'Excel', 
    'download-install'  => 'Download &amp; Install',
    'more'              => 'More info',
    'myths'             => 'Myths explained',
    'modified-files'    => 'Modified files', 
    'playground'        => 'Playground',
    'thumbnails'        => 'Get thumbnails',
    'bugs-fixed'        => 'Bugs Fixed',
    'readme'            => 'Readme',
    'rsync'             => 'Rsync',
    'strict-0'          => 'Test Strict_types',
    'strict-1'          => 'NOT IN MENU',
    'welcome-amp'       => 'Welcome AMP',
    'welcome-new'       => 'Welcome New',
    'welcome-message'   => 'Welcome Original',
    'welcome-strict'    => 'Welcome Strict',
    'heroes'            => 'heroes',
    'dungeons'          => 'dungeons',
    'builtwithci4' 		=> 'Built With CI4', 
    'bwci4-images'      => 'Url Images',
    'bwci4-database'    => 'DataBase',
    'bwci4-add-site'    => 'Add Site',
    'bwci4-add-spare'   => 'SPARE',
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

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();

		# $uri = $request->uri;
	}

}
