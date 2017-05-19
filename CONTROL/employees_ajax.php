<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}


	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}

	$employees=Model::load("utilisateurs");

	$employees->read('utilisateur "#", nom "Nom", prenom "Prenom" , admin "admin", actif "actif" ',$rech );

	require_once('../VIEW/employees.php');
?>