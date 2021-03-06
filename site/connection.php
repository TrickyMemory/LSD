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

  </div>
  <div id="wrapper">
    <div class="container-fluid">
      <div class="row">
          <center>
            <h1>Page de connexion</h1>
            <form role="form">
              <div class="form-group">
                <div class="col-lg-5">
                  <label for="Identifiant">Nom:</label>
                </div>
                <div class="col-lg-5">
                  <input type="text" class="form-control" id="nom" placeholder="Entrez votre identifiant">
                  <br>
                </div>
                <div class="col-lg-5">
                  <label for="pwd">Password:</label>
                </div>
                <div class="col-lg-5">
                  <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mdp">
                  <br>
                </div>
                <div class="col-lg-10">
                  <button type="submit" class="btn btn-default">Connexion</button>
                </div>
              </div>
            </form>
          </center>
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
