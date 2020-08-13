<?php DECLARE(STRICT_TYPES=1);

$github = 'https://github.com/codeigniter4/CodeIgniter4';
?>

  <div class="w88 mga">
    <h2 class="ooo">Source files: </h2>
    <p class="ooo"> &nbsp; </p>

    <dl>
      <dt> Special notes: </dt>
      <dd>
        <ol> 
          <li> Gitub <a href="<?= $github ?>">source files</a> </li>
          <li> 
            <code>
              DECLARE(STRICT_TYPES=1);
            </code>
            inserted into:
            <ul>
              <li> every PHP file with a single PHP occurrence </li>
              <li> PHP with multiple references requires manually insertion </li>
            </ul>
           </li>
          <li> NON Php files not modified </li>
        </ol>
      </dd>
    </dl>
    <p class="ooo"> &nbsp; </p>

    <dl>
      <dt> Path: app  </dt>
      <dd class="dib p42 bd1">  
        <pre class="frd"><?= "\r" .trim(file_get_contents('../README.md') ); ?></pre>
      </dd>
    </dl>
  </div>
  