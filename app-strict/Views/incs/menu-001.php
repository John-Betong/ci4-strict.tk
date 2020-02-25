<?php DECLARE(STRICT_TYPES=1);
# fred($pages);die;

# ENHANCE SELECTION 
  $url = $url = $_SERVER['REQUEST_URI'];
  $url = strrchr($url, '/');
  $url = substr($url, 1);
  foreach($pages as $id => $val):
    if( $url === $id ) :
      $pages[$id] = '<strong class="tdn tar dib bga fgb ">'
    . $pages[$id]  
    . '</strong>'
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
  <dl class="menu-001 tdn lh2">
    <dt> Strict Menu: </dt> 
      <?= getLink($pages, 'myths') ?>
      <?= getLink($pages, 'strict-0') ?> 
      <?= getLink($pages, 'bugs-fixed') ?> 
      <dd class="hg3"> &nbsp; </dd>

    <dt> Playground </dt>
      <?= getLink($pages, 'playground') ?> 
      <?php if(LOCALHOST) : ?>
        <?= getLink($pages, 'thumbnails') ?> 
      <?php endif ?> 
      <dd class="hg3"> &nbsp; </dd>

    <dt> Info </dt>
      <?= getLink($pages, 'conversion-script') ?> 
      <?= getLink($pages, 'download-install') ?>
      <?= getLink($pages, 'more') ?> 
      <?= getLink($pages, 'readme') ?> 
      <!--
      <?= getLink($pages, 'excel') ?> 
    -->
      <dd class="hg3"> &nbsp; </dd>

    <dt class="hhh"> Download & install  </dt>
      <?php # echo getLink($pages, 'download-install') ?>
      <dd class="hg3"> &nbsp; </dd>

    <dt> Welcome pages  </dt>
      <?= getLink($pages, 'welcome-amp') ?>
      <?= getLink($pages, 'welcome-new') ?>
      <?= getLink($pages, 'welcome-message') ?>
      <?= getLink($pages, 'welcome-strict') ?>
      <dd class="hg3"> &nbsp; </dd>

    <?php 
      if(LOCALHOST) : 
        echo '<dt class="fgr"> LOCALHOST  </dt>';
        echo getLink($pages, 'environment');
      # echo getLink($pages, 'disqus');
        echo getLink($pages, 'rsync');
      endif;     
  echo '</dl>';