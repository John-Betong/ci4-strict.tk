<?php DECLARE(STRICT_TYPES=1); 

namespace App\Models;
namespace App\Controllers;

#use App\Models\DungeonModel;
# use App\Models\HeroModel;
# use App\Models\M_bwci4;

#use App\Controllers\C_bwci4;

define('uHOST', 'localhost');
define('uBASE', 'ci4');
define('uNAME', 'root');
define('uWORD', LOCALHOST ? 'nana' : 'dO033614625035');


//===========================================================    
class C_bwci4 extends BaseController
{

private $PDO = NULL;

//===========================================================    
public function index()
{

  $this->PDO = $this->PDO();

 $projects = $this-> _tryObject('SELECT * FROM `bw-projects`');

 $comments = $this-> _tryObject('SELECT * FROM `bw-comments`');
 # fred($result, '$result');

//========================
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
  $data['footer']     = view('incs/footer.php', $data, [TRUE] ) .$analytics; 
  $data['content']    =  (array) $projects;
 #$data['style_tla']  = $this->style_tla;
  
  $page = 'bwci4-add-site'; 
  if( array_key_exists($page, $this->pages) ) :  
    $data['title'] = $data['pages'][$page];
    $page = 'pages/v-' .$page;
  else :  
    $data['title'] = 'welcome_message';
    $whoops = '../app-strict/Views/errors/html/production.php';  
    echo file_get_contents($whoops);
  endif;
  $data['vPage']  =  $page; 

  
  echo view($data['vPage'], $data);

   require '/var/www/footer.php';

//======================== 

  # $result = view('pages/v-bwci4-add-site', (array) $result=[]); 
}


//======================================================
public function XXXaddproject()
{
# fred($_POST, '$_POST' );
$xxx = <<< ____EOT
  INSERT INTO 
    `bw-projects`(
    `id`, `icmx`, 
    `uname`, `url`, 
    `notes`, 
    `images`, 
    `details`, 
    `created`) 
    VALUES (
      [value-1],
      [value-2],
      [value-3],
      [value-4],
      [value-5],
      [value-6],
      [value-7],
      [value-8]
    )
____EOT;

fred($xxx);

$tmp = 'INSERT INTO `bw-projects` ';
$qqq = $_POST;
foreach($qqq as $key => $item) :
  $tmp .= '`' .$key .'`="' . $item .'",' ."\n";
endforeach;
fred($tmp, '$tmp');

$sql = <<< ____EOT
  INSERT INTO `bwprojects`
  $tmp
____EOT;
}


#========================================================
Public function _tryObject
(
  string  $sql  = "" 
)
:object
{
  $result = NULL;

  $conn = $this->PDO();
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

//===========================================================    
public function OLD_index()
{
  // When you don't need to use a model in multiple places
  // you can simply get a new instance here. It will use
  // the default database connection if none is passed in
  // during instantiation.

  $data['pages'] = $this->pages; //  
  
  $result       = 'DUMMY RESULT';  
  # $heroes       = new HeroModel();
  # $dungeons     = new DungeonModel();
  $bwci4  = new M_bwci4();
  $dbName = 'ci4';    
  $pWORD  = LOCALHOST ? 'nana' : 'dO033614625035';
  # $ok = $heroes->kill_0011(); // die;
  # var_dump($ok); die;

# MAYBE DROP DATABASE
/*  
  if(0) :
    $ok   = $this->newDatabase($dbName);
    $conn = mysqli_connect
    (
      "localhost", 
      $user   = 'root', //"dasabooks", 
      $pass   = 'dO 033614625035', // nana "dasa424242", 
      $dbName
    );
    $sql='DROP DATABASE '. $dbName;
      $conn->query($sql);  
    die($sql);
  endif;  
*/

# MAYBE OPEN DATABASE B GET DATA
  if(0 && $this->isConnected($dbName) ) :
# echo '<pre>'; print_r($bwci4);
# echo '<hr>';
# echo print_r($heroes);
# echo '<hr>';
# die;
# fred($heroes); die;    
# fred($bwci4); die;    
    
    $result = view('home', 
    [
      // Note that we can intermingle builder and model methods
      // when making calls against the model.
#echo $bwci4;
     'projects' => $bwci4
              ->orderBy('id', 'asc')
              ->findAll(),
/*
     'heroes' => $heroes
              ->orderBy('name', 'asc')
              ->findAll(),
     'dungeons' => $dungeons
                ->orderBy('difficulty', 'desc')
                ->findAll(),
*/                
      'pages'   => $this->pages,
      'dbName'  => $dbName,
    ], [true] );

# MAYBE CREATE DATABASE & POPULATE
    else:
      $ok   = $this->newDatabase($dbName);
      $conn = mysqli_connect
      (
        "localhost", 
        $user = 'root', 
        $pass = $pWORD,
        $dbName
      );
      $ok = $this->newTable($conn, $dbName, 'heroes') ;
      $ok = $this->newTable($conn, $dbName, 'dungeons');
      $ok = $this->newTable($conn, $dbName, 'migrations');
      $ok = $this->newTable($conn, $dbName, 'projects') ;
      $ok = $this->newTable($conn, $dbName, 'comments') ;

      $data['content']  = $dbName;
      $data['database'] = $dbName;
      $data['dbName']   = $dbName;
    # MAYBE NOT REQUIRED ANYMORE ???  
      $data['table1']   = 'dungeons';   $data['row1'] = '0';
      $data['table2']   = 'heroes';     $data['row2'] = '1';
      $data['table3']   = 'migrations'; $data['row3'] = '2';
      $data['table4']   = 'projects';   $data['row4'] = '3';
      $data['table5']   = 'comments';   $data['row5'] = '4';

      $result = view('home-no-db', $data); 
    endif;  

  echo $result;
}//

//============================================================
private function isConnected
(
  string $dbName
)
: bool
{
  $result = FALSE;
    
  $pWORD = LOCALHOST ? 'nana' : 'dO033614625035';  

  $link = mysqli_connect("localhost", "root", $pWORD, $dbName);

  $result = isset($link->errno) ;
  
  return $result;   
}//


//============================================================
private function newDatabase
(
  string $dbName
)
: bool
{
  $result = FALSE;

# $conn   = mysqli_connect("localhost", "dasabooks", "dasa424242");
  $conn   = mysqli_connect("localhost", "root", "nana");
  $sql    = 'CREATE DATABASE ' . $dbName ;
  $result = $conn->query($sql);

  return $result;
}//  

//============================================================
private function newTable
(
  object $conn, 
  string $dbName, 
  string $table
)
: bool
{
  $result = FALSE;

  $aSqls = glob(FCPATH .'assets/sql/*.sql');
  sort($aSqls);
  try {
    foreach( $aSqls as $key => $sql) :
      $sql    = file_get_contents($sql);
      $result = $conn->query($sql);
    endforeach;
    $result = TRUE;
  } catch(Exception $e) {
    echo '<pre>$e ==> '; 
      print_r($e); 
      print_r('BIG PROBLEM ==> ' .__method__);
    echo '</pre>';
  }

  return $result;
}//  


//============================================================
Public function PDO()
:\PDO
{
  # mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $result = (object) FALSE;
  try {
    if(0):
      $result = new PDO('mysql:host='
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
    $result = new \PDO('mysql:host='
      .uHOST  .';dbname='
      .uBASE  .';charset=utf8',  
       uNAME, 
       uWORD
    );


    # if(LOCALHOST): 
    #   echo '<br>', uHOST, ' : ', uBASE, ' : ', uNAME, ' : ', uWORD, ' : ', __METHOD__;
    # endif;  
  
  } catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
  }

  return $result;
}

}//--------------------------------------------------------------------

