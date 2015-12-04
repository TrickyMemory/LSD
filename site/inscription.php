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
    <div id="wrapper">
	<?php
		include "menu.php";
	?>

  </div>
  <div id="wrapper">
    <div class="container-fluid">
      <div class="row">
          <center>
            <h1>Page d'inscription</h1>
            <form role="form">
              <div class="form-group">
                <div class="col-lg-3">
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="utilisateur" onClick="toggle(this)" >Utilisateur</label>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="association" onClick="toggle(this)" >Association</label>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="ong" onClick="toggle(this)" >ONG</label>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div id="Login">
                    <div class="col-lg-5">
                      <label for="Identifiant">Identifiant:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="login" placeholder="Entrez votre identifiant">
                      <br>
                    </div>
                  </div>
                  <div id="Nom">
                    <div class="col-lg-5">
                      <label>Nom:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                      <br>
                    </div>
                  </div>
                  <div id="Prenom">
                    <div class="col-lg-5">
                      <label>Prenom:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom">
                      <br>
                    </div>
                  </div>
                  <div id="Email">
                    <div class="col-lg-5">
                      <label>Email:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                      <br>
                    </div>
                  </div>
                  <div id="Tel">
                    <div class="col-lg-5">
                      <label>Téléphone:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="tel" placeholder="Entrez votre numero de téléphone">
                      <br>
                    </div>
                  </div>
                  <div id="Role">
                    <div class="col-lg-5">
                      <label>Objet de l'asso:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="nom" placeholder="l'objet de votre asso...">
                      <br>
                    </div>
                  </div>
                  <div id="RNA">
                    <div class="col-lg-5">
                      <label>numéro RNA:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" id="rna" placeholder="Entrez le numéro RNA de votre asso">
                      <br>
                    </div>
                  </div>
                  <div id="mdp1">
                    <div class="col-lg-5">
                      <label>Mot de passe:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="password" class="form-control" id="mdp1">
                      <br>
                    </div>
                  </div>
                  <div id="mdp2">
                    <div class="col-lg-5">
                      <label for="pwd">Veuillez ressaisir votre mot de passe:</label>
                    </div>
                    <div class="col-lg-5">
                      <input type="password" class="form-control" id="mdp2">
                      <br>
                    </div>
                  </div>
                  <div id="submit">
                    <div class="col-lg-10">
                      <button type="submit" class="btn btn-default">Inscription</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </center>
      </div>
    </div>
  </div>
  <script>
    var login = document.getElementById('Login');
    login.style.visibility = 'visible';
    var nom = document.getElementById('Nom');
    nom.style.visibility = 'visible';
    var prenom = document.getElementById('Prenom');
    prenom.style.visibility = 'visible';
    var email = document.getElementById('Email');
    email.style.visibility = 'visible';
    var tel = document.getElementById('Tel');
    tel.style.visibility = 'visible';
    var role = document.getElementById('Role');
    role.style.visibility = 'hidden';
    var rna = document.getElementById('RNA');
    rna.style.visibility = 'hidden';
    var mdp1 = document.getElementById('mdp1');
    mdp1.style.visibility = 'visible';
    var mdp2 = document.getElementById('mdp2');
    mdp2.style.visibility = 'visible';
    function toggle(switchElement)
    {
      if (switchElement.value == 'utilisateur')
      {
        login.style.visibility = 'visible';
        nom.style.visibility = 'visible';
        prenom.style.visibility = 'visible';
        email.style.visibility = 'visible';
        tel.style.visibility = 'visible';
        role.style.visibility = 'hidden';
        rna.style.visibility = 'hidden';
        mdp1.style.visibility = 'visible';
        mdp2.style.visibility = 'visible';
      }
      else
      {
        login.style.visibility = 'visible';
        nom.style.visibility = 'visible';
        prenom.style.visibility = 'hidden';
        email.style.visibility = 'visible';
        tel.style.visibility = 'visible';
        role.style.visibility = 'visible';
        rna.style.visibility = 'visible';
        mdp1.style.visibility = 'visible';
        mdp2.style.visibility = 'visible';
      }
    }
  </script>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
</body>
</html>
