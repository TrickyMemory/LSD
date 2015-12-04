<?php
	function curPageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
?>

<?php
	$page = curPageName();
	echo '<div id="sidebar-wrapper">
		<ul class="sidebar-nav nav-pills nav-stacked" id="menu">';
	if($page=="accueil.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="accueil.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Accueil</a></li>';
	if($page=="incidents.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="signalement.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Incidents<span class="glyphicon glyphicon-chevron-down " aria-hidden="true"></span></a>
				<ul class="nav-pills nav-stacked" style="list-style-type:none;">';
	if($page=="signalement.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="signalement.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Signaler</a></li>';
	if($page=="rechercher.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="rechercher.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Rechercher</a>
		</li></ul></li>';
	if($page=="ong.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="ong.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>ONGs et Associations</a>
		</li>';
	if($page=="quefaire.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="quefaire.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Que faire en cas d\'urgence ?</a>
			</li>';
	if($page=="moncompte.php")
		echo '<li class="active">';
	else
		echo '<li>';
	echo '<a href="moncompte.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Mon Compte</a>
			</li>
		</ul>
    </div>';
?>
