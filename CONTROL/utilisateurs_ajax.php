<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}

	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}
	$radio = null;
	if(isset($_POST['RADIO'])) {
		$radio = $_POST['RADIO'];
	}

	$utilisateurs=Model::load("utilisateurs");

	$utilisateurs->read('utilisateur "#", code "Code", nom "Nom" , prenom "Prenom" , admin "Admin" , actif "Actif"', $rech);
	$utilisateurs->data = array_filter($utilisateurs->data, function($user) use($radio) {
		if($radio == 'admin') {
			return $user->Admin == '2';
		}
		elseif($radio == 'actif') {
			return $user->Actif == '2';
		}
		else {
			return true;
		}
	});

	require_once('../VIEW/utilisateurs.php');
?>