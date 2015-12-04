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
    <div class="wrapper"><!-- /api googleMap -->
      <div class="container-fluid">
        <script
        src="http://maps.googleapis.com/maps/api/js">
        </script>

        <!--script d'affichage de la map-->
        <script>
        var tabIncidents = new Array();
        var map;

        function ajax()
        {
            var xhr=null;

            if (window.XMLHttpRequest) {
                xhr = new XMLHttpRequest();
            }
            else if (window.ActiveXObject)
            {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
            //on définit l'appel de la fonction au retour serveur
            xhr.onreadystatechange = function() { alert_ajax(xhr); };

            //on appelle le fichier reponse.txt
            xhr.open("GET", "http://nuit-info.insa-cvl.fr/lsd/recupIncidents.php", true);
            xhr.send(null);
        }

        function alert_ajax(xhr)
        {
          if (xhr.readyState==4)
          {
              var docXML= xhr.responseXML;//pbl
              var items = docXML.getElementsByTagName("Incident");//pbl

              //on fait juste une boucle sur chaque element "donnee" trouvé
              for (i=0;i<items.length;i++)
              {
                var id=items.item(i).getElementsByTagName("id");
                alert(id[0].firstChild.data);
                id=id[0].firstChild.data;
                var long=items.item(i).getElementsByTagName("long");
                alert(long[0].firstChild.data);
                long=long[0].firstChild.data;
                var lat=items.item(i).getElementsByTagName("lat");
                alert(lat[0].firstChild.data);
                lat=lat[0].firstChild.data;

                var marker=new google.maps.Marker({
                  position:new google.maps.LatLng(lat,long),
                  });
                marker.setMap(map);
                tabIncidents[i]=new Array();
                tabIncidents[i][0]=id;
                tabIncidents[i][1]=long;
                tabIncidents[i][2]=lat;
              }
           }
        }

        function alert_ajax_UnElem(xhr)
        {
          if (xhr.readyState==4)
          {
              var docXML= xhr.responseXML;
              aAfficher="";
              var items = docXML.getElementsByTagName("Incident");
              aAfficher+items.item(0).getElementsByTagName("id")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("datedecl")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("datedeb")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("datefin")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("nom")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("descr")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("type")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("long")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("lat")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("nombre_vote")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("activeOuCloture")[0].firstChild.data+"<br />";
              aAfficher+items.item(0).getElementsByTagName("enmaintenance")[0].firstChild.data+"<br />";
              infowindow.open(map,lastmarker);
           }
        }

        function initialize()
        {
          //génération de la map
          var mapProp = {
            center:new google.maps.LatLng(48.8566140,2.3522219),
            zoom:5,
            streetViewControl:false,
            mapTypeId:google.maps.MapTypeId.TERRAIN
          };
          map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

          //position actuelle si la géoloc est activée (centrage possible)
            if (navigator.geolocation)
              var watchId = navigator.geolocation.watchPosition(successCallback,
                                        null,
                                        {enableHighAccuracy:true});
            else
              alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");

            function successCallback(position){
              //la ligne du dessous recentre la map sur la position géo en continu
              //  map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
                var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                  icon:'img/pinyouhere.png',
                  map: map
                });
            };
        //génération des markers incidents
          ajax();
        }


        var aAfficher="";//event activé par clic d'un marker
        var infowindow = new google.maps.InfoWindow({
          content:aAfficher //a voir si il faut les ""
          });
        var latonclick;
        var longonclick;
        var lastmarker;
        google.maps.event.addListener(marker, 'click', function(event) {
          latonclick=this.position.lat();
          longonclick=this.position.long();
          lastmarker = marker;
          for (var i = 0; i < items.length; i++) {
            if(tabIncidents[i][1]==longonclick&&tabIncidents[i][2]==latonclick)
            {
              var xhr=null;
              if (window.XMLHttpRequest) {
                  xhr = new XMLHttpRequest();
              }
              else if (window.ActiveXObject)
              {
                  xhr = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xhr.onreadystatechange = function() { alert_ajax_UnElem(xhr); };
              xhr.open("GET", "http://http://nuit-info.insa-cvl.fr/lsd/recupUnIncident.php?id="+tabIncidents[i][0], true);
              xhr.send(null);
            }
          }
          });



        //récup des incidents


        /*
        //init de la map
        function initialize() {
          var mapProp = {
            center:new google.maps.LatLng(48.8566140,2.3522219),
            zoom:5,
            streetViewControl:false,
            mapTypeId:google.maps.MapTypeId.TERRAIN
          };
          //génération de la map
          var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        */




        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        </head>

        <body>
        <div id="googleMap" style="width:800px;height:500px;"></div>
        </body>
        </html>
      </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
</body>
</html>
