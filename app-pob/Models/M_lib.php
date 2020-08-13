<?php 
declare(strict_types=1);

if(0):
  $tmp = __FILE__ ."\t" .' : line: ' .__LINE__ ."\n";
  log_message('ERROR', $tmp);
endif;  

if (!defined('BASEPATH')) exit('No direct script access allowed');
#https://sg2nlsmysqladm1.secureserver.net/grid50/249/index.php?uniqueDnsEntry=jjokesgodaddy.db.8709473.hostedresource.com
   
#log_message('ERROR', __METHOD__. ': '.__LINE__ . ' NO IMAGE: ' .$image);
/*
	private function _get_links_with_memo_in_title($row)
	private function _punch_line($link, & $memo, $idx=894)
	private function _maybe_copy_thumb($from, $to)
	private function _get_image_name(& $tmp) // returns with path and name of jpg from supplied memo
	private function _get_thumbnail(& $memo, $mode=0)
	public  function _background_url_pix($row, $mg_1em='pix')
	public  function m_latest_jokes($count=22, $first=0, $get_pix=TRUE, $ascend=TRUE,  & $by_ref) // ALSO top 3 and a few more
	public  function m_top_20_new($count=22, $max_jokeimum='NOT_USED',$get_pix=TRUE) // ALSO top 3 and a few more
	public  function m_three_pix($start=22000, $count=5, $sql='', & $firstTitleByRef=NULL) // ALSO top 3 and a few more
	public  function m_three_jokes($start=999, $count=3, $direction='DESC') 
	public  function m_favourites_new($favourites)
	 
	public  function m_getjoke($joke_idx=123)
	public  function m_get_xrl($joke_xrl='')
	
	public  function today_hits_insert($idx=0)
	public  function today_hits_get_links()
	public  function m_filter(& $data, $tmp_filter= NULL)
	public  function get_jokes($start_page=1, $per_page=22, & $BY_REF, & $BY_description='Joke of the Day')#, $max=-1)
	public  function get_most_linked($start_page=1, $per_page=22)
	
	public  function get_blondes($start_page=1, $per_page=22)
	public  function get_little_johnny($start_page=1, $per_page=22)
	public  function get_chuck_norris($start_page=1, $per_page=22, $sql)
	public  function get_sex($start_page=1, $per_page=22, $sql)
	public  function get_quotes($start_page=1, $per_page=15, $sql)
	
	public  function m_safety_at_work()
	
	public  function get_page($start_page=1, $per_page=15, $sql)
	
	public  function get_wisdoms($start_page=1, $per_page=15, $sql)
	public  function m_get_wisdom_xrl($xrl='1') // default to first wisdom
	public  function m_getwisdom($title='', $idx=0)
	
	public  function maybe_set_max_joke($force=TRUE)
	
	public  function get_all_thumb_links($start=120, $limit=4)
	public  function get_all_thumbnails()
	public  function get_set_thumbnail($id, $link_2_thumnail)
	
	public  function get_fields( $id= -1 )
	public  function put_fields( $a= array(), $id=-1 )
  public  function reset_all_xrl_values()

*/
 
