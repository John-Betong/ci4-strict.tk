<?php DECLARE(STRICT_TYPES=1);

  require_once '/var/www/ci2/vendor/autoload.php';

  defined('LOCALHOST')
      ?: 
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

  require_once(APP .'Config/PASSWORD-LOGIN.php');


# ============================================================
# ============================================================
# if(0): require_once 'Class_PDO_TESTS.php'; endif;
 Class Class_mysqli # extends Class_PDO_TESTS
{
  public $PDO = NULL;
  # public $MYSQLI ;


//===========================================================
public function __construct()
{
  $this->PDO = $this->PDO();
  # $this->MYSQLI = $this->MYSQLI();  
  if(0):
    $this->TEST(); 
  endif;  
}//


#========================================================
Public function _tryBool
(
  string  $sql '', 
  bool    $SHOW = ! FALSE 
)
# :bool
{
  $result = FALSE;

  if($SHOW):
    fred($sql, __METHOD__  .'==> ' .$sql, '#ccc');
  endif;  

  $conn = $this->PDO;
  try
  {
    if(0):
      $result = $conn->query($sql); 
    else:  
      $result = $conn->prepare($sql);
      if($result->execute()) :
        fred('NOT TODAY SUNSHINE', $sql);
      else:
        fred('PERHAPS TOMORROW SUNSHINE', $sql);
      endif;  
    endif;  
   
  } catch (Exception $e) {
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
    # EXIT;           
  }

  return  $result;
}


//============================================================
Public function PDO()
:PDO
{
  # mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $conn = (object) '';
  try {
    $conn = new PDO('mysql:host='.uHOST.';dbname='.uBASE.';charset=utf8',  
      uNAME, uWORD, 
      array(  
          PDO::ATTR_EMULATE_PREPARES => false,  
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        )
    );
  
  } catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
  }

  return (object) $conn;
}

# ============================================================
  # OPEN Database Connection
# ============================================================
Public function MYSQLI()
:mysqli
{
  $result = new mysqli( uHOST, uNAME, uWORD, uBASE);

  if ($result->connect_error) :
    exit("Connection failed: " . $result->connect_error);
  else:  
    # echo ('YES WE HAVE A CONNECTION');
  endif;

  return $result;
}


}///
# ============================================================