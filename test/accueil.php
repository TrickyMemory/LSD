<?php
include_once("Connexion.php");

?>

<html>
<head>
	<title>Accueil</title>
</head>
<body>
 <?php echo 'Bonjour '.$_SESSION['login']; ?>
</body>
</html>