//===============================================
class M_lib  extends CI_Model
{
  var $atts   = array
  (
    'width'      => '800',
    'height'     => '600',
    'scrollbars' => 'yes',
    'status'     => 'yes',
    'resizable'  => 'yes',
    'screenx'    => '200',
    'screeny'    => '100',
    'title'      => 'title'
  );

//==============================================================
public function __construct()
{
  parent::__construct();
}#

#============================================
private function _get_links_with_memo_in_title($row)
{
	$tmp 	= $row->memo;
	$tmp 	= strip_tags($tmp);
	$tmp 	= strip_quotes($tmp); #htmlspecialchars (
	$title	= word_limiter($tmp, 42);
	$title	= trim( $title );
	$title	= empty($title) ? 'Has image' : $title;
	$title	= "\n" .' ' .$title ." \n";

	if( isset( $row->xrl ) ):
		return  anchor( $row->xrl, $row->title, " title='$title '" );
    # return  '<a href="' .$row->xrl .'">' .$row->title .'</a>'; //  " title='$title '");
	else:
		# log_message('ERROR', __METHOD__. ': '.__LINE__ . ' NO $xrl: ' .$this->uri->uri_string() );
	endif;
}#

//=============================================
//
// just one of a list of jokes - used in favourites
//
//=============================================
private function _punch_line($link, & $memo, $idx=894)
{
  $result = '';
 
  if (strpos($memo, ' src=') > 0)
  {
    $result  = $this->_get_thumbnail($memo);
    $result  = '<p>' .anchor($link, $result) .'</p>';
    $result .= "<div class='btn btn2'>"
                  .   anchor_popup
                      (
                        base_url() .'c_craigs_list/popup/' .$idx,
                        "&nbsp; Show Picture &nbsp;",
                        $this->atts
                      )
                  . '</div>';
  }else{
    $botton   = ''; // "<a href='#'>&nbsp; more... &nbsp;</a>";
    $result = "<div class='fll bdr'>"
            . trim($memo)
            . '</div>'
            . "<br class='clb' />";
   $Xresult = $memo;
  }
  return br(1) .$result .br(2);
}#

//============================================
private function _maybe_copy_thumb($from, $to)
{
  if(! file_exists($to)):
    copy($from,$to);
  endif;
}#

//============================================
  # strips image file name from memo
  # Usage:
  # parameter:
    # $IMG = actual image
  # return
    # path and name of jpg from supplied memo
//============================================
private function _get_image_name(& $IMG) 
{
# echo jj,  htmlspecialchars($IMG);  
  # <div class='tac'> 
  # <img 
  #   src='/afiles/images/super-heavy.jpg' 
  #   style='max-width:555px;width:88%;margin:2.5em auto' alt='A lot of weight and super heavy ' 
  # /> <!-- debug --> </div>

  $IMG        = strtr($IMG, '"', "'");
  # REMOVED LEADING SLASH
  $tmp_start  = 5 + strpos($IMG, 'src=');
  $tmp_end    = strpos($IMG, "'", $tmp_start+5);
  $tmp_name   = substr($IMG, $tmp_start, $tmp_end - $tmp_start);

  return $tmp_name;
}#

//===================================================
//
//  parameter $memo
//
//  return  mode:
//             0: $thmb image
//             1: thumb link
//             2: thumb_name
//
//===================================================
// KLUDGE added xrl=1234
public function _get_thumbnail(& $memo, $mode=0, $xrl=1234)
{
  $result = NULL;

  # /afiles/images/douglas-adams-happy-towel-day.jpg
  $jpgName   = $this->_get_image_name($memo);

  $thumbName = substr($jpgName, 1 + strrpos($jpgName, "/" ));  // 'wiwnhagf-4.png'
  $thumbName = str_replace('.','_thumb.', $thumbName);

  $thumbUrl  = base_url() .'subs/thumb/' .$thumbName;
  $thumbPath = PATH_THUMBS .$thumbName;

  // see if the thumb already exists thumb directory
    if(file_exists($thumbPath)):
      # f red( 'no problem', __LINE__);
    else:
      # CREATE THUMB
        # /afiles/images/douglas-adams-happy-towel-day.jpg
        $data['joke_img'] = $jpgName;
        # f red( $data, __LINE__);
        $this->CreateThumb($data);
    endif;

  // return - one of three
    switch($mode):
      default:
      case 0: 
        $result = "<img src='" .$thumbUrl ."' alt='" .$thumbName ."' />";
      break;
      case 1: 
        $result = $thumbUrl;
      break;
      case 2: 
        $result = $thumbName;
      break;
    endswitch;

  return $result;    
}#


//=======================================================================
//
//  called from pictures, safety AND _box_cent_4_pictures
//  parameter joke->$row->*   THAT HAS A PICTURE
//    returns thumbnail block
//
//=======================================================================
public function _background_url_pix($row) // , $mg_1em='pix'
{
  $result = '';

try{  
  $url    = base_url()  .$row['xrl'];  

  $p_abs  = PATH_THUMBS .$row['thumb'];
  $thumb  = URL_THUMB  	.$row['thumb'];
  $title  = str_replace('-',' ',$row['xrl']); 

  // BEWARE: $_SERVER['DOCUMENT_ROOT'] ONLY has trailing slash ONLINE
  // $p_abs  = str_replace('//','/',$p_abs);

  // Safety title prefix removed
  $safety = array(':', 'Safety at Work','Safety at Play', 'Safety at work');
  $title  = str_replace($safety, '',$title);
  $title  = "\n\t" .$title ." \t\n \n";

  if( file_exists($p_abs) ):
		$dims =  getimagesize($p_abs); 
    if($dims): 
      // 
      // style="width: 222px; height:180px; margin:1em auto; padding:0 2em; vertical-align:middle;"
      $result = '<div 
                  class="tac dib ampthb" 
                  >'
              .'<i class="tal fss">' .$title .'</i>'
               .'<a href="' .$url .'" title="' .$title .'">' 
              .'<br />'
              .   '<img src="' .$thumb .'" ' .$dims[3] .' alt="' .$title .'" />'
              . '</a>'
              .'</div>';
              // margin:0 0 2em 0;

    else:
      log_message('error', __METHOD__. ' - getimagesize() PROBLEM ' .$p_abs);
    endif;  
  endif; 

}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

  return  $result;
}#

//=======================================================================
//
//  called from pictures, safety AND _box_cent_4_pictures
//  parameter joke->$row->*   THAT HAS A PICTURE
//    returns thumbnail block
//
//=======================================================================
public function _background_url_amp_pix($row)
{
  $result = '';

try{  
  $url    = base_url()  .$row['xrl'];  
  $p_abs  = PATH_THUMBS .$row['thumb'];
  $thumb  = URL_THUMB   .$row['thumb'];
  $title  = str_replace('-',' ',$row['xrl']); 

  // BEWARE: $_SERVER['DOCUMENT_ROOT'] ONLY has trailing slash ONLINE
  // $p_abs  = str_replace('//','/',$p_abs);

  // Safety title prefix removed
  $safety = array(':', 'Safety at Work','Safety at Play', 'Safety at work');
  $title  = str_replace($safety, '',$title);
  $title  = "\n\t" .$title ." \t\n \n";
 # $title  = "\n\t" .$title ." \t\n \n";
  // LOCALHOST
  // /home/john/www/johns-jokes.com/public_html/subs/thumb/swine_flu_001_thumb.png
  if( $ok=file_exists($p_abs) ):
    $dims = getimagesize($p_abs); 
    if($dims): 
      # BEWARE MUST HAVE PARENT ampthb
      if(0):
        $result = <<< ____EOT
          <div class="fll tac">
           <a href="$url" title="$title"> 
            <amp-img 
              src="$thumb" 
              {$dims[3]} 
              alt="$title"
            />
           </a>
           <br>
           $title 
          </div>
____EOT;

      else:
        $result = <<< ____EOT
          <div class="fll tac">
           <a href="$url" title="$title"> 
            <amp-img 
              src="$thumb" 
              {$dims[3]} 
              alt="$title"
            />
            <noscript>
              <img src="$thumb" {$dims[3]} alt="AMP">
            </noscript>
            </a>
            <br>
            $title 
          </div>
____EOT;

      endif;

    else:
      log_message('error', __METHOD__. ' - getimagesize() PROBLEM ' .$p_abs);
    endif;  
  endif; 

}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

  return  $result;
}#

/*
public function OLD_background_url_pix($row, $mg_1em='pix')
{
  $result = '';

  $url    = base_url()  .$row['xrl'];  

  $p_abs  = PATH_THUMBS .$row['thumb'];
  $thumb  = URL_THUMB  	.$row['thumb'];
  $title  = str_replace('-',' ',$row['xrl']); 

  // BEWARE: $_SERVER['DOCUMENT_ROOT'] ONLY has trailing slash ONLINE
  // $p_abs  = str_replace('//','/',$p_abs);

  // Safety title prefix removed
  $safety = array(':', 'Safety at Work','Safety at Play', 'Safety at work');
  $title  = str_replace($safety, '',$title);
  $title  = "\n\t" .$title ." \t\n \n";

  if( file_exists($p_abs) ):
    $result = '<a href="' .$url .'" title="' .$title .'">' 
            .   '<img src="' .$thumb .'" alt="' .$title .'" />'
            . '</a>';
  endif;            

  return  $result;
}#
*/



#=============================================
#
# returns with three jokes
#
#=============================================
public function m_latest_jokes($count=22, $first=0, $get_pix=TRUE, $ascend=TRUE,  & $by_ref) // ALSO top 3 and a few more
{
	$by_ref =array();
  #$pix    = array();
  #$joke   = array();
  #$first  = '';       // sets either picture or joke first
  $ascend  = $ascend ? 'DESC' : 'ASC';
  $order_by = ' ORDER BY id ' .$ascend .' LIMIT ' .$first .', ' .$count;

  // NO PICTURES
  $sql =
  "
  	SELECT id, title, xrl, memo 
  	FROM   jokes 
  	WHERE  memo NOT LIKE '% src=%' 
  " 
  . $order_by;  # ORDER BY id DESC LIMIT 0," .$count;
  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
    	$link 	    = heading( $row->title, 2 ).jj;
        
      $memo    = trim($row->memo);
      $memo    = nl2br($memo);
      $by_ref[] = $link .$memo .br(1);
    endforeach;
  endif;
  
  # return $by_ref;
}#



#=============================================
#
# returns with jokes and pictures
#
#=============================================
public function m_top_20_new($count=22, $max_jokeimum='NOT_USED',$get_pix=FALSE) // ALSO top 3 and a few more
{
  $pix    = array();
  $joke   = array();
  $first  = '';       // sets either picture or joke first
  $order_by = ' ORDER BY id DESC LIMIT 0, ' .$count;

  // NO PICTURES
  $sql    = "SELECT id, title, xrl, memo FROM jokes WHERE memo NOT LIKE '% src=%' " .$order_by; // ORDER BY id DESC LIMIT 0," .$count;
  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    $size = 1; // SEO - ensure that there is at least one <h1 on the page
    foreach($query->result() as $row):
      if('Google-search-results' != $row->xrl):
        if($count==3):
          $link = heading( $row->title, $size);
        else:
          $link = heading(anchor($row->xrl, $row->title), $size);
        endif;
        $size = 2;
        
        $str = $row->memo;
        #$str = str_replace("i","&#237;",$row->memo);
        #$str  = str_replace("l&#237;", "li", $str); // <li> and </li>
        $str  = nl2br($str);
        $data['thelot'][] = $link .$str .br(2);
      endif;
    endforeach;
  endif;
  // unset($sql);
  // unset($str);  
  // $query->free_result();


  if($get_pix):
    // JUST PICTURES
    $sql    = "SELECT id, title, xrl, memo FROM jokes WHERE memo LIKE '%src%' " .$order_by; // ORDER BY id DESC LIMIT 0," .$count;
    $query  = $this->db->query($sql);
    if ($query && $query->num_rows()):
      foreach($query->result() as $row):
         $thumb  = $this->_get_thumbnail($row->memo, 2); //  http://localhost/subdomain/thumb/monica-lewinsky_thumb.gif
         $row_new = array
         (
          'xrl'   =>  $row->xrl,
          'thumb' =>  $thumb
         );
         $data['thelot'][] = $this->_background_url_pix($row_new);
      endforeach;
      $query->free_result();
    endif;
  endif; # get-pix

  if(empty($data)):
    $data['thelot'][] = br(6) .'<b>Yes we have no joke for today :)</b>' .br(6);
  endif;

  return $data;
}#

//=======================================================================
//
// called from: Funny Pictures AND Safety at Work
//
//=======================================================================
public function m_videos($start=22000, $count=5, $sql='', & $firstTitleByRef=NULL) // ALSO top 3 and a few more
{
  // $start  = max(218, $start);
  // $pix    = array();

/*  
  // CALLED FROM c_video()
  if('' === $sql):
    $sql    = " SELECT  id,xrl,title,memo
                FROM    jokes
                WHERE   memo LIKE '% src%' AND id <= $start
                ORDER   BY id DESC
                LIMIT 0," .$count
              ;
    $sql = '
            SELECT id,xrl,title,memo
            FROM jokes
            WHERE memo LIKE "%video%"
            AND   memo LIKE "%youtube%"
            ORDER BY title
            ';
  endif;
*/
  // $query  = $this->db->query($sql);
  // if ($query && $query->num_rows()):
    // $firstTitleByRef = $query->row()->title;
    $firstTitleByRef = 'HERE IS THE TITLE';
    $vids  = array 
    (
      '5wh_bifwDoQ', // Trailer stuck, caravan 
      '2sD_8prYOxo', // John Cleese football
      'LarCBChAoeo', // Advert - sheep on track
      'lmBRZ7UR3Rw', // Beer canon montage
      'MENjFkEAj9g', // Bankgok train in market
      'Y7XW-mewUm8', // Pane built in the air
      'kAG39jKi0lI', // Two Ronnies, Apples
     #'lbejNNCTr7k', // 12 days of Christmas
    );
    foreach($vids as $row):
      $vUrl  = $row; // trim( substr($row->memo, 0, 12) );
      $pix[] = $this->showVideo($vUrl, $title=NULL, $blurb=NULL);
    endforeach;
    unset($query);
  // endif;
  
  return $pix;
}#

//=======================================================================
//
// called from: Funny Pictures AND Safety at Work
//
//=======================================================================
public function m_videosRWD( $vids=array(), & $firstTitleByRef=NULL, $v_single=NULL, $blurb=NULL)
{
  $result = array();

  $vids = $v_single ? array($v_single) : $vids;

  $firstTitleByRef = NULL;
  foreach($vids as $row):
    $vUrl  = $row;
    $blurb = NULL;
    
    if(0):
      # OLD STYLE
      #$result[] = $this->showVideo($vUrl, $title, $blurb);
    else:
      $result[] = $xxx=$this->getVideoJson($vUrl);
    endif;

    if( ! $firstTitleByRef ):
      $firstTitleByRef = '$titleByRefNotUsed';
    endif;
  endforeach;

  return $result;
}#

//=======================================================================
function getVideoJson($vUrl=NULL)
{
  $json = json_decode
  (
    file_get_contents
    (
      "http://gdata.youtube.com/feeds/api/videos/" .$vUrl ."?v=2&alt=json"
    )
  );
  #"http://gdata.youtube.com/feeds/api/videos/" .$vUrl ."?v=2&alt=jsonc"
  #http://gdata.youtube.com/feeds/api/videos/_PsdGQ96ah4?v=2&alt=json
	#https://youtu.be/TQmz6Rbpnu0

#$feed = json_decode($json->getContent(), true);
#echo $feed['entry']['title']['$t'];

  if(0) // DEBUG: $json data
  {
		#$ff = "http://gdata.youtube.com/feeds/api/videos/" .$vUrl ."?v=2&alt=json";
    #json_decode($json, true);
		vd( $json->entry->id );
		vd( $json->entry->title );
		vd( $json->version );
		vd( $json->entry->xmlns );
		vd($json, '$array');

    echo '<pre>';  print_r($json->entry->id ); echo '</pre>';
   #echo '<pre>';  print_r($json->entry); echo '</pre>';
   #echo '<pre>';  print_r($json->data); echo '</pre>';
    echo '<br />https://www.youtube.com/watch?feature=player_embedded&v=Release%20Trailer%20-%20Am%20Juggle%20Game%20-%20out%20now';
    echo '<br />http://www.youtube.com/watch?feature=player_embedded&v=a_6mSHG7bK8';
  }
  
  return $json;
}

//=======================================================================
//
// called from: Funny Pictures AND Safety at Work
//
//=======================================================================
public function m_videosAll( & $firstTitleByRef=NULL, $v_single=NULL, $blurb=NULL)
{
   $result = array();

   //$firstTitleByRef = 'HERE IS THE TITLE';
    $vids  = array 
    (
      '5wh_bifwDoQ', // Trailer stuck, caravan 
      '2sD_8prYOxo', // John Cleese football
      'LarCBChAoeo', // Advert - sheep on track
      'lmBRZ7UR3Rw', // Beer canon montage
      'MENjFkEAj9g', // Bankgok train in market
      'Y7XW-mewUm8', // Pane built in the air
      'kAG39jKi0lI', // Two Ronnies, Apples
     #'lbejNNCTr7k', // 12 days of Christmas
    );

    $vids = $v_single ? array($v_single) : $vids;

    $firstTitleByRef = NULL;
    foreach($vids as $row):
      $vUrl  = $row;
      $blurb = NULL;
      $result[] = $this->showVideo($vUrl, $title, $blurb);

      if( ! $firstTitleByRef ):
        $firstTitleByRef = $title;
      endif;
    endforeach;

  return $result;
}#


//===================================================================
function showVideo($vUrl='a_6mSHG7bK8', & $title=NULL, & $blurb=NULL, & $params=array())      
{
  $result = NULL;

  $ytvid = 'https://www.youtube.com/watch?feature=player_embedded&amp;v=' .$vUrl;
  $cInfo = 'https://www.youtube.com/watch?feature=player_embedded&amp;contentDetails=' .$vUrl;

  $ff = 'https://gdata.youtube.com/feeds/api/videos/' .$vUrl .'?v=2&alt=jsonc';
  $json = NULL;
  if(file_exists($ff)){
    $json = json_decode ( file_get_contents($ff));
  }
  /*
  if(0) // DEBUG: $json data
  {
    echo '<pre>';  print_r($json->data); echo '</pre>';
    echo '<br />https://www.youtube.com/watch?feature=player_embedded&v=Release%20Trailer%20-%20Am%20Juggle%20Game%20-%20out%20now';
    echo '<br />http://www.youtube.com/watch?feature=player_embedded&v=a_6mSHG7bK8';
  }
  */
  
 #$title = isset($title) ? $title : $json->data->title;
  if($json) {
    $title = $json->data->title;
    $blurb = isset($blurb) ? $blurb : $json->data->description;
    $views = number_format( $json->data->viewCount );

    $secs  = $json->data->duration;        
    $time  = sprintf('%d:%02d:%02d', $secs / 2600 %24, $secs / 60 % 60, $secs % 60);

  /* BEWARE: sometimes sddefault.jpg DOES NOT EXIST
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/default.jpg';    // GOOD  - 120 x  90 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/3.jpg';          // GOOD  - 120 x  90 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/2.jpg';          // GOOD  - 120 x  90 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/1.jpg';          // GOOD  - 120 x  90 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/mqdefault.jpg';  // SMALL - 320 x 180 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/hqdefault.jpg';  // GOOD  - 480 x 360 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/0.jpg';          // GOOD  - 480 x 360 - always available
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/sddefault.jpg';  // BEST  - 640 x 480 - SOMETIMES MISSING
  */
    $img = 'http://i.ytimg.com/vi/' .$vUrl .'/0.jpg';          // Always Available

    # <img src="$img" style="width:480px" alt="$vUrl" />
    # $bx  = 'background:#9ff url(http://i.ytimg.com/vi/' .$vUrl .'/0.jpg) no-repeat center center;';
    # $bg  = 'background:#9ff url(' .$img .') no-repeat 0 0';
    $bg  = 'background:#9ff url(' .$img .') no-repeat 100% 100%';

    $params = array('vUrl'=>$vUrl, 'bg'=>$bg, 'time'=>$time, 'views'=>$views, 'title'=>$title, 'blurb'=>$blurb,);

    $result = <<< ____VIDEO
      <div class="vsingle bdr" style="background-color:#fff;">
        <a href="https://www.youtube.com/watch?feature=player_embedded&amp;v=$vUrl"> 
          <i style="color:#333;"> $title </i>
        </a>
        <div class="youtube" id="_$vUrl" style="$bg">
          <!-- YouTube video goes here -->
        </div>
        <div class="blurb p42 fg0">
          $blurb
        </div>
        <div class="fss bdr">
          Duration: $time 
          <div class="flr">$views views</div>
        </div>
      </div>
____VIDEO;
    }

  $result = '<a href="https://www.youtube.com/watch?feature=player_embedded&amp;v=$vUrl"> 
          <i style="color:#333;"> $title </i>
        </a>';

  $result = '<a href="https://www.youtube.com/watch?feature=player_embedded&amp;v=$vUrl"> 
          <i class="fwb"> $title </i>
        </a>';

	$result = '<amp-youtube data-videoid="a_6mSHG7bK8" width="360" height="202.5"></amp-youtube>';
	$result = '<amp-youtube data-videoid="a_6mSHG7bK8" width="480" height="270" layout="responsive"></amp-youtube>';
	
  return $result;
}


//=======================================================================
//
// called from: Funny Pictures AND Safety at Work
//
//=======================================================================
# ALSO top 3 and a few more
public function m_three_pix($start=22000, $count=5, $sql='', & $firstTitleByRef=NULL) 
{
  $result = NULL;

  $start  = max(218, $start);

  // '' THEN MUST NOT BE CALLED FROM c_pix()
  if('' === $sql):
    $sql    = " SELECT  id, xrl, title, memo
                FROM    jokes
                WHERE   memo LIKE '% src%' AND id <= $start
                ORDER   BY id DESC
                LIMIT 0," .$count
              ;
  endif;         

  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    $firstTitleByRef = $query->row()->title;
    foreach($query->result() as $row):

      if(1): 
        $thumb  = $this->_get_thumbnail($row->memo, 2, $row->xrl); 
        if( file_exists( PATH_THUMBS .$thumb) ):
          # echo 'GREAT';
        else:
          $pix = str_replace('_thumb', '', $thumb);
          #echo jj, PATH_IMAGES .$pix;
          if(file_exists( PATH_IMAGES .$pix ) ):
            $tmp['joke_img'] = PATH_IMAGES .$pix;
            $this->m_lib->CreateThumb($tmp); // , false);
          endif;  

        endif;  
        # douglas-adams-happy-towel-day_thumb.jpg
      else:
        #$tmp = $this->m_lib->m_get_xrl($row->xrl) ; //$joke_xrl);
      endif;        
      $row_new = array
      (
        'xrl'   =>  $row->xrl,
        'thumb' =>  $thumb
      );
      $result[] = (string) $this->_background_url_pix($row_new);
    endforeach;
    unset($query);
  endif;

  return $result;
}#

//=======================================================================
//
// called from: Funny Pictures AND Safety at Work
//
//=======================================================================
# ALSO top 3 and a few more
public function m_amp_pix($start=22000, $count=5, $sql='', & $firstTitleByRef=NULL) 
{
  $result = NULL;

  $start  = max(218, $start);

  // '' THEN MUST NOT BE CALLED FROM c_pix()
  if('' === $sql):
    $sql = " SELECT  id, xrl, title, memo
             FROM    jokes
             WHERE   memo LIKE '% src%' AND id <= $start
             ORDER   BY id DESC
             LIMIT 0," .$count
              ;
  endif;         

  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    $firstTitleByRef = $query->row()->title;
    foreach($query->result() as $row):
      if(1): 
        $thumb = $this->_get_thumbnail($row->memo, 2, $row->xrl); 
        if( file_exists( PATH_THUMBS .$thumb) ):
          # echo 'GREAT';
        else:
          $pix = str_replace('_thumb', '', $thumb);
          #echo jj, PATH_IMAGES .$pix;
          if(file_exists( PATH_IMAGES .$pix ) ):
            $tmp['joke_img'] = PATH_IMAGES .$pix;
            $this->m_lib->CreateThumb($tmp); // , false);
          endif;  
        endif;  
        # douglas-adams-happy-towel-day_thumb.jpg
      else:
        #$tmp = $this->m_lib->m_get_xrl($row->xrl) ; //$joke_xrl);
      endif;        
      $row_new = array
      (
        'xrl'   =>  $row->xrl,
        'thumb' =>  $thumb
      );

      $result[] = (string) $this->_background_url_amp_pix($row_new);

    endforeach;
    unset($query);
  endif;

  return $result;
}#
 

// called from top 3 and a few more
//=============================================
public function m_three_jokes($start=999, $count=3, $direction='DESC') 
{
  $start = max(6,$start);
  
  $links  = array();
  $sql    = " SELECT  id, title, xrl, memo 
              FROM    jokes
              WHERE   memo NOT LIKE '% src=%' AND id < $start
              ORDER   BY id DESC
              LIMIT 0," .$count
            ;
  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $memo   = "<span class='dib tal p42'>"
              .   character_limiter( strip_tags($row->memo), 160)
              . '</span>';
      $links[]= '<div class="pix hvr">'
         #    .     "<a href='" .base_url() .$row->xrl ."' title='" .strip_quotes($row->title) ."'>"  
              .     '<a href="' .base_url() .$row->xrl .'" title="' .strip_quotes($row->title) .'">'  
              .       character_limiter($row->title,14) .br(1)
              .       $memo
              .     '</a>' 
              . '</div>';
      unset($memo);         
    endforeach;
  endif;
  unset($query);
  
  return $links;
}#




//=============================================
public function m_favourites_new($favourites)
{
  $result=array();

  foreach($favourites as $idx):
    $sql    = "SELECT * FROM jokes WHERE id='" . $idx ."' LIMIT 0,1";
    $query  = $this->db->query($sql);

    if($query):
      $title  = $query->row()->title;
      $link   = $query->row()->xrl;
  
      // test for pictures and return with picture OR memo
      $tmp = nl2br($this->_punch_line($link, $query->row()->memo,$query->row()->id ));
      // $tmp     = nl2br($query->row()->memo);
      
      $result[] = br(3)
              . "<div class='fll dil'>" 
              .   heading(anchor($link, $title),2) 
              .   "<div class='fll dil'>"
              .     $tmp 
              .   '</div>'
              .'</div>'
              . "<br class='clb' />"
              ;
    endif;
  endforeach;

  return $result; // top_20 and jokememo
}#


//============================================
//
//  return with formatted $result
//
//============================================
public function m_getjoke($joke_idx=123)
{
  $result = array();

  $sql  = "SELECT id, title, xrl, memo, date FROM jokes WHERE id = '" .$joke_idx ."' ORDER BY id LIMIT 0, 1;";
  $query = $this->db->query($sql);

  // SET DEFAULTS if no joke
    $_SESSION['lastidx']  = -1;
    $result['joke_idx']   = -1;
    $result['joke_title'] = 'Unable to find any joke - please try again';
    $result['joke_xrl']   = url_title('Unable to find any joke - please try again');
    $result['joke_memo']  = 'Please try again';

  if($query && $query->num_rows()):
    $tmp                  = '';
    $row                  = $query->row();
    $result['joke_idx']   = $row->id;
    $result['joke_xrl']   = $row->xrl;
    $result['joke_title'] = $row->title;
    $result['canonical']  = $row->xrl;
    $_SESSION['lastidx']  = $row->id;
    $cmemo                = trim($row->memo);
    $result['joke_memo']  = $cmemo;

    // Maybe ERROR Report missing image
    if (strpos($cmemo, '<img ')):
    	$result['HAS_PICTURE'] = TRUE;
			$imgName = $this->_get_image_name($cmemo);	
      $image   = SDR .$imgName;
      if ( ! file_exists($image) ):
        log_message('ERROR', __METHOD__. ': NO IMAGE: ' .$image);
      endif;
    endif;
  endif;

  return $result;
}#


//============================================
//
//  return with formatted $result
//
//============================================
public function m_get_xrl($joke_xrl='')
{
  $result = array();
  
  $sql   = 'SELECT * FROM jokes WHERE xrl = "' .$joke_xrl .'"'; 
  // ORDER BY id LIMIT 0, 1;";
  $query = $this->db->query($sql);

  if($query && $query->num_rows()):
    $tmp                    = '';
    $row                    = $query->row();
    
    $result['joke_idx']     = $row->id;
    $result['joke_xrl']     = $row->xrl;
    $result['joke_title']   = $row->title;
    $result['canonical']    = url_title( strtolower($row->title) );
    $cmemo                  = trim($row->memo);
    $result['joke_memo']    = $cmemo;
    $result['description']  = trim( strip_tags($cmemo) );
    $result['description']  = (strlen($result['description'])<3) ? $row->title: strip_tags($cmemo);

    $result['HAS_PICTURE']  = FALSE;
    $_SESSION['lastidx']    = $row->id;

    // Maybe ERROR Report missing image
    if (strpos($cmemo, ' src=')):
      $result['HAS_PICTURE'] = TRUE;
/*
<br />/var/www/johns-jokes.com/public_html/afiles/images/toilet-sign-men-vs-women.jpg<br />/var/www/johns-jokes.com/public_html/afiles/images/toilet-sign-men-vs-women.jpg<!-- CACHED: Sunday, 9th April 2017 13:12:28 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
 "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html lang="en-us">
*/
      $result['joke_img']    = SDR .$this->_get_image_name($cmemo);
      $result['joke_img']    = str_replace('//', '/', $result['joke_img']);
 
// KLUDGE
      $ok = $this->_get_thumbnail($cmemo, 0); //, $joke_xrl);
      # http://localhost/afiles/images/Fiji-was-united-today-for-an-an-instant-when-everyone-shouted-THROW-IT.jpg
      # /home/john/www/files/images/Fiji-was-united-today-for-an-an-instant-when-everyone-shouted-THROW-IT.jpg
      $ok = file_exists($result['joke_img']);
     # $ok = file_exists('http://localhost/afiles/images/Fiji-was-united-today-for-an-an-instant-when-everyone-shouted-THROW-IT.jpg');
     # $ok = file_exists('http://localhost/afiles/images/Fiji-was-united-today-for-an-an-instant-when-everyone-shouted-THROW-IT.jpg');
     #echo getcwd();die;
     # $ok = file_exists('/home/john/www/afiles/images/Fiji-was-united-today-for-an-an-instant-when-everyone-shouted-THROW-IT.jpg');
      if ( $ok ):
        # 
      else:
        log_message('ERROR', __METHOD__.': ' .__LINE__ .' - NO IMAGE: ' .$result['joke_img']);
      endif;
    endif;
    
    // maybe save speech
    $tmp = strip_tags($row->memo);
    if(! empty($tmp)):
      #$this->_maybe_save_speech($row->id, $row->title, $row->memo);
    endif;
  else: // NOT FOUND
    $tmp                  	= 'Unable to find any joke - please try again';
    $result['joke_idx']   	= -1;
    $result['joke_title'] 	= $tmp;
    $result['joke_xrl']   	= url_title($tmp);
    $result['joke_memo']   	= 'Please try again';
    $result['description']	= $tmp;
    $_SESSION['lastidx']    = -1;
  endif;
  
  return $result;
}#

//===================================
//
//  return true/false
//
//===================================
public function m_duplicate_check($joke_xrl)
{
  $sql  = "SELECT * FROM jokes WHERE xrl = '" .$joke_xrl ."'"; // ORDER BY id LIMIT 0, 1;";
  $query = $this->db->query($sql);

  return $query->num_rows();	
}#

//============================================
public function today_hits_insert($idx=0)
{
  // maybe insert
  if($idx > 0):
  	#$this->joke_update_hits($idx);
		$sql = 'SELECT hits FROM jokes WHERE id=' .$idx;
		$qry = $this->db->query($sql);
		
		$hits = $qry->row()->hits;
		$sql = 'Update jokes SET hits=' .++$hits . ' WHERE id=' .$idx;
		$qry = $this->db->query($sql);
  endif;
}#


//============================================
public function today_hits_get_links()
{
  $OLD_query = "
    SELECT 	id, hits, xrl, title, memo
    FROM 		jokes
    WHERE 	hits > 0 
    ORDER 	BY hits DESC 
    LIMIT 	0, 20"; 
  #2711 / 30 = 90   

  $XXX   = 82 * date('j');
  $query = "
    SELECT 	id, hits, xrl, title, memo
    FROM 		jokes
    WHERE 	id > $XXX 
    ORDER 	BY id ASC 
    LIMIT 	0, 20"; 
  $query = $this->db->query($query);  

  # $i2 = 1;
  $result_today = array();

  if($query):
    foreach($query->result() as $row):
      $result_today[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif; 
  
  return $result_today;
}#

//============================================
#
# called from joke->filter(...)
#		return with $data
#
//============================================
public function m_filter(& $data, $tmp_filter= NULL)
{
  $data['agood'  ]  = array();
  $data['unable']   = array();
  $data['found' ]   = array();
  $data["filter"]   = array('name' => 'filter', 'id' => 'filter');

  if (empty($tmp_filter)):
    $aWords = array('Please try again and enter words separated by spaces');
  else:
    $tmp_filter = str_replace('%20', ' ', $tmp_filter);
    $aWords     = explode(" ", trim($tmp_filter)); // TRIM IS ESSENTIAL !!!
  endif;

  $cnt = count($aWords);
  for ($i2=0; $i2<$cnt; $i2++):
    $row = strtolower($aWords[$i2]);
    $row = quotes_to_entities($row);
    if ((is_numeric($row)) && ($row <= $_SESSION['max_joke'])):
      $sql = "SELECT * FROM jokes WHERE id='" .$row ."'"; // LIMIT 1;";
    else:
      $sql = "SELECT * FROM jokes WHERE title LIKE '%" .$row ."%' OR memo LIKE '%" .$row ."%'";
    endif;
    $query = $this->db->query($sql);

    // Results found from a single query - IF FOUND then add to agood to use in final sql statement
    if ($query && $query->num_rows() > 0):
      $data['agood'][]  = $aWords[$i2];
    else:
      $data['unable'][] = $aWords[$i2];
    endif;
  endfor; #============================

  // Defaults
  $data['joke_id'][]    = 0; // $row->id;
  $data['page_title']   = 'Unable to find any jokes containing: ' .implode(' ', $data['unable']);
  $data['joke_memo'][]  = 'No joke found - Please try again';
  $data['joke_date'][]  = '';
  $data['joke_count']   = 0; 

  //
  $cnt = count($data['agood']);
  // if we find more than one then dab word found onto the end
  // LOOKING FOR: ci 2 0
  $sql_agood = '';
  for ($i2=0; $i2<$cnt; $i2++):
    $thisword = strtolower($data['agood'][$i2]);
    $tmp = ($i2>0) ? ' && ' : ''; // $and_more;
    if (is_numeric($thisword)):
      $tmp .= " (id='" .$thisword ."') OR (title LIKE '%" .$thisword ."%' OR memo LIKE '%" .$thisword ."%')";
    else:
      $tmp .= "  (title LIKE '%" .$thisword ."%' OR memo LIKE '%" .$thisword ."%')";
    endif;

    // test num_rows()
    // SELECT * FROM jokes WHERE  ( (title LIKE '%wamp%' OR memo LIKE '%wamp%'))
    $sql = "SELECT * FROM jokes WHERE " .$sql_agood .$tmp;
    $query = $this->db->query($sql);
    if ($query && $query->num_rows() > 0) : // && (!empty($row)))
      $data['found'][] = $thisword;
      $sql = "SELECT * FROM jokes WHERE " .$sql_agood .$tmp;
      $sql_agood .= $tmp;
    else:
      $data['unable'][] = $thisword;
    endif;
  endfor;


  if(empty($sql_agood)):
    $data['sql']  = $sql;
  else:
    // just in case the last found was FALSE
    $sql_agood    = 'SELECT * FROM jokes WHERE ' .$sql_agood;
    $query        = $this->db->query($sql_agood);
    $cnt          = $query->num_rows();
    $data['sql']  = $sql_agood  .' ORDER BY title';
    $query->free_result();
  endif;

  return $data;
}# 

//==================================================
// CALLED FROM Joke_Index - jotd
public function get_jokes($start_page=1, $per_page=22, & $BY_REF, & $BY_description='Joke of the Day')#, $max=-1)
{
  $this->db->select   ('id, title, xrl, memo');
  $this->db->not_like ('memo', 'src=');
  $this->db->order_by ('id', 'DESC'); //'DESC'
  $this->db->limit   	($per_page, $start_page);
  $query = $this->db->get('jokes');

  $result = array();
  if ($query && $query->num_rows()):
  	$BY_description = NULL;
    foreach($query->result() as $row):
   	 
    	if( empty($BY_description) ):
    		$BY_description = strip_tags( $row->memo );
    	endif;
      $BY_title = $row->title;

      $tmp      = LOCALHOST ?  $row->title .js. "<b class='bgr'>[" .$row->id .' ]</b>': $row->title;
      // JUST PLAYING
      if ( 0 && LOCALHOST) {
        $tmp .= '<p>'
             .$start_page. js.js. $row->id.js.js .$_SESSION['max_joke']
            .jj    
            .'</p>';
        # code...
      }
      $link     = heading( $tmp, 2 );
      // $link     = '';
        
      $memo			= trim($row->memo);
      $memo  		= nl2br($memo);
      
      $BY_REF[] = $link .$memo;
     
    endforeach;
    
    # USED TO GET ASSOCIATED PICTURES
		$result = $row->id;    
		
    $query->free_result();
  endif;

  return $result;
}#

//==================================================
// CALLED FROM Joke_Index - jotd
public function getJokesData($start_page=1, $per_page=22, & $BY_title=NULL, & $BY_description=NULL)
{
  $result = array();

  # Works OK Sortof - gets $surplus then 1st===last
  // if(0):
    /*
    $this->db->select   ('id, idx, title, xrl, memo');
    $this->db->not_like ('memo', 'src=');
    $this->db->order_by ('id', 'DESC'); //'DESC'
    $this->db->limit    ($per_page, $start_page);
    $query = $this->db->get('jokes');
    */
  // else:
    $this->db->select   ('id, idx, title, xrl, memo');
    $this->db->not_like ('memo', 'src=');
    $this->db->order_by ('idx', 'DESC'); 
    $this->db->limit    ($per_page, $start_page);
    $query = $this->db->get('jokes');
  // endif;
    
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $title = LOCALHOST ? $row->title .js. '<i class="flr fss fw0">#' .$row->id .'</i>' : $row->title;
      $result[] = array
      (
        $row->id,
        $row->xrl,
        $title,
        $row->memo, // substr($row->memo,0,88),
      );
      if( empty($BY_title) ):
        $BY_title           = $row->title;
        $BY_description = strip_tags( $row->memo );
      endif;
    endforeach;
    rsort($result); // 14,15,16

    $query->free_result();
  endif;

  return $result;
}#

//==================================================
// CALLED FROM Joke_Index - jotd
public function rev_jokes($start_page=1, $per_page=22, & $BY_REF, & $BY_description='Joke of the Day')#, $max=-1)
{
  $this->db->select   ('id, xd, title, xrl, memo');
  $this->db->not_like ('memo', 'src=');
  $this->db->order_by ('xd', 'ASC'); //'DESC'
  $this->db->limit    ($per_page, $start_page);
  $query = $this->db->get('jokes');

  $result = array();
  if ($query && $query->num_rows()):
    $BY_description = NULL;
    foreach($query->result() as $row):
     
      if( empty($BY_description) ):
        $BY_description = strip_tags( $row->memo );
      endif;


      $tmp      = LOCALHOST ?  $row->title .js. "<b class='bgr'>[" .$row->xd .' ]</b>': $row->title;
      // JUST PLAYING
      if ( 10 && LOCALHOST) {
        $tmp .= '<p>'
             .$start_page. js.js. $row->xd.js.js .$_SESSION['max_joke']
            .jj    
            .'</p>';
        # code...
      }
      $link     = heading( $tmp, 2 );
      // $link     = '';
        
      $memo     = trim($row->memo);
      $memo     = nl2br($memo);
      
      $BY_REF[] = $link .$memo;
     
    endforeach;
    
    # USED TO GET ASSOCIATED PICTURES
    $result = $row->xd;    
    
    $query->free_result();
  endif;

  return $result;
}#

//==================================================
// CALLED FROM most_linked
public function get_most_linked($startPage=1, $perPage=22)
{
  $results = array();

  if(0):
    $this->db->select   ('items, link');
    $this->db->order_by ('items', 'DESC');
    $this->db->limit   	($perPage, $startPage);
    $$qry = $this->db->get('gg_most_linked');
  else:  
    $this->db->select   ('title, xrl, hits');
    $this->db->order_by ('hits', 'DESC');
    $this->db->limit    ($perPage, $startPage);
    $qry = $this->db->get('jokes');
  endif;  

  if ($qry && $qry->num_rows()):
    $results[] = 'Links'.js.js.js.js.js.js.'Joke Title<hr>';
    foreach($qry->result() as $row):
      $url      = $row->xrl .'.html';
    	$title    = $row->title;
      $results[] = number_format((float)$row->hits,0) .js.js.js
                 . anchor($url, $title);# .js.js .'[<code>' .$row->items .'</code>]';
    endforeach;
    $qry->free_result();
  endif;

  return $results;
}#

//==================================================
// CALLED FROM C_groups
//==================================================
public function get_group($sql, $start_page=1, $per_page=22)
{
  $result = array();

  $sql .= "Limit " .$start_page .',' .$per_page;


  $query = $this->db->query($sql);
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#

/*
//==================================================
// CALLED FROM C_groups
//==================================================
public function OLD_get_group($like, $start_page=1, $per_page=22, $aLike=NULL)
{
  $result = array();

  if(isset($aLike)){
    $this->db->select   ('id, title, xrl, memo');
    // $this->db->like     ('title', $like); // 'iphone ipad, ipod'
    // $this->db->or_like  ('memo',  $like);  // 'blonde'
    foreach($aLikes as $field => $like){
      $this->db->or_like  ($field,  $like);  // 'blonde'
    }
    $this->db->order_by ('title');
    $this->db->limit    ($per_page, $start_page);
    $query = $this->db->get('jokes');

  }else{
    $this->db->select   ('id, title, xrl, memo');
    $this->db->like     ('title', $like); // 'iphone ipad, ipod'
    $this->db->or_like  ('memo',  $like);  // 'blonde'
    $this->db->order_by ('title');
    $this->db->limit    ($per_page, $start_page);
    $query = $this->db->get('jokes');
  }
  
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#

//==================================================
// CALLED FROM blondes
public function get_blondes($start_page=1, $per_page=22)
{
  $this->db->select   ('id, title, xrl, memo');
  $this->db->like     ('title', 'blonde');
  $this->db->or_like  ('memo', 'blonde');
  $this->db->order_by ('title');
  $this->db->limit    ($per_page, $start_page);
  $query = $this->db->get('jokes');

  $result = array();
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#

//==================================================
// CALLED FROM little_johnny
public function get_little_johnny($start_page=1, $per_page=22)
{
  $this->db->select   ('id, title, xrl, memo');
  $this->db->like     ('title', 'little johnny');
  $this->db->or_like  ('memo', 'little johnny');
  $this->db->order_by ('title');
  $this->db->limit($per_page, $start_page);
  $query = $this->db->get('jokes');

  $result = array();
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#



//==================================================
// CALLED FROM chuck_norris
public function get_chuck_norris($start_page=1, $per_page=22, $sql)
{
  $this->db->select   ('id, xrl, title, memo');
  $this->db->like     ('title', 'chuck norris');
  $this->db->or_like  ('memo', 'chuck norris');
  $this->db->order_by ('title');
  $this->db->limit    ($per_page, $start_page);
  $query = $this->db->get('jokes');

  $result = array();
  if ($query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#


//==================================================
// CALLED FROM c_iphone
public function get_iphone($start_page=1, $per_page=22, $sql)
{
  $sql  .= ' LIMIT ' .$start_page .', ' .$per_page;   
  $query = $this->db->query($sql);  
#echo jj,jj, $sql;

  $result = array();
  if (10 && $query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
  endif;

  return $result;
}#


//==================================================
// CALLED FROM sex-jokes
public function get_sex($start_page=1, $per_page=22, $sql)
{
  // / * 
    # $sql = 'SELECT id, title FROM jokes ORDER BY title ';
    # $sql  .= " LIMIT $start_page, $per_page ";
    # $query = $this->db->query($sql);
    
    $this->db->select   ('id, title, xrl, memo');
    $this->db->like     ('title', ' sex');
    $this->db->or_like  ('memo', ' sex');
    $this->db->order_by ('title');
    $this->db->limit    ($per_page, $start_page);
    $query = $this->db->get('jokes');
    $sql = "
        SELECT `id`, `title`, `xrl`, `memo` 
        FROM (`jokes`) 
        WHERE `title` LIKE '% sex%' OR `memo` LIKE '% sex%' 
        ORDER BY `title` 
        LIMIT 110, 22
        ";
  // * /
  // $query = NULL; // $this->db->query($sql);

  $result = array();
  if (10 && $query && $query->num_rows()):
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
    #$query->free_result();
  endif;

  return $result;
}#
*/


//==================================================
// CALLED FROM QUOTES
public function get_quotes($start_page=1, $per_page=15, $sql='NOT_USED')
{
  // Eliminate Google Webmaster error
  // http://localhost/quotes/index/ci_jokes/views/_email_html.php
  if (('ci_jokes'== $start_page) && ('views' == $per_page)):
    redirect('/quotes','location', 301);
  endif;

  // $sql    = 'SELECT quote, author FROM quotes ORDER BY quote ';
  $sql   = 'SELECT quote, author FROM quotes ORDER BY quote ';
  $sql  .= " LIMIT $start_page, $per_page ";
  $query = $this->db->query($sql);

  $result = array();
  if ($query && $query->num_rows()) :
    foreach($query->result() as $row):
      $result[] = $row->quote 
                . '<br /><b><em>' 
                .   $row->author 
                . '&nbsp;</em></b><br /><br />';
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#



//==================================================
//
//  return with an array of thumbnails
//
//=============================================
public function m_safety_at_work($overloaded=NULL)
{
  $result = array();
  if($overloaded):
    $sql    = "SELECT id, title, xrl, memo 
               FROM jokes  
               WHERE title LIKE 'safety at%' 
               AND 
               title LIKE '%overloaded%' 
               ORDER BY title";
  else:
    $sql    = "SELECT id, title, xrl, memo 
               FROM jokes  
               WHERE title LIKE 'safety at%' 
               AND NOT title LIKE '%overloaded%' 
               ORDER BY title";
  endif;
  $tmp    = $this->m_three_pix(-1, -1, $sql);

  foreach($tmp as $title => $row):
    $result[] = $row;
  endforeach;

  return $result;
}#


//==================================================
//
// CALLED FROM joke->filter(...)
//
//==================================================
public function get_page($start_page=1, $per_page=15, $sql)
{
  $result = array();

  $sql  .= " LIMIT $start_page, $per_page ";
  $query = $this->db->query($sql);

  if ($query && $query->num_rows()):
    $i2=0;
    foreach($query->result() as $row):
      $result[] = $this->_get_links_with_memo_in_title($row);
    endforeach;
	  $query->free_result();
 endif;

  return $result;
}#


//==================================================
// REDUNDANT - CALLED FROM C_wisdoms
public function get_wisdoms($start_page=1, $per_page=15)
{ 
  $sql = 'SELECT id, title, memo, xrl FROM wisdom ORDER BY title ';
  $sql   .= " LIMIT $start_page, $per_page ";
  $query = $this->db->query($sql);

  $result = array();
  if($query && $query->num_rows()):
    foreach($query->result() as $row):
      $tmp    = $row->memo;
      $tmp    = strip_quotes($tmp);
      $tmp    = strip_tags($tmp); 
      $tmp    = character_limiter($tmp, 420); 
    # $tmp    = htmlspecialchars($tmp);
    # $tmp    = str_replace('  ', ' ',$tmp); 

      $result[] = anchor('wisdom/' .$row->xrl, $row->title, " title='" .$tmp ."'") .'<br />';
    endforeach;
    $query->free_result();
  endif;

  return $result;
}#

 
//==================================================
public function m_get_wisdom_xrl($xrl='1') // default to first wisdom
{
  // fields: id, title, memo - same as jokes so use m_sql!

  // is_numeric() ESSENTIAL TO PREVENT '21-suggestions-for-success';
  if (is_numeric($xrl) && $xrl > 0):
    // $sql = "SELECT * FROM wisdom WHERE id='" .$idx ." ORDER BY id LIMIT 0,1'";
    $sql = "SELECT * FROM wisdom WHERE id='" .$xrl  ." ORDER BY id LIMIT 0,1'";
  else:
    // $sql = "SELECT * FROM wisdom ORDER BY title";
    // $sql = "SELECT * FROM wisdom WHERE title = '" .str_replace('-',' ', $xrl) ."'";//  ." ORDER BY id LIMIT 0,1'";
    $sql = "SELECT * FROM wisdom WHERE xrl = '" .$xrl ."'";//  ." ORDER BY id LIMIT 0,1'";
  endif;

  // set switch mode
  $data=array();
  $data['PAGE'] = "id='wisdom'";
  $data['sql'] = $sql;
  $_SESSION['m_sql'] = $data['sql'];
  $query = $this->db->query($data['sql']);

  // DEFAULTS
  $cmemo = ''; // default
  $data['joke_idx']     = '';
  $data['joke_xrl']     = '';
  $data['joke_title']   = '';
  $_SESSION['lastidx']  = 1;
  $data['joke_memo']    = '';

  $data['joke_count'] = $query ? $query->num_rows() : 0;
  if($data['joke_count'] > 0):
    $tmp                  = '';
    $row                  = $query->row();
    $data['joke_idx']     = $row->id;
    $data['joke_title']   = $row->title;
    $data['joke_xrl']     = $row->xrl;
    $_SESSION['lastidx']  = $row->id;
    $cmemo                = trim($row->memo);
    $data['joke_memo']    = $cmemo;
  endif;

  // Maybe ERROR Report missing image
  if (strpos($cmemo, '<img ')):
    $image = SDR .$this->_get_image_name($cmemo);
    if (! file_exists($image)):
      log_message('ERROR', __METHOD__. ':  NO IMAGE: ' .$image);
    endif;
  endif;
  return $data;           
} #


//==================================================
public function m_getwisdom($title='', $idx=0)
{
  // fields: id, title, memo - same as jokes so use m_sql!
  if ($idx > 0):
    $sql = "SELECT * FROM wisdom WHERE id='" .$idx ." ORDER BY id LIMIT 0,1'";
  else:
    $sql = "SELECT * FROM wisdom ORDER BY title";
  endif;

  // set switch mode
  $data=array();
  $data['PAGE'] = "id='wisdom'";
  $data['sql'] = $sql;
  $_SESSION['m_sql'] = $data['sql'];
  $query = $this->db->query($data['sql']);

  if($query):
    $data['joke_count'] = $query->num_rows();

    $tmp                  = '';
    $row                  = $query->row();
    $data['joke_idx']     = $row->id;
    $data['joke_title']   = $row->title;
    $_SESSION['lastidx']  = $row->id;
    $cmemo                = trim($row->memo);
    $data['joke_memo']    = $cmemo;

    // Maybe ERROR Report missing image
    if (strpos($cmemo, '<img ')):
      $image = SDR .$this->_get_image_name($cmemo);
      if (! file_exists($image)):
        log_message('ERROR', __METHOD__. ' : NO IMAGE: ' .$image);
      endif;
    endif;
  endif;

  return $data;           
}#        


//==============================================
//
// usage:
//        find max_joke
// returns
//        max_joke
//
//==============================================
public function maybe_set_max_joke($force=TRUE)
{
  if ($force || $_SESSION['max_joke'] <=0):
    $_SESSION['max_joke'] = $this->db->count_all_results('jokes');
  endif;

  if ($force || $_SESSION['max_pix'] <=0):
    $this->db->like('memo', 'src=');
    $this->db->not_like('title', 'safety');
    $_SESSION['max_pix'] = $this->db->count_all_results('jokes');
  endif;

  if ($force || $_SESSION['max_safety'] <=0):
    $this->db->like('memo', 'src=');
    $this->db->like('title', 'safety');
    $_SESSION['max_safety'] = $this->db->count_all_results('jokes');
  endif;

  if ($force || $_SESSION['max_quote'] <=0):
    $_SESSION['max_quote'] = $this->db->count_all_results('quotes');
  endif;
  
  if($force || $_SESSION['max_wisdom'] <=0):
    $_SESSION['max_wisdom'] = $this->db->count_all_results('wisdom');
  endif;

  if ($force || $_SESSION['max_comment'] <=0):
    $_SESSION['max_comment'] = -1; // $this->db->count_all_results('comments');
  endif;
  $tmp = '';      
  
  return $tmp;
}#


//================================================
//
//  return with thumbnail titles
//
//================================================
public function get_all_thumb_links($start=120, $limit=4)
{
  if( $start > 23 ):
    $sql = "SELECT thumb.id_joke, thumb.name, 
                   jokes.xrl, jokes.title 
            FROM   thumb, jokes
            WHERE  thumb.id_joke = jokes.id
            AND    thumb.id_joke <= " .$start ."
            ORDER BY thumb.id_joke DESC
            LIMIT  0," .$limit ."";
  else:
    $sql = "SELECT thumb.id_joke, thumb.name, 
                   jokes.xrl, jokes.title 
            FROM   thumb, jokes
            WHERE  thumb.id_joke = jokes.id
            AND    thumb.id_joke >= " .$start ."
            ORDER BY thumb.id_joke ASC
            LIMIT  0," .$limit ."";
  endif;
  $query  = $this->db->query($sql);
  $result = array();
  $thumbs = array();
 	
  if ($query && $query->num_rows()):
    foreach($query->result() AS $id => $row): 
        $thumbs[] = array( 
                      'xrl'     => $row->xrl, 
                      'thumb'   => $row->name, 
                      'id_joke' => $row->id_joke
                    );
    endforeach;
  endif;

  return $thumbs;
}#

//================================================
//
//  return with thumbnail titles
//
//================================================
public function get_all_thumbnails()
{
  $max = 5555;
  $sql = 'SELECT id,xrl,title,memo 
          FROM jokes  
          WHERE memo LIKE "%src=%"
          ORDER BY id DESC
          LIMIT 0,' . $max;
 
  $query  = $this->db->query($sql);
  
  $result = array();
  $thumbs = array();
  if ($query && $query->num_rows()):
    foreach($query->result() as $id => $row):
      $link_2_thumbnail = $this->_get_thumbnail($row->memo, 2);
      $this->get_set_thumbnail($row->id, $link_2_thumbnail, $row->id);
      $thumbs[] = array($row->xrl,$link_2_thumbnail);
    endforeach;
  endif;

  return $thumbs;
}#


//================================================
//
//  return with thumbnail titles
//
//================================================
public function get_set_thumbnail($id, $link_2_thumnail)
{
  $sql = "SELECT id, name FROM thumb WHERE id_joke=" .$id; 
          
  $query  = $this->db->query($sql);
  if ($query && $query->num_rows()):
    $not_ok = trim($query->row()->name) != $link_2_thumnail;
    if($not_ok):
      $sql = "UPDATE thumb SET name='" .$link_2_thumnail ."' WHERE id='" .$query->row()->id ."'"; 
      $query  = $this->db->query($sql);
    endif;
  else:  // NOT FOUND SO INSERT
    $sql = "INSERT IGNORE INTO thumb (id_joke, name) VALUES($id,'" .$link_2_thumnail ."')";
    $query  = $this->db->query($sql);
  endif;
  
}#


//================================================
//
//  used in c_edit->swap() to get the fields and return in an array
//
//================================================
public function get_fields( $id= -1 )
{
  $result = NULL;

  $sql	= 'SELECT id, title, xrl, memo FROM jokes WHERE id=' .$id; 
  #sql	= 'SELECT id, title, xrl       FROM jokes WHERE id=' .$id; 
  $qry  = $this->db->query($sql);
 
 return $qry->row();
}#


//================================================
//
//  used in c_edit->swap() to get the fields and return in an array
//
//================================================
public function put_fields( $a= array(), $id=-1 )
{
	$result = NULL;
					
	$tmp = array
	(
		'title'	=> trim($a->title),
		'xrl'		=> url_title(trim($a->title)),
		'memo' 	=> trim($a->memo)
	);
	$this->db->where('id', $id );
	
	$result = $this->db->update('jokes', $tmp);
 
 	return $this->db->affected_rows();
}#

//=============================
// usage:
// call:
//     http://johns-jokes.com/i-want-to-reset-all-xrl-values-in-the-table
//  class c_xrl()
//  public function index()
//  {  
//  if('i-want-to-reset-all-xrl-values-in-the-table' === $this->uri->segment(1)):
//      $this->m_lib->reset_all_xrl_values();
//    endif;
//  ...
//=============================
function reset_all_xrl_values()
{
  $iMax = $this->db->count_all('jokes');

  for($i2=1; $i2<=$iMax; $i2++):

    $query = $this->db->query("SELECT id, title, xrl FROM jokes WHERE id=".$i2);
    if ($query->num_rows() > 0):
      $title = $query->row()->title; 
      $xrl   = $query->row()->xrl; 
    endif;

    // echo jj,__LINE__; echo jj, $xrl; echo jj, url_title($title);
    // lowercase
    if($xrl != url_title($title, '-', TRUE)): // TRUE === lowercase
      $data = array
      (
        'xrl'  => url_title($title, '-', TRUE), // lower case
      );
      $this->db->where('id', $i2);
      $this->db->update('jokes', $data);
      // echo jj, $this->db->last_query();
    endif;  

  endfor;
}#

//========================================
public function _maybe_found_joke($url=-1)
{
  $data = array();

  $data['joke_idx'] = -1; // NOT FOUND DEFAULT FLAG
  $url = ($url > 0) ? $url : $url;

  $data = $this->m_lib->m_get_xrl($url);

  return $data;
}//


/*
//========================================
public function OLD__maybe_found_joke($url=-1, $thisMaybeNotUsed=NULL)
{
  $data = [];

  $data['joke_idx'] = -1; // NOT FOUND DEFAULT FLAG
  $url = ($url > 0) ? $url : $url;

  $data = $this->m_lib->m_get_xrl($url);
  # MAYBE CREATE THUMB    
    if( isset($data['HAS_PICTURE']) && $data['HAS_PICTURE'] ):
      $ok = $this->m_lib->CreateThumb($data, $useExisting=false);
      return;


      # CREATE THUMB
      # BEWARE 
      # $fThumb = str_replace('.', '_thumb.', $data['joke_img']);
        $fThumb = $data['joke_img']; // _thumb.jpg IS ADDED
        $config['test0']          = PATH_THUMBS;
        $config['test1']          = $fThumb;
        $config['test2']          = strstr($fThumb, '/images/', ! TRUE);
        $config['test3']          = substr($config['test2'], 8);
        $config['new_image']      = PATH_THUMBS .$config['test3'];
        $config['new_image']      = PATH_THUMBS .$config['test3'];

        #if(1 || ! strpos($config['new_image'], '/africa/only-in-africa-01.jpg') ):
        $ImageMagick = '/etc/ImageMagick';
        # $ImageMagick = '/usr/include/ImageMagick';
        # $ImageMagick = '/usr/share/menu/ImageMagick';
       # $gdLib = LOCALHOST ? $ImageMagick: 'GD2'; // 'ImageMagick';
        $gdLib = LOCALHOST ? 'imagik': 'GD2'; // 'ImageMagick';
        $gdLib = LOCALHOST ? 'GD2': 'GD2'; // 'ImageMagick';

        if(LOCALHOST):
          // 
          # http://subs.johns-jokes.com/testing-imagemagick/index.php
          // GD2 === WiredTree
          #$gdLib = LOCALHOST ? $ImageMagick : 'GD2'; // 'ImageMagick';
        # Create New Image  
          $pix =  $data['joke_img'];
          #$thumbnail = new Imagick($pix);
          $wid = 128; // 10*$i2;
          $hgt = (integer) ($wid *800/499); 
          #$thumbnail->thumbnailImage( $wid, 0 );
          $harpened = "Just resized";
          $toggle = false;
          $toggle = ! $toggle;
          if($toggle):
            #$thumbnail->enhanceImage();
           #$thumbnail->adaptiveSharpenImage(2,1);
            #$thumbnail->sharpenimage(1,1,Imagick::CHANNEL_ALL); //$radius, $sigma, $channel);
            $harpened = "Resized &amp; Sharpened";
          endif;
            $config['new_image'] = str_replace('.', '_thumb.', $config['new_image']);
            # http://localhost/afiles/images/douglas-adams-happy-towel-day.jpg
            $config['image_library']  = 'gd';
            $config['source_image']   = $data['joke_img'];
            # echo getcwd(); // /home/john/www
            $config['new_image']      = $config['test3'];
            $config['create_thumb']   = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']          = 128;
            $config['height']         = 128;
            # /home/john/www/asubs/subs-johns-jokes/thumb/douglas-adams-happy-towel-day_thumb.jpg

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
            echo $this->image_lib->display_errors();
        else:
          $gdLib = LOCALHOST ? $ImageMagick: 'GD2'; // 'ImageMagick';
          #$config['new_image']   = str_replace('.', '_thumb.', $config['new_image']);
          # /home/johns001/public_html/subs/thumb/africa/only-in-africa-01_thumb.jpg';
          $thumbnail = new Imagick($data['joke_img']);
          $wid = 128;
        # $hgt = 128; 
          if(1) {
            $thumbnail->thumbnailImage( $wid, 0 );
            $thumbnail->enhanceImage();
            #$thumbnail->sharpenimage(0,1,Imagick::CHANNEL_ALL); //$radius, $sigma, $channel);
           # $config['new_image'] = str_replace('.', '_thumb.', $config['new_image']);
            $config['new_image'] = str_replace(array('/africa', '/jem-dogs'), '',  $config['new_image']);
            

            // var/www/html/subs/thumb/douglas-adams-happy-towel-day_thumb.jpg':
            // No such file or directory @ error/blob.c/OpenBlob/2638 
            //  /var/www/html/a_joke_2015-06-09/application/controllers/C_xrl.php 300
            
            $ok = $thumbnail->writeImage($config['new_image']);
            if( ! $ok) {
              log_message('ERROR', 'THUMB PROBLEM: $config["new_image"] --> ' .$config['new_image'] );
            } 
          }//endif; 
          return $data;
        endif;

        // 'GD2'; === OK for WiredTree
        if( LOCALHOST ) :
            if(0){
              # WORKS OK
              $config['image_library']  = $gdLib; // 'GD'; // GD, GD2, ImageMagick
            }else{
              # ImageMagick YES
              $config['image_library']  = 'ImageMagick'; 
              $config['library_path']   = '/usr/bin/';  
            }
            $config['source_image']   = $data['joke_img'];
          # $config['resize']         = TRUE;
            $config['create_thumb']   = TRUE; // 
            $config['maintain_ratio'] = TRUE;
            $config['width']          = 128;
            $config['height']         = 128;
            $config['master_dim']     = 'width';
            $config['quality']        = 75;

          $this->load->library('image_lib');
          $this->image_lib->initialize($config);
          $this->image_lib->resize();

          if($this->image_lib->display_errors()){
            log_message('ERROR', __METHOD__. '() ' .$this->uri->uri_string() ); 
          }
        endif;

      if(10){ # DEBUGGINGs
        // /var/www/html/asubs/subs-johns-jokes/thumb/will-the-dollar-fall_thumb.jpg
        $config['new_image']      = '/var/www/html/KILL/'.$config['test3'];
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
      }
    endif; // has_picture

  return $data;
}##
*/

//===================================================================
  # CreeateThumb
  # Overwrite 
  # returns TRUE if and only if new thumb created
//===================================================================
public function CreateThumb( array $data=[], bool $useExisting=true)
:bool
{
  $result = false; // useExisting and NOT CREATED

  # Original Exists?
    if( file_exists($data['joke_img']) ):
      // $data['joke_img'] = /home/john/www/afiles/images/menopause-001.gif

    # UseExisting if and Only if file exists
      $aFullPath  = explode('/', $data['joke_img']);   
      $pThumb     =  PATH_THUMBS .$aFullPath[count($aFullPath)-1];
      if( $useExisting && file_exists($pThumb) ):
        // f red('Hunky Dory');

      else:  
        # Maybe SET MASTER_DIM according to aspectRatio
          defined('MAX_DIMENSION') ?: define('MAX_DIMENSION', 128);
          $config['width']            = MAX_DIMENSION;
          $config['height']           = MAX_DIMENSION;
          $config['source_image']     = $data['joke_img'];
  
          $aFullPath = explode('/', $data['joke_img']);   
          $config['new_image']        = PATH_THUMBS .$aFullPath[count($aFullPath)-1];
        # $config['resize']           = TRUE;
          $config['create_thumb']     = TRUE;
          $config['file_permissions'] = 0644; // 0777; // 0644
          $config['maintain_ratio']   = TRUE; // FALSE;
          $config['quality']          = 79; 
          
          # ImageMagick #if(01):
          # TO FIND LIBRARY_PATH
            # sudo type convert
            # result ==> convert is /usr/bin/convert 
           $config['image_library'] = 'imagemagick';//'ImageMagick';
           $config['library_path']  = '/usr/bin/convert';

          # Create Thumb
            $this->load->library('image_lib');
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
# fred($config, '$config');# die;
          # ERRORS to LOG?  
            if($this->image_lib->display_errors() ):
              # if(0):
                /*
                exec("/usr/bin/convert -version", $outByRef, $returnvalByRef);
                echo '<br><br><br><br><br><br><br><br><br><br><br>';
                */
              # endif;  
              $msg  = __METHOD__
                    . '() ' 
                    .$this->uri->uri_string() 
                    .' -> ' 
                    .$this->image_lib->display_errors()
                    . ' | ' 
                    . $config['image_library'];
              log_message('ERROR', $msg);
            else:
              $result = true;  
            endif;
      endif;// file_exists($thumbNail)  
    endif;// file_exists($fullPath)  

  return $result;
}//

//===================================================================
  # CreeateThumb
  # Overwrite 
  # returns TRUE if and only if new thumb created
//===================================================================
public function XXX_CreateThumb( array $data=[], bool $useExisting=true)
:bool
{
  $result = false; // useExisting and NOT CREATED

  # Original Exists?
  # /home/john/www/afiles/images/the-bottomless-pit.jpg  
    if( file_exists($data['joke_img']) ) {
      // $data['joke_img'] = /home/john/www/afiles/images/menopause-001.gif
      
      $aFullPath = explode('/', $data['joke_img']);   
      $pThumb =  PATH_THUMBS .$aFullPath[count($aFullPath)-1];

      # UseExisting if and Only if file exists
      if( 10 && $useExisting && file_exists($pThumb) ) {
        // f red('Hunky Dory');

      }else{  
        # Maybe SET MASTER_DIM according to aspectRatio
          defined('MAX_DIMENSION') ?: define('MAX_DIMENSION', 128);
          $config['width']            = MAX_DIMENSION;
          $config['height']           = MAX_DIMENSION;
          $config['source_image']     = $data['joke_img'];
          $aFullPath = explode('/', $data['joke_img']);   
          $config['new_image']        = PATH_THUMBS .$aFullPath[count($aFullPath)-1];
        # $config['resize']           = TRUE;
          $config['create_thumb']     = TRUE;
          $config['file_permissions'] = 0777; // 0644
          $config['maintain_ratio']   = TRUE; // FALSE;
          $config['quality']          = 84;
          if( isset($_GET['imagemagick']) ):
            $config['image_library']    = 'imagemagick';//'ImageMagick';
            $config['library_path']     = '/usr/bin/';
          endif;  

          # Create Thumb
            $this->load->library('image_lib');
          # $this->load->library('image_library' );

            $this->image_lib->initialize($config);

            $this->image_lib->resize();

          # ERRORS to LOG?  
            if($this->image_lib->display_errors()){
              $msg  = __METHOD__
                    . '() ' 
                    .$this->uri->uri_string() 
                    .' -> ' 
                    .$this->image_lib->display_errors();
              log_message('ERROR', __METHOD__. ' - ' .PATH_THUMBS .$fullPath[count($fullPath)-1]); 
            }else{
              $result = true;  
            }
      }#endif file_exists($thumbNail)  
    }#endif file_exists($fullPath)  

  return $result;
}//

//===================================================
public function updateIdx()
{
  $sql = <<< _____TMP
  UPDATE `jokes` 
  SET    
    `id`=[value-1], 
    `idx`=[value-2], 
  WHERE 1
_____TMP;

  $sql = <<< ____TMP
    UPDATE `jokes` 
    SET    `thumb`='y'
____TMP;

  $sql = <<< ____TMP
    UPDATE `jokes` 
    SET    `idx`=100000 - `id`
____TMP;

$result = $this->db->query($sql);

return $result;
}

}###
