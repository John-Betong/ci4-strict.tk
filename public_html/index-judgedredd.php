<?php DECLARE(STRICT_TYPES=1); 

  define('LOG_FILE',  '../writable/logs/log-' .date('Y-m-d') .'.log');
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

$kint = ! true;

  require '../app-strict/Views/incs/fred.php';

?>

<?= '<date>'  .date( 'D m Y - H:i:s', fileatime(__FILE__) ) .'</date>'; ?>
<hr>
<?= '<date>' . date( 'D m Y - H:i:s', filectime(__FILE__) ) .'</date>'; ?>
<hr>
<?= '<date>' .date( 'D m Y - H:i:s', filemtime(__FILE__) )  .'</date>'; ?>
<hr>
<?= '<date>' .date( 'D m Y - H:i:s', getlastmod() ) .'</date>'; ?>



<?php

//=======================================
function jb
(
  string $dirName=NULL,
  bool   $doRecursive=FALSE
)
// : integer
{
clearstatcache();

echo ' <pre>';

  $ok = fileatime(__file__)   ; // - Gets inode change time of file
  echo '<br><br><br>Gets file creation timee <br>'; print_r( date('D M Y - H:i:s', $ok ) );

  $ok = filectime(__file__)   ; // - Gets inode change time of file
  echo '<br><br><br>Gets inode change time of file <br>'; print_r( date('D M Y - H:i:s', $ok ) );

  $ok = filemtime(__file__)   ; //- Gets inode change time of file
  echo '<br><br><br>Gets file modification time <br>'; print_r( date('D M Y - H:i:s', $ok ) );

  # $ok = touch(__file__)       ; // - Sets access and modification time of file
  # echo '<br>'; print_r( date('D M Y - H:i:s', $ok ) );

  $ok = getlastmod()  ; //  - Gets time of last page modification
  echo '<br><br><br> Gets time of last page modification <br>'; print_r( date('D M Y - H:i:s', $ok ) );


  $ok = stat(__file__)  ; //- Gives information about a file
  echo '<br><br><br>'; print_r( $ok['atime'] ) ;
  echo '<br><br><br>'; print_r( $ok ) ;

if(0):
echo "
0 dev device number ***
1   ino inode number ****
2   mode  inode protection mode
3   nlink number of links
4   uid userid of owner *
5   gid groupid of owner *
6   rdev  device type, if inode device
7   size  size in bytes
8   atime time of last access (Unix timestamp)
9   mtime time of last modification (Unix timestamp)
10  ctime time of last inode change (Unix timestamp)
11  blksize blocksize of filesystem IO **
12  blocks  number of 512-byte blocks allocated **
";
endif;

echo '<pre>';
}


//=======================================
function mostRecentModifiedFileTime
(
  string $dirName=NULL,
  bool   $doRecursive=TRUE
)
// : integer
{
  if( $dirName ) :
    // 
  else:
    $dirName = getcwd();
  endif;
    
    $d = dir($dirName);
    vd($d);

    $currentModified = 0;
    $lastModified = 0;
    while($entry = $d->read())
    {
      echo '<br>' . $entry;
        if ($entry != "." && $entry != "..") {
            if (!is_dir($dirName."/".$entry)) {
                $currentModified = filemtime($dirName."/".$entry);
            } else if ($doRecursive && is_dir($dirName."/".$entry)) {
                $currentModified = mostRecentModifiedFileTime($dirName."/".$entry,true);
            }
            if ($currentModified > $lastModified){
                $lastModified = $currentModified;
            }
        }
    }
    $d->close();
vd($lastModified);
fred( date() );
die('SHIT');

    return $lastModified;
} 


?>
