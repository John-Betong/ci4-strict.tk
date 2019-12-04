<?php DECLARE(STRICT_TYPES=1); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="assets/css/style-pof.css" media="screen">
    
    <title>CI4 Playground</title>
</head>
<body>
  <div class="header tac">
    <?php 
        $title = 'CI4 Playground'; 
        require APPPATH .'Views/incs/logo-001.php'; 
    ?>
  </div><!-- header -->

  <div class="nav">
    <?php require APPPATH .'Views/incs/menu-001.php' ?>
  </div>

  <div class="article tac">
    
    <h2 class="tal">
      DataBase name: <?= $dbName ?> 
    </h2>

    <table class="dib">
      <tr> 
        <td> Heroes   </td>
        <td> &nbsp;   </td>
        <td> Dungeons </td>
      </tr><tr>  
        <td> No Heroes found  </td>
        <td> &nbsp;   </td>
        <td> No Dungeons found </td>
     </tr> 
    </table>
    <p> &nbsp; </p>
    <p> <br><br><br><br><br> </p>


    <?php # echo $this->renderSection('content') ?>

    <p> &nbsp; </p>

    <div class="tac">
        <dl class="dib tal bd1">
        <dt class="bgd"> Stats: </dt>
        <dd> &nbsp; </dd>
        <dd> Page rendered in {elapsed_time} seconds.</dd>
        
        <dd>
            <p class="text-center">PHP <?= phpversion() ?></p>
        </dd>
        <dd class="col">
            <p class="text-right">Environment: <?= ENVIRONMENT ?></p>
        </dd>
    </dl>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>
    <p> <br><br><br><br><br> </p>


</div>

 <div class="footer tac p42">
  <?php require '/var/www/footer.php';
    # echo $footer; 
  ?> 
 </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
