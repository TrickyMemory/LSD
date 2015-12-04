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

              <li>
                  <a href="accueil.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Accueil</a>
              </li>
              <li>
                  <a href="incidents.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Incidents   <span class="glyphicon glyphicon-chevron-down " aria-hidden="true"></span></a>
                  <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                      <li  class="active"><a href="signalement.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Signaler</a></li>
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
<?php
	include 'dep/gmap.php';
?>
<form action="" method="post">

        <center><h3>Ajouter un incident<h3></center>
<div class="col-lg-1"></div>
<div class="col-lg-11">
  <div class="row">
    <div class="col-lg-3">
	 <div class="form-group">
 		 <label for="usr">Nom de l'incident :</label><br />
  		<input type="text" class="form-control" id="usr">
	</div>
</div>
</div>

<div class="row">
  <div class="col-lg-5">
	<div class="form-group">
 		 <label for="comment">Description :</label><br />
  		<textarea class="form-control" rows="5" id="comment"></textarea>
	</div>
</div>
</div>

	Donnez le type d'incident qui correspond au vôtre  :<br />
        <input type="radio" name="typeIncident" value="seisme" id="seisme" /> <label for="seisme">Seisme</label><br />
        <input type="radio" name="typeIncident" value="tsunami" id="tsunami" /> <label for="tsunami">Tsunami</label><br />
        <input type="radio" name="typeIncident" value="accidentIndustriel" id="accidentIndustriel"  /> <label for="Accident industriel">Accident industriel</label>(ex : fuite d'une centrale nucléaire )<br />
        <input type="radio" name="vigipirate" value="vigipirate" id="vigipirate" /> <label for="vigipirate">Vigipirate</label> (ex : attentat)<br />
        <input type="radio" name="typeIncident" value="criseEcologique" id="criseEcologique" /> <label for="Crise écologique">Crise écologique</label> (ex : pic de pollution)<br />


 <input type="text" name="dateIncident" placeholder="JJ/MM/AAAA"><br />
 <input type="submit" value="Envoyer">
</div>
