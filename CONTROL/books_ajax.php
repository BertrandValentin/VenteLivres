<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}


	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}

	$books=Model::load("livres");

	$books->read('LivreID "#", titre "Titre ", auteur "Auteur" , prix_unitaire "Prix", actif "actif" ',$rech );

	require_once('../VIEW/books.php');
?>