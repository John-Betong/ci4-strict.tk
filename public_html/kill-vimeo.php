<?php DECLARE(STRICT_TYPES=1); 
// REMOVE WHEN ONLINE
error_reporting(-1);
ini_set('display_errors', 'true');


$id = "https://vimeo.com/297401184";
$id = 'https://vimeo.com/312001166';


function the_title( array $hash = [] )
{
  return '';
}

 // get fields
  $video_url = $id; // get_field('vimeo_url');      // example using ACF (works similar)
  $url_pieces = explode('/', $video_url);


if( preg_match('/https:\/\/(www\.)*vimeo\.com\/.*/', $video_url) ) 
{ 
    $id   = $url_pieces[3];
    $hash = unserialize( file_get_contents('http://vimeo.com/api/v2/video/' . $id . '.php') );
    $thumbnail = $hash[0]['thumbnail_large'];
}    
 
?>

<!doctype html><html lang="en">
<head>
<title>  title goes here </title>
</head>
<body>

<h1> Title: <?= $id; ?> </h1>
<h2> Thumb: <?= $thumbnail; ?> </h2>
  <div style='display: none'>
  </div>
  <div>
    <a 
      class="videos-list--item popup-vimeo" 
      href="https://vimeo.com/312001166" 
      style="
        
        width: 320px; height: auto;

        display: inline-block; 
        min-width:320px; min-height:180px; 
        
        padding: 0em;
        background-color: red;  
        background-image:url('<?= $thumbnail; ?>');" 
        data-lity=""
      >
      <div class="video-title">
        Behind the Scenes –&nbsp;Titanfall 2
      </div>  
    </a>
  </div>
  <p> <br><br> SPACER <br><br> </p>

  <div class="col-sm-3">
    <a
      class="videos-list--item popup-vimeo" 
      href="<?php echo $video_url ?>" 
      style="
        display: inline-block; 
        min-width:640px; min-height:360px; 
        padding: 0em;
        background-color: green;  
        background-image:url('<?php echo $thumbnail; ?>');
        " 
        data-lity
      >
    </a>

    <p class="video-title">
      <?php $hash[0]['title'] # the_title(); ?>
    </p>

  </div>

<?php echo '<pre>'; var_dump($hash); echo '</pre>';

?>

</body></html>
