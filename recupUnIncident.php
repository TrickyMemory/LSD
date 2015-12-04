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


$reponse = $bdd->prepare("SELECT * FROM Incident WHERE id = :a");
$reponse->bindParam(":a",$_GET['id']);
$reponse->execute();
while ($donnees = $reponse->fetch(PDO::FETCH_OBJ))
{
	echo "<Incident>\n".
		'<id>'.$donnees->id."</id>\n".
		'<datedecl>'.$donnees->date_decl."</datedecl>\n".
		'<datedeb>'.$donnees->date_debut."</datedeb>\n".
		'<datefin>'.$donnees->date_fin."</datefin>\n".
		'<nom>'.$donnees->nom."</nom>\n".
		'<descr>'.$donnees->descr."</descr>\n".
		'<type>'.$donnees->type."</type>\n".
		'<long>'.$donnees->longitude."</long>\n".
		'<lat>'.$donnees->lattitude."</lat>\n".
		'<nombre_vote>'.$donnees->nombre_vote."</nombre_vote>\n".
		'<activeOuCloture>'.$donnees->activeOuCloture."</activeOuCloture>\n".
		'<enmaintenance>'.$donnees->enmaintenance."</enmaintenance>\n".
	"</Incident>\n";
}

?>
