<?php DECLARE(STRICT_TYPES=1);

#  require_once(APPPATH .'Config/PASSWORD-LOGIN.php');
  # require_once '/var/www/ci2/vendor/autoload.php';

  $FETCHMODES = "
      PDO::FETCH_BOTH
      PDO::FETCH_NUM
      PDO::FETCH_ASSOC
      PDO::FETCH_OBJ
      PDO::FETCH_LAZY
  ";

# ============================================================
# ============================================================
# if(0): require_once 'Class_PDO_TESTS.php'; endif;
 Class Class_pdo # extends Class_PDO_TESTS
{
  public $PDO;


//===========================================================
public function __construct()
{
  $this->PDO = $this->PDO();
}//

//===========================================================
public function dateAdjust
(
  string $touch
)
:string
{
  $touch  = strtotime($touch);
  $touch  = LOCALHOST ? $touch + 0 : $touch + 7*60*60 ;
  $touch  = date('D jS - H:i:s', $touch);

  return $touch;
}//


#========================================================
  // https://www.taniarascia.com/overview-of-sql-commands-and-pdo-operations/
#========================================================
PUBLIC function _tryBool
(
  string  $sql  = ""
)
:bool
{
  $result = FALSE;

  $conn = $this->PDO();
  try
  {
    usleep(88); // stop racecondition?
      $result = $conn->prepare($sql);
    usleep(88); // stop racecondition?
      $result = $result->execute();
    usleep(88); // stop racecondition?

  } catch (Exception $e) {
    if(1) :
      echo '<pre style="background-color: red; color: yellow;">'
          . '<b> Failed gracefully </b><br>'
          . 'Method: ' .__method__
          . jj 
          . 'gettype(...) ==> ' .gettype($result)
          .jj
          . 'CAUGHT: $getMessage() ==> ' 
         . print_r($e) 
         . jj 
         . ' $sql: ==> '
         . $sql
         .'<br></pre><hr>';
        # EXIT; ;          
    endif;      
  }

# FAILED - WRoNG TYPE  
  if('boolean'===gettype($result)) :
    # NO PROLEM
  else:
    $tmp = 'display: inline-block; 
            background-color: #800; color: #ff0;'
         ;
    echo '<dl style="' .$tmp .'">';
      echo '<dt> METHOD ==> ' . __METHOD__ .'</dt>';
        echo '<dd>';
          echo 'FAILED ==> ' .$sql ;
          echo '<br> gettype($result) ==> ' .gettype($result);  
        echo '<dd>';  
    echo '</dl>';          
    $result = FALSE; // (bool) $result;
  endif;  

/*  
  echo '<dl style=="display: inline-block; background-color: #800; color: #ff0;">';
    echo '<dt> METHOD ==> ' . __METHOD__ .'</dt>';
    echo '<dd>';
      if('boolean'===gettype($ok)) :
        # $tmp = $ok ? 'TRUE' : 'FALSE';
        # echo '<br> PASSED ==> ' .$tmp ;
        # $result = $ok;
      else:
        echo '<br> FAILED ==> ' .$sql .'<br>';
        echo '<br> gettype($ok) ==> ' .gettype($ok);  
        $result = FALSE; // (bool) $result;
      endif;  
  echo '</dd> </dl>';  
*/

 #$ok   = null;
  $tmp  = null;

  return $result;
}

#========================================================
Public function _tryArray
(
  string  $sql  = ""
)
:array // object
{
  $result = FALSE;

  $conn = $this->PDO();
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



//============================================================
Public function PDO()
# :PDO
{
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
  $result = (object) FALSE;
  try {
    if(0):
      $result = new \PDO('mysql:host='
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
}//


//===============================
PUBLIC function tableExists($table)
:bool 
{
  $result = FALSE;

  $sql = "SHOW TABLE STATUS LIKE '%' ";

  $aTmp = $this->_tryArray($sql, $show=FALSE);
  
  $result = in_array($table, $aTmp);
  return $result;
}//


//==============================================
PUBLIC function tableTruncate($table)
:bool
{
  $result = FALSE;

  if($this->tableExists($table) ) :
    echo '<br> QQQ-MAYBE $sql ==> ',
    $sql    = "TRUNCATE TABLE `$table` "; 
    # error_reporting(0);
    # $result = $this->_tryBool($sql, $show=! FALSE);
    # error_reporting(-1);
  endif;  

  return $result;
}//

//==============================================
PUBLIC function tableDrop($table)
:bool
{
  $result = FALSE;

echo '<br>' .__method__ .' : '  .$table .'<br>';
  $sql    = 'DROP TABLE IF EXISTS `' .$table .'`'; 
  $result = $this->_tryBool($sql, $show=! FALSE);

  return (bool) $result;
}//

}///