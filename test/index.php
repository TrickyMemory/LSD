<?php

	// On définit les 4 variables nécessaires à la connexion MySQL :
    include_once("Connexion.php");
    //si session ouverte rediriger vers la page d'accueil !
    if(isset($_SESSION['login']))
    	header("location: Accueil.php");

?>

<html>
<head>
	<title>Index</title>
</head>
<body>
<div id="login" class="left">

<?php 
if(isset($_POST['login']) && isset($_POST['passe']))
{
	$R="SELECT * FROM utilisateur WHERE login LIKE '%".$_POST['login']."%'";
	$mdp=$db->query($R);
    $test=$mdp->num_rows;
    $don=$mdp->fetch_assoc();

    

    if($test==0)
    	echo "<span class='msge'>Nom d'utilisateur ou mot de passe erroné...</span>";
    else{ 
    	// Le problème est la !!!
    	$pass=hash('sha512', hash('sha512', $_POST['passe'] ).$don['sel']);
	
	if( $don['mdp'] != $pass)
	{
		echo "<span class='msge'>Nom d'utilisateur ou mot de passe erroné...</span>";
	}
	else
	{   
        $_SESSION['ID']=$don['ID'];
        $_SESSION['login']=$don['login'];
        $_SESSION['role']=$don['role'];
     
		//	header('Location: Accueil.php');
}

}}
?>
<form method="post" action="index.php">
<input name="login" type="login" class="champs" placeholder="login" /> <br>
<input  name="passe" type="password" class="champs" placeholder="Mot de passe" /> <br>
<input type="submit" class="boutocon button" value="Connexion" /> 
</form>
</div>
</body>
</html>