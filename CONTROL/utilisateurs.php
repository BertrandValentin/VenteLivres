<?php
	/*haut de page + zone de recherche*/
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	require_once('../VIEW/left.php');
	/*si javascript est desactive, la page continue de fonctionner*/
	$rech = "";
	if(isset($_POST['ZONE_RECH_USERS'])){
		$rech =$_POST['ZONE_RECH_USERS'];
	}
	
	if(isset($_POST['RADIO'])) {
		$radio = $_POST['RADIO'];
	}
	/*
		le retrieve_zone_rech renvoie le html de la barre recherche
		$rech= valeur par défaut retrouvée dans la zone
		placeholder
	*/
	echo VIEW::rtv_Zone_Rech("../CONTROL/utilisateurs.php", "ZONE_RECH_USERS", $rech, "Rechercher un utilisateur");
	/*appel de la fonction qui ajoute les boutons*/
	$buttons = array('admin' => 'admin', 'actif' => 'actif');
	echo View::rtv_zone_radio_buttons("../CONTROL/utilisateurs.php", "BUTTONS_RECH_USERS", $buttons);

	require_once('../CONTROL/utilisateurs_ajax.php');

	require_once('../VIEW/right.php');
	require_once('../VIEW/footer.php');
?>