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

	$books=Model::load("livres");

	$books->read('LivreID "#", titre "Titre", auteur "Auteur" , prix_unitaire "Prix" , actif "Actif"',$rech );
	$books->data = array_filter($books->data, function($user) use($radio) {
		if($radio == 'actif') {
			return $user->Actif == '2';
		}
		else {
			return true;
		}
	});

	require_once('../VIEW/books.php');
?>