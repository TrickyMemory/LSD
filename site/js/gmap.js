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
                var long=items.item(i).getElementsByTagName("long");
                var lat=items.item(i).getElementsByTagName("lat");

                var marker=new google.maps.Marker({
                  position:new google.maps.LatLng(lat,long),
                  });
                tabIncidents[i][0]=id;
                tabIncidents[i][1]=long;
                tabIncidents[i][2]=lat;
              }
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

        //génération des markers incidents
          ajax();
        }




        /*
        //event activé par clic d'un marker
        var infowindow = new google.maps.InfoWindow({
          content:aAfficher //a voir si il faut les ""
          });
        var latonclick;
        var longonclick;
        google.maps.event.addListener(marker, 'click', function(event) {
          latonclick=this.position.lat();
          longonclick=this.position.long();
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

              xhr.open("GET", "http://http://nuit-info.insa-cvl.fr/lsd/recupUnIncident.php?id="+tabIncidents[i][0], true);
              xhr.send(null);

              var docXML= xhr.responseXML;
              var aAfficher="";
              var items = docXML.getElementsByTagName("Incident");
              aAfficher+items.item(0).getElementsByTagName("id")+<br />;
              aAfficher+items.item(0).getElementsByTagName("datedecl")+<br />;
              aAfficher+items.item(0).getElementsByTagName("datedeb")+<br />;
              aAfficher+items.item(0).getElementsByTagName("datefin")+<br />;
              aAfficher+items.item(0).getElementsByTagName("nom")+<br />;
              aAfficher+items.item(0).getElementsByTagName("descr")+<br />;
              aAfficher+items.item(0).getElementsByTagName("type")+<br />;
              aAfficher+items.item(0).getElementsByTagName("long")+<br />;
              aAfficher+items.item(0).getElementsByTagName("lat")+<br />;
              aAfficher+items.item(0).getElementsByTagName("nombre_vote")+<br />;
              aAfficher+items.item(0).getElementsByTagName("activeOuCloture")+<br />;
              aAfficher+items.item(0).getElementsByTagName("enmaintenance")+<br />;
              infowindow.open(map,marker);
            }
          }
          });
        */


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
                icon:'pinyouhere.png',
                map: map
              });
          };


        google.maps.event.addDomListener(window, 'load', initialize);
