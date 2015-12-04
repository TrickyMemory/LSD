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
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="1" onClick="toggle(this)" >Option 1</label>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="radio">
                    <label><input type="radio" name="optradio" value="2" onClick="toggle(this)" >Option 2</label>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div id="Inscription">
                    </br>
                    <h1>yolo</h1>
                  </div>
                </div>
              </div>
            </form>
          </center>
      </div>
    </div>
  </div>
  <script>
    var inscription = document.getElementById('Inscription');
    inscription.style.visibility = 'hidden';
    function toggle(switchElement)
    {
      if (switchElement.value == '1')
      {
          inscription.style.visibility = 'visible';
      }
      else
      {
          inscription.style.visibility = 'hidden';
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
