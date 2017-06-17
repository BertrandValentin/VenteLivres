<?php
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	require_once('../VIEW/left.php');

	$rech = "";

	if(isset($_POST['ZONE_RECH_BOOKS'])){
		$rech =$_POST['ZONE_RECH_BOOKS'];
	}
	
	if(isset($_POST['RADIO'])) {
		$radio = $_POST['RADIO'];
	}

	echo View::rtv_Zone_Rech("../CONTROL/books.php", "ZONE_RECH_BOOKS", $rech, "Rechercher un livre");

	/*appel de la fonction qui genere les boutons -[oblsolete: require_once('../VIEW/books_buttons.php');]-*/
	$buttons = array('actif' => 'disponible'/*aucune correspondance dans la table , 'rented' => 'en location'*/);
	echo View::rtv_zone_radio_buttons("../CONTROL/books.php", "BUTTONS_RECH_BOOKS", $buttons);

	require_once('../CONTROL/books_ajax.php');
	require_once('../VIEW/right.php');

	require_once('../VIEW/footer.php');
?>