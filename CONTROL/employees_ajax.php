<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}


	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}

	$employees=Model::load("utilisateurs");

<<<<<<< HEAD
	$employees->read('utilisateur "#", nom "Nom", prenom "Prenom" , admin "admin", actif "actif" ',$rech );
=======
	$employees->read('utilisateur "User", code "Code ", nom "Name", prenom "FirstName", admin "Admin", actif "Active" ', $rech );
	//`utilisateur`, `code`, `nom`, `prenom`, `admin`, `actif`
>>>>>>> origin/master

	require_once('../VIEW/employees.php');
?>