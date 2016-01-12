<?php 
    session_start();
    require_once(__DIR__.'/config/db.php');
    $nbJeux = 0;



 ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
            
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inversed">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">GAMELOC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">Chercher</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Louer</a></li>
                <li><a href="#" >Panier <i class="glyphicon glyphicon-shopping-cart" ></i> <?php echo $nbJeux; ?> </a></li>           
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" id="header">
         <?php if (isset($_SESSION['loginErrors']['login'])) :?>
            <div class="alert alert-info" >
                <?php echo $_SESSION['loginErrors']['login']; ?>
                <?php unset($_SESSION['loginErrors']['login']); ?>
            </div>
        <?php endif; ?>
       

        <div id="imgLogo">
          <img src="img/logo.png">  
        </div>

        <h1 id="gameloc">Gameloc</h1>

        <p>Bienvenue dans la plus grande communauté de gamers sur Paris !</p>
        <p>Nous mettons les gamers en relation pour qu'ils puissent s'échanger les jeux vidéos de n'importe quel<br>
          plateforme <br>
          (PC,Xbox,PS4)
        </p>
        <div id="buttons">
        <p>
            <a class="btn btn-success btn-lg" href="inscription.php" role="button">Inscription</a>
            <a class="btn btn-info btn-lg" href="connexion.php" role="button">Connexion</a>
        </p>
        </div>

      </div>
    </div>

    
      

      

      <footer>
        <p>&copy; Mohand, Nadia , Bilel</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
