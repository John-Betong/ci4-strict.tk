<?php DECLARE(STRICT_TYPES=1);


# ENHANCE SELECTION 
  $url = $url = $_SERVER['REQUEST_URI'];
  $url = strrchr($url, '/');
  $url = substr($url, 1);
  foreach($pages as $id => $val):
    if( $url === $id ) :
      $pages[$id] = '<b class="tdn tar dib bga fgb ">'
    . strtoupper($pages[$id]) 
    . '</b>'
    ;
    endif;  
  endforeach;

//===================================================
function getLink
(
  array $pages, 
  string $item
):string 
{
  $link = BASEURL .$item;
  $result = <<< ____EOT
    <dd>
      <a href="$link"> 
        {$pages[$item]} 
      </a>
    </dd>
____EOT;

  return $result;
}  

?>
  <dl class="menu-001 fss tdn lh2">
    <dt> Strict Menu: </dt> 
      <?= getLink($pages, 'myths') ?>
      <?= getLink($pages, 'strict-0') ?> 
      <?= getLink($pages, 'bugs-fixed') ?> 
      <dd> &nbsp; </dd>

    <dt> Playground </dt>
      <?= getLink($pages, 'playground') ?> 
      <dd> &nbsp; </dd>

    <dt> Info </dt>
      <?= getLink($pages, 'conversion-script') ?> 
      <?= getLink($pages, 'download-install') ?>
      <?= getLink($pages, 'more') ?> 
      <?= getLink($pages, 'readme') ?> 
      <dd> &nbsp; </dd>

    <dt class="hhh"> Download & install  </dt>
      <?php # echo getLink($pages, 'download-install') ?>
      <dd> <br> </dd>

    <dt> Welcome messages  </dt>
      <?= getLink($pages, 'welcome-strict') ?>
      <?= getLink($pages, 'welcome_message') ?>
      <dd> <br> </dd>

    <?php 
      if(LOCALHOST) : 
        echo '<dt class="fgr"> LOCALHOST  </dt>';
        echo getLink($pages, 'environment');
      # echo getLink($pages, 'disqus');
        echo getLink($pages, 'rsync');
      endif;     
  echo '</dl>';  

  
