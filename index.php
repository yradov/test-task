<?php
require_once 'functions/funcs.php';
$content = ($_GET)?$_GET['task']:'html';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Тестовое задание</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                  <a class="navbar-brand">Тестовое задание</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right menu">
                  <li><a href="html" class="task">HTML + CSS</a></li>
                  <li><a href="js-jq" class="task">Javascript</a></li>
                  <li><a href="mysql" class="task">MySQL</a></li>
                  <li><a href="php" class="task">PHP</a></li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
<!--**************КОНТЕНТ***************************************-->
  <div class="container main">
      <div class="row content">
          <?php //print_arr($content);?>
              <h2>Для просмотра результата выполнения выберите нужный пункт меню. </h2>
              <?php require_once '_content/'.$content.'.include.php'; ?>
      </div>
  </div>
<!--***********************************************************-->
  <footer>
      <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
          <div class="container footer">
              &copy; <?=date('Y'); ?> Радов Юрий
          </div>
      </nav>
  </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
     <script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my_scripts.js"></script>
  <script>

  </script>
  </body>
</html>