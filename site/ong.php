<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Les Sockets Diurnes</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/monStyle.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-default no-margin">
              <div class="navbar-header fixed-brand">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                  </button>
                  <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> Les sockets diurnes</a>
              </div><!-- navbar-header-->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                              <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                          </ul>
                          <ul class="nav pull-right">
                            <form class="navbar-form navbar-right">
                              <a href="connexion.html"><button class="btn btn-primary" type="submit">Se connecter</button></a>
                            </form>
                            <form class="navbar-form navbar-right">
                              <a href="inscription.html"><button class="btn btn-success" type="submit">S'inscrire</button></a>
                            </form>
                        </ul>
              </div><!-- bs-example-navbar-collapse-1 -->
  </nav>
  <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

              <li class="active">
                  <a href="accueil.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Accueil</a>
              </li>
              <li>
                  <a href="incidents.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Incidents   <span class="glyphicon glyphicon-chevron-down " aria-hidden="true"></span></a>
                  <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                      <li><a href="signalement.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Signaler</a></li>
                      <li><a href="rechercher.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Rechercher</a></li>

                  </ul>
              </li>

              <li>
                  <a href="ong.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>ONGs et Associations</a>
              </li>
              <li>
                  <a href="quefaire.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Que faire en cas d'urgence ?</a>
              </li>
              <li>
                  <a href="moncompte.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Mon Compte</a>
              </li>
          </ul>
      </div><!-- /#sidebar-wrapper -->

  </div>
  <div id="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <center>
          <img class="img-circle" width="300" height="300" alt="Generic placeholder image"
          src="img/pika.jpg"></img>
          </center>
        </div>
        <div class="col-lg-5">
          <center>
          <h1>ong/asso</h1>
          <h2>Type</h2>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <center><h3>Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
          <!--generer la liste des contacts disponible pour une asso-->
          <p>contact 1 : knqks.fr</p>
          <p>contact 2 : isn@dfskf.fr</p>
          </center>
        </div>
      </div>
    </div>
  </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
</body>
</html>
