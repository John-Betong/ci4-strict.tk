<?php DECLARE(STRICT_TYPES=1); 

namespace App\Controllers;

use App\Models\DungeonModel;
use App\Models\HeroModel;

class Playground extends BaseController
{

//===========================================================    
public function index()
{
  // When you don't need to use a model in multiple places
  // you can simply get a new instance here. It will use
  // the default database connection if none is passed in
  // during instantiation.

  $data['pages'] = $this->pages; //  
  
  $result   = 'DUMMY RESULT';  
  $heroes   = new HeroModel();
  $dungeons = new DungeonModel();
  $dbName   = 'ci4';    
  $pWORD    = LOCALHOST ? 'nana' : 'dO033614625035';
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
  if($this->isConnected($dbName) ) :
    $result = view('home', 
    [
      // Note that we can intermingle builder and model methods
      // when making calls against the model.
     'heroes' => $heroes
              ->orderBy('name', 'asc')
              ->findAll(),
     'dungeons' => $dungeons
                ->orderBy('difficulty', 'desc')
                ->findAll(),
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

      $data['content']  = $dbName;
      $data['database'] = $dbName;
      $data['dbName']   = $dbName;
    # MAYBE NOT REQUIRED ANYMORE ???  
      $data['table1']   = 'dungeons';   $data['row1'] = '0';
      $data['table2']   = 'heroes';     $data['row2'] = '1';
      $data['table3']   = 'migrations'; $data['row3'] = '2';

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


}//--------------------------------------------------------------------

