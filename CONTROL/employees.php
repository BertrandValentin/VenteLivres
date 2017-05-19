<?php
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	//require_once('../VIEW/left.php');
?>

<?php

	$rech = "";
	
	if(isset($_POST['ZONE_RECH_EMPLOYEES'])){
		$rech =$_POST['ZONE_RECH_EMPLOYEES'];
	}

	echo VIEW::rtv_Zone_Rech("../CONTROL/employees.php","ZONE_RECH_EMPLOYEES",$rech,"Rechercher un employ&eacute;");

	require_once('../CONTROL/employees_ajax.php');
	require_once('../VIEW/right.php');
?>

<?php
	require_once('../VIEW/footer.php');
?>