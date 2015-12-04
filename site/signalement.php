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
	<?php
		include "top.php";
	?>
    </nav>
    <div id="wrapper">
	<?php
		include "menu.php";
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
