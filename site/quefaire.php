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
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-1">
                  
                </div>
              <div class="col-lg-11">
                  <h1>Connaître les bons gestes</h1>
                  <h4><i>En cas de crise, il est important d'agir selon les bons gestes pour ne pas se mettre en danger, ou mettre en danger autrui.
                  Trouvez ici les gestes de base à respecter pour la sécurité de tous. </i></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-11">
                  <h3>Généralités</h3>
                  <div class="row">
                    <div class="col-lg-1">
                        <img class="img-circle" width="90" height="90" src="img/generalite.jpg" alt="1"/>
                      </div>
                    <div class="col-lg-11">
                      <ul>
                       <li>Gardez votre calme.</li>
                       <li>Prevenir, écouter et suivre les consignes des autorités.</li>
                       <li>Evaluer les dégâts, les points dangereux et s'en éloigner.</li>
                       <li>Apporter, dans la mesure du possible, les premiers secours aux blessés.</li>
                      </ul>
                    </div>
                  </div>

                  <h3>Séismes  <small><span span id='downSeismes' class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick=';$("#downSeismes").addClass("hidden");$("#upSeismes").removeClass("hidden");$("#Seismes").removeClass("hidden");'></span><span span id='upSeismes' class="glyphicon glyphicon-chevron-up hidden" aria-hidden="true" onclick='$("#upSeismes").addClass("hidden");$("#Seismes").addClass("hidden");$("#downSeismes").removeClass("hidden");'>
</span></small></h3>
                  <div class="row hidden" id='Seismes'>
                      
                    <div class="col-lg-1">
                        <br><br>
                        <img class="img-circle" width="90" height="90" src="img/seisme.png" alt="1"/>
                      </div>
                        
                    <div class="col-lg-11">
                      <h5><b>Les bons gestes :</b></h5>
                      <ul>
                       <li>Se mettre sous un mur, une colonne porteuse ou sous des meubles solides.</li>
                       <li>S'éloigner des fenêtres, des objets et meubles instables.</li>
                       <li>En voiture, s'arrêter de rouler.</li>
                       <li>À l'extérieur, s'éloigner des fils électriques et des éléments pouvant s'effondrer (toitures, ponts, corniches,...)</li>
                       <li>Après le séisme, vérifier l'eau, le gaz, et l'électricité. En cas de fuite, couper les alimentations, aérer les lieux et en sortir.</li>
                      </ul>
                      <b>Les conséquences possibles :</b> Destruction de bâtiments, tsunami, accidents industriels,...
                    </div>
                  </div>

                  <h3>Crises liées à l'eau  <small><span span id='downEaux' class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick=';$("#downEaux").addClass("hidden");$("#upEaux").removeClass("hidden");$("#Eaux").removeClass("hidden");'></span><span span id='upEaux' class="glyphicon glyphicon-chevron-up hidden" aria-hidden="true" onclick='$("#upEaux").addClass("hidden");$("#Eaux").addClass("hidden");$("#downEaux").removeClass("hidden");'>
</span></small></h3>
                  <div class="row hidden" id='Eaux'>
                    <div class="col-lg-1">
                        <br>
                            <img class="img-circle" width="90" height="90" src="img/tsunami" alt="1"/>
                      </div>
                    <div class="col-lg-11">
                      <h5><b>Les bons gestes :</b></h5>
                      <ul>
                       <li>Se mettre en hauteur.</li>
                       <li>Ne pas utiliser les équipements électriques.</li>
                       <li>Mettre les produits toxiques en hauteur.</li>
                       <li>Ne pas sortir. </li>
                      </ul>
                      <b>Les conséquences possibles :</b> Destruction de bâtiments, inondations, tsunamis, accidents industriels,...
                    </div>
                  </div>

                  <h3>Accidents industriels  <small><span span id='downIndus' class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick=';$("#downIndus").addClass("hidden");$("#upIndus").removeClass("hidden");$("#Indus").removeClass("hidden");'></span><span span id='upIndus' class="glyphicon glyphicon-chevron-up hidden" aria-hidden="true" onclick='$("#upIndus").addClass("hidden");$("#Indus").addClass("hidden");$("#downIndus").removeClass("hidden");'>
</span></small></h3>
                  <div class="row hidden" id='Indus'>
                    <div class="col-lg-1">
                        <br><img class="img-circle" width="90" height="90" src="img/industriel.jpg" alt="1"/>
                      </div>
                    <div class="col-lg-11">
                      <h5><b>Les bons gestes :</b></h5>
                      <ul>
                       <li>S'abriter dans un bâtiment, portes et fenêtres clôtres.</li>
                       <li>Arrêter les ventilations.</li>
                      </ul>
                      <b>Les conséquences possibles :</b> Empoisonnement, contamination, irradiation, calcination,...
                    </div>
                  </div>

                  <h3>Vigipirates  <small><span span id='downVigip' class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick=';$("#downVigip").addClass("hidden");$("#upVigip").removeClass("hidden");$("#Vigip").removeClass("hidden");'></span><span span id='upVigip' class="glyphicon glyphicon-chevron-up hidden" aria-hidden="true" onclick='$("#upVigip").addClass("hidden");$("#Vigip").addClass("hidden");$("#downVigip").removeClass("hidden");'>
</span></small></h3>
                  <div class="row hidden" id='Vigip'>
                    <div class="col-lg-1">
                        <br><img class="img-circle" width="90" height="90" src="img/vigipirate.png" alt="1"/>
                      </div>
                    <div class="col-lg-11">
                      <h5><b>Les bons gestes :</b></h5>
                      <ul>
                       <li>Se mettre à l'abri, s'éloigner de la zone sinistrée.</li>
                       <li>Appeler les secours uniquement en cas de besoin.</li>
                       <li>Signaler tous les individus ou objets suspects. </li>
                      </ul>
                    </div>
                  </div>
                <br>
                  <div class="row">
            <h5><b>Les produits indispensables</b></h5>
            <div class="col-lg-4">
              <img id='1a' src="lien"></img>
         <center><a id="lia1" href =""><button type="button" class="btn btn-default" onclick="PushToCart_1()" href="">Acheter</button></a></center>
          </div>
          <div class="col-lg-4">
                <img id='2a' src="lien"></img>
        <center><a id="lia2" href =""><button type="button" class="btn btn-default" onclick="PushToCart_2()" href="">Acheter</button></a></center>
        </div>
        <div class="col-lg_4">
                <img id='3a' src="lien"></img>
        <center> <a id="lia3" href=""><button type="button" class="btn btn-default" onclick="PushToCart_3()" href="">Acheter</button></a></center>
      </div>
        
          
       
      </div>
                  
                  
                  
                  <br>
              </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
    <script src="js/cdiscount_final.js"></script>
</body>
</html>
