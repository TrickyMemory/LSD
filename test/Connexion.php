<?php
	session_start();

	// On définit les 4 variables nécessaires à la connexion MySQL :
	$hostname = "localhost";
	$user     = "root";
	$password = "";
	$nom_base_donnees = "lsd";

    @$db=new mysqli($hostname,$user,$password,$nom_base_donnees);


?>

