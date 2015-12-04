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
          <table class="table">
              <thead>
                  <tr>
                      <th>Nom de l'incident</th>
                      <th>Type de l'incident</th>
                      <th>Date de l'incident</th>
                  </tr>
              </thead>

                <?php
                  //header('Content-Type: text/xml');

                  try
                  {
                  	$bdd = new PDO('mysql:host=localhost;dbname=lsd;charset=utf8', 'lsd', 'wFMs8rAEKfm4y5jp', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                  	//echo "Connexion reussie <br/>";
                  }
                  catch(PDOException $e)
                  {
                  	echo $e->getMessage();
                  }

                  $reponse=$bdd->prepare("SELECT nom,type,date_debut FROM Incident ORDER BY date_debut DESC LIMIT 0,10");
                  $reponse->execute();

                  echo "<tbody>\n";

                  while ($donnees=$reponse->fetch(PDO::FETCH_OBJ))
                  {
                      echo "<tr>";
                        echo "<td>".$donnees->nom."</td>\n";
                        echo "<td>".$donnees->type."</td>\n";
                        echo "<td>".$donnees->date_debut."</td>\n";
                      echo "</tr>";
                  }
                  ?>
                </tbody>
            </table>
        </body>
</html>
