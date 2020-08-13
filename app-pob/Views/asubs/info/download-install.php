<?php DECLARE(STRICT_TYPES=1);

?>


  <div class="w88 mga">
    <h2 class="ooo"> Moved to GitHub : </h2>
    <div class="spc"></div>

    <h2>
      <a href="https://github.com/John-Betong/ci4-strict">
        GitHub Source 
      </a>
    </h2>
    <div class="spc"></div>

    <dl>
      <dt> Installation: </dt>
      <dd>
        <ol>
          <li> download from Github </li>
          <li> create path to "http://localhost/<strong>ANY-NAME</strong>/" </li>
          <li class="fgr fwb"> make writable path "<strong>ANY-NAME</strong>/writable/"  </li>
          <li> Browse to "http://localhost/<strong>ANY-NAME/public_html/</strong>" </li>
          <li> experiment by adding your own script </li>
          <li> debug by viewing "<strong>ANY-NAME</strong>/writable/logs/log-TODAY.php" </li>
        </ol>
        Have fun :)
      </dd>  
    </dl>

    <div class="spc"></div>

    <dl>
      <dt> Download the zipped "system-strict" folder: </dt>
      <dd>
        <ol>
          <li> 
            <a href="zips/system-strict.tar.xz"> 
              Linux 
            </a>
            <sup> system-strict.tar.xz </sup>  
          </li>
          <li> 
            <a href="zips/system-strict.zip"> 
              Windows  
            </a>
            <sup> system-strict.zip </sup>
           </li>
          <li> Unzip into "ROOTPATH" </li>

          <li> Toggle the following path:
            <br>
            <b>File:</b> ./app/config/Paths.php 
            <br>
            <b>Line:</b> public $systemDirectory = __DIR__ . '/../../system-strict';
          </li>
          <li> 
            Add the following script to an existing file:
          </li>
          <li> 
            &lt;?PHP DECLARE(STRICT_TYPES=1);
          </li>
        </ol>
        Have fun :)
      </dd>  
    </dl>

  </div>
  
 