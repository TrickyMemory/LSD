<?php
header('Content-Type: text/xml'); 
echo "<?xml version=\"1.0\"?>\n";
echo "<exemple>\n";
 

try{
	$bdd = new PDO('mysql:host=nuit-info.insa-cvl.fr;dbname=lsd;charset=utf8', 'lsd', 'wFMs8rAEKfm4y5jp', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	//echo "Connexion reussie <br/>";
}
catch(PDOException $e){
	echo $e->getMessage();
}
$reponse = $bdd->query('SELECT id, longitude, lattitude FROM Incident');

while ($donnees = $reponse->fetch(PDO::FETCH_OBJ))
{
	echo "<Incident>\n".
		'<id>'.$donnees->id."</id>\n".
		'<long>'.$donnees->longitude."</long>\n".
		'<lat>'.$donnees->lattitude."</lat>\n".
	"</Incident>\n";
}
 
?>
