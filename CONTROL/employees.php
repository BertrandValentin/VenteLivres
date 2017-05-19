<?php
	/*
	 * haut de page + zone de recherche
	*/

	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	//require_once('../VIEW/left.php');

<<<<<<< HEAD
<?php

	$rech = "";
	
=======
	//si javascript est désactivé, la page continue de fonctionner
	$rech = "";

>>>>>>> origin/master
	if(isset($_POST['ZONE_RECH_EMPLOYEES'])){
		$rech =$_POST['ZONE_RECH_EMPLOYEES'];
	}

	//le retrieve_zone_rech renvoie l'html de la barre recherche
	// *
	// *
	// * $rech= valeur par défaut retrouvée dans la zone
	// * placeholder
	echo VIEW::rtv_Zone_Rech("../CONTROL/employees.php","ZONE_RECH_EMPLOYEES",$rech,"Rechercher un employ&eacute;");
	require_once('../control/employees_ajax.php');

	require_once('../CONTROL/employees_ajax.php');
	require_once('../VIEW/right.php');
	
	require_once('../VIEW/footer.php');
?>