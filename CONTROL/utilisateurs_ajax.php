<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}

	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}

	$utilisateurs=Model::load("utilisateurs");

	$utilisateurs->read('utilisateur "#", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"', $rech);
	/*
	$utilisateurs->read('utilisateur "User", code "Code ", nom "Name", prenom "FirstName", admin "Admin", actif "Active" ', $rech );
	`utilisateur`, `code`, `nom`, `prenom`, `admin`, `actif`
	*/

	require_once('../VIEW/utilisateurs.php');
?>