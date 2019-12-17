<?php DECLARE(STRICT_TYPES=1);

require APPPATH .'Views/incs/doctype-001.php'; 

require '/var/www/ci2/vendor/autoload.php';  

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//==============================================
function convertXlsToCsv
(
  string $xls, 
  string $csv
)
:bool
{
  $result = FALSE;

  try {
    # Load $inputFileName to a Spreadsheet Object
      $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($xls);

    # WRITECSV
      $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
      $writer->setUseBOM(true);
      $writer->save($csv);

  }catch (Exception $e){
    fred($e->message(), '$e->message()', 'red');
  }

  $result = file_exists($csv);

  return $result;
}

//==================================================================
function fnBook
(
  string  $tog   = 'bge',
  string  $qqq   = '',
  array   $data  = []
)
:string 
{
# PREVENT INVALID DATA
  $max = max(4, count($data) );
  for($i2=0; $i2<=4; $i2++) : 
    $data[$i2] = $data[$i2] ?? '';
  endfor;

  $book = <<< ____TMP
    <dl class="$tog rad p42 XXXfss">
      <dd class="flr ooo">
        <i class="fgb fgr fwb"> $qqq &nbsp; </i>
      </dd>

      <dt>
        Title: <b class="fg0"> {$data[2]} &nbsp; </b>
      </dt>
      <dd>
        by: <i class="fg0"> <b>{$data[1]}</b> &nbsp; </i>
      </dd>

      <dt class="tac">
        <span class="fll"> Baht: <b> {$data[4]} </b> &nbsp; </span>
        <span class="flr fg0">  #<b>{$data[0]} </b> &nbsp; </span>
        Type: <b class="fgr0">  {$data[3]} &nbsp; </b>
      </dt>
    </dl>
____TMP;

  return $book;
}

$xls    = '/var/www/gekkobooks.tk/downloads/gekko-arrivals.xls';
$fCsv   = 'tmp-Excel.csv';
$ok     = convertXlsToCsv($xls, $fCsv);
$limit  = $_GET['limit'] ?? 6;
$books  = '';

  if( file_exists($fCsv) ) :
    $row = 0;
    if (($handle = fopen("$fCsv", "r")) !== FALSE) :
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) :

        if( $row ):
          $bg = $row % 2 ? 'bge' : 'bgE';
          $books .= fnBook($bg, '', $data);
        endif;  
        
        if($limit <= $row++ ) :
          break;
        endif;  
      endwhile;

     fclose($handle);
    endif;        
  endif;

?>
<body>
  <div class="header tac">
    <?php require APPPATH .'Views/incs/logo-001.php'; ?>
    <h4 class="hhh ooo"> Strict_types=0 </h4>  
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article">
    <h2 class="ooo"> Excel stuff </h2>

    <?= $books ?>

    <p> <br> </p>
    <h2 class="btn">
      Display: 
      <a href="?limit=1001"> 
        1,001 Books
      </a> 
    </h2>  


    <fieldset class="bgE">
      <caption class="fsl fwb"> Source: </caption>
      <hr>
      <?= highlight_file(__FILE__, TRUE) ?>
    </fieldset>

  </div><!-- article -->
    
 <div class="footer tac p42">
  <?= $footer ?> 
 </div>

</body>
</html>