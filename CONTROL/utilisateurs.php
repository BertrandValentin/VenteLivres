<?php
	/*haut de page + zone de recherche*/
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	require_once('../VIEW/left.php');
	/*si javascript est désactivé, la page continue de fonctionner*/
	$rech = "";
	if(isset($_POST['ZONE_RECH_USERS'])){
		$rech =$_POST['ZONE_RECH_USERS'];
	}
	/*
		le retrieve_zone_rech renvoie l'html de la barre recherche
		$rech= valeur par défaut retrouvée dans la zone
		placeholder
	*/
	echo VIEW::rtv_Zone_Rech("../CONTROL/utilisateurs.php", "ZONE_RECH_USERS", $rech, "Rechercher un utilisateur");
	require_once('../CONTROL/utilisateurs_ajax.php');

	require_once('../VIEW/right.php');
	require_once('../VIEW/footer.php');
?>