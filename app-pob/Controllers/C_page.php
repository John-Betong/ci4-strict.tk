<?php DECLARE(STRICT_TYPES=1);  
namespace App\Controllers;

# use App\Controllers\Class_pdo;
# require APPPATH .'Controllers/Class_pdo.php';
# use Controllers\Class_pdo;
 

//=========================================  
class C_page extends BaseController
{

public $PDO;

//=========================================  
public function index
(
  string $page  = '', 
  string $subs  = ''
)
{
  $uri  = service('uri');
  $path = empty($page) ? 'home' : $page;
  $data = [
    'uri'       => $uri,  // $analytics; 
    'title'     => 'Ci4-Strict.tk',
    'titleUrl'  => $path
   ];  //

  echo view('incs/doctype-pob', $data);
  echo view('incs/menu-pob' ,   $data);

  $PAGE = APPPATH .'Views/asubs/' .$path .'/index.php';

  $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing

  if(file_exists($PAGE) ):
    $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing
    $PAGE = $tmp;
    echo view('asubs/' .$path .'/index', $data);
  else:
    echo view('asubs/dummy', $data);
  endif;  

 require '/var/www/footer.php';

  return TRUE;
}//


//=========================================  
public function bwci4
(
  string $page  = '' 
):string
{
  // Create a new class manually
  if(0) :
    # $M_bwci4 = new \App\Models\M_bwci4();
  else:
    $this->PDO = $this->setPDO();

    $sql  ='SELECT * FROM `bw-projects`; ';
    if(01):


$sth = $this->PDO->prepare($sql);
$sth->execute();

/* Fetch all of the remaining rows in the result set */
$content = [];
while($result = $sth->fetchAll() ) :
  foreach($result as $key => $row) :
    $content[] = [
      $row[2], $row[3], $row[4]
    ];
    # echo '<br>User: '   .$row[2] ; // user
    # echo '<br>Url: '    .$row[3] ; // url
    # echo '<br>Notes: '  .$row[4] ; // notes
    # echo '<hr>';
  endforeach;
endwhile;  
# fred($content) ;
# die;
      # $tmp  = $this->_tryObject($sql)->fetchAll();
    else:
      $tmp  = $this->_tryArray($sql);
    endif;
    # fred($tmp); die;
  endif;  

  $uri  = service('uri');
  $path = empty($page) ? 'home' : $page;
  $data = [
    'uri'       => $uri,  // $analytics; 
    'title'     => 'Ci4-Strict.tk',
    'titleUrl'  => $path,
    'content'   => $content
   ];  //

  echo view('incs/doctype-pob', $data);
  echo view('incs/menu-pob' ,   $data);

  $PAGE = APPPATH .'Views/asubs/bwci4/' .$path .'.php';
  # fred($PAGE);
  # $PAGE = /var/www/ci4-strict.tk/app-pob/Views/asubs/bwci4-view-sites/index.php 

  $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing

  if(file_exists($PAGE) ) :
    # fred(__line__) ;
    $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing
    $PAGE = $tmp;
    # fred($PAGE);
    # echo view('asubs/' .$path .'/index', $data);
    echo view($PAGE, $data);
  else:
    # fred(__line__) ;
    echo view('asubs/dummy', $data);
  endif;  

  require '/var/www/footer.php';

  return ''; // 'NOT REQUIRED';
}




//=========================================  
public function sub
(
  string $path  = 'myths', 
  string $sub   = ''
) // 'welcome_message')
{

// Prints '15'
$uri = service('uri');
 #$data['pages']      = $this->pages; //
  $path = empty($path) ? 'home' : $path;
  $data = [
    'uri'       => $uri,  // $analytics; 
    'title'     => 'Ci4-Strict.tk',
    'titleUrl'  => $path, $sub,
   ];  //

#WELCOME ONLY  
  if('welcome'===substr($sub, 0, 7)): 
     echo view('asubs/home/' .$sub, $data);
     exit;
  endif;  


  echo view('incs/doctype-pob', $data);
  echo view('incs/menu-pob' ,   $data);
# echo '<br>',
  $SUB  = APPPATH .'Views/asubs/' .$path .'/' .$sub .'.php';
# echo '<br>',
  $PAGE = APPPATH .'Views/asubs/' .$path .'.php';

  if( file_exists($SUB) ) :
# echo '<br>' .__line__; die;    
      echo view('asubs/' .$path .'/' .$sub , $data);

  else:
    echo view('asubs/dummy', $data);
  endif;  

  require '/var/www/footer.php';

  return TRUE;
}//


//============================================================
Public function setPDO()
:\PDO 
{
# PASSWORD LOGIN DETAILS
  if(LOCALHOST) :  
    define('uHOST',   'localhost');
    define('uNAME',   'root'); 
    define('uWORD',   'nana'); 
    define('uBASE',   'ci4'); 
  else:
    define('uHOST',  'localhost');
    define('uNAME',  'root'); 
    define('uWORD',  'dO033614625035'); 
    define('uBASE',  'ci4'); 
  endif;  

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $oResult = (object) FALSE;
  try {
    if(0):
      $oResult = new PDO('mysql:host='
        .uHOST  .';dbname='
        .uBASE  .';charset=utf8',  
         uNAME, 
         uWORD, 
        array(  
            PDO::ATTR_EMULATE_PREPARES => false,  
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
          )
      );
    endif;

    $oResult = new \PDO('mysql:host='
      .uHOST  .';dbname='
      .uBASE  .';charset=utf8',  
       uNAME, 
       uWORD
    );
    $this->PDO = $oResult;

    # if(LOCALHOST): 
    #   echo '<br>', uHOST, ' : ', uBASE, ' : ', uNAME, ' : ', uWORD, ' : ', __METHOD__;
    # endif;  
  
  } catch(PDOException $e) {  $uri  = service('uri');
  $path = empty($page) ? 'home' : $page;
  $data = [
    'uri'       => $uri,  // $analytics; 
    'title'     => 'Ci4-Strict.tk',
    'titleUrl'  => $path
   ];  //

  echo view('incs/doctype-pob', $data);
  echo view('incs/menu-pob' ,   $data);

  $PAGE = APPPATH .'Views/asubs/' .$path .'/index.php';

  $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing

  if(file_exists($PAGE) ):
    $tmp = strstr($PAGE, 'asubs/' ); // DEFAULT BLANK ==> trailing
    $PAGE = $tmp;
    echo view('asubs/' .$path .'/index', $data);
  else:
    echo view('asubs/dummy', $data);
  endif;  


    echo  "<br>" . $e->getMessage();
  }

  return $oResult;
}


#========================================================
Public function _tryObject
(
  string  $sql  = "" 
)
:object
{
  $result = NULL;

  $conn = $this->PDO;
  try
  {
    $result = $conn->prepare($sql);

    $result->execute();
    # fetch()     = arraY()  
    # fetchAll()  = arraY()  
    # fetchObject = object()  

    $result = $result->fetchObject();

  } catch (Exception $e) {
    if(1) :
      echo '<pre style="background-color: red; color: yellow">'
          . '<b> Failed gracefully </b><br>'
          . 'Method: ' .__method__
          . jj 
          . 'CAUGHT: $getMessage() ==> ' 
         . print_r($e) 
         . jj 
         . ' $sql: ==> '
         . $sql
         . jj 
         .'</pre><hr>';
        # EXIT; ;          
    endif;      
  }

  return  $result;
}


#========================================================
Public function _tryArray
(
  string  $sql  = ""
)
:array // object
{
  $result = FALSE;

  $conn = $this->PDO;
  try
  {
    $result = $conn->prepare($sql);

    $result->execute();
    $result = $result->fetch();

  } catch (Exception $e) {
    if(1) :
      echo '<pre style="background-color: orange">'
          . '<b> Failed gracefully </b><br>'
          . 'Method: ' .__method__
          . jj 
          . 'CAUGHT: $getMessage() ==> ' 
          . jj 
         . print_r($e) 
         . jj 
         . ' $sql: ==> '
         . $sql
         .'</pre><hr>';
        # EXIT; ;          
    endif;      
  }

  return  $result;
}

}///

/*
if(0):
  vd( $uri->getTotalSegments()) ;
  vd( $uri->getSegments() );
  vd( $uri->getSegment(1, 'home') );
  vd( base_url() );
  vd( current_url( $default=false ) );
endif;

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
*/