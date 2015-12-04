<?php include_once('Connexion.php');
?>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<?php 
        //génération du sel..
	 $chaine = 'AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn0123456789';
	$nb_car=15;
        $nb_lettres = strlen($chaine) - 1;
        // Génération d'une chaine aléatoire
        $salt = '';
        for($i=0; $i < $nb_car; $i++)
        {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $salt .= $car;
        }
		?>
<form method="post" action="inscription.php">
<label for="nom">Nom</label><br>
<input type="text" id="nom" name="nom" class="" placeholder="Nom" />
<input type="text" id="prenom" name="prenom" class="" placeholder="Prénom" /><br><br>

<label for="login">login*</label><br>
<input type="text" id="login" name="login" class="" placeholder="Votre login " /><br><br>

<label for="passe">Mot de passe*</label><br>
<input type="password" name="passe" id="passe" class="" placeholder="Mot de passe " /><br><br>

<label for="passe2">Confirmez votre mot de passe*</label><br>
<input type="password" name="passe2" id="passe2" class="" placeholder="Mot de passe " /><br>
<label for="mail">mail</label><br>
<input type="email" name="mail" placeholder="exemple@exemple.com"/><br>
<label for="tel">tel</label><br>
<input type="text" name="tel" id="tel"/>
<br>
<select id="selection" name="role" class="">
<option>Je suis...*</option>
<option value=1>User</option>
<option value=2>Assoc</option>
<option value=3>ONG</option>
</select><br><br>
<input type="FILE" name="avatar" value="avatar"/>
<input type="submit" class="button" value="Inscription !"/>
<?php
if(isset($_POST['login']))
{
	$nom=trim($_POST['nom']);
	$prenom=trim($_POST['prenom']);
	$login=trim($_POST['login']);
	$mdp=trim($_POST['passe']);
	$mdp2=trim($_POST['passe2']);
	$role=trim($_POST['role']);
	$mail=trim($_POST['mail']);
	$tel=trim($_POST['tel']);
	//$avatar=trim($_FILES['avatar']['name']);


	if((!$login) || (!$mdp)|| (!$mdp2) || (!$role)){
	echo '<br><span id="colorierRED">* Veuillez saisir les champs obligatoires !</span>';}

else{

	$requete= "SELECT login FROM utilisateur WHERE login='".$login."'";
    $deja=$db->query($requete);
	$test=$deja->num_rows;

	if ($test>0){
	    echo '<br><span id="colorierRED">Ce login est déja utilisé !</span>';

	if($mdp != $mdp2)
	    echo '<br><span id="colorierRED">Les mots de passe ne sont pas les mêmes</span>';

	} 
	else {
			if($mdp != $mdp2)
	{
	    echo '<br><span id="colorierRED">Les mots de passe ne sont pas les mêmes</span>';

	}
	else {
         $pass=hash('sha512', hash('sha512', 'test').$salt);
		
		$sql ="INSERT INTO `lsd`.`utilisateur` (`ID`, `avatar`, `login`, `nom`, `prenom`, `mdp`, `sel`, `mail`, `tel`, `role`) VALUES (NULL,NULL,'".$login."','".$nom."','".$prenom."','".$pass."', '".$salt."', '".$mail."', '".$tel."','".$role."')";
    $db->query($sql);
    echo '<br><span id="colorierRED">Inscription réussie.<br><a href="index.php"> Cliquez ici pour vous rendre à la page daccueil</span></a>';
	}

	}}
}?>
</form>
</body>
</html>