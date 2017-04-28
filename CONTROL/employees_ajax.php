<?php
	require_once('../CONTROL/core.php');
	
	if(!(isset($rech))){
		$rech='';
	}


	if(isset($_POST['RECH_AJAX'])){
		$rech = $_POST['RECH_AJAX'];
	}

	$employees=Model::load("employees");

	$employees->read('employeeID "#", Title "Titre ", LastName "Nom" , FirstName "Prénom"', $rech );

	require_once('../VIEW/employees.php');
?>