<?php
	require_once('../CONTROL/core.php');
	require_once('../VIEW/header.php');
	//require_once('../VIEW/left.php');
?>

<?php

	$rech = "";
	
	if(isset($_POST['ZONE_RECH_BOOKS'])){
		$rech =$_POST['ZONE_RECH_BOOKS'];
	}

	echo VIEW::rtv_Zone_Rech("../CONTROL/books.php","ZONE_RECH_BOOKS",$rech,"Rechercher un livre");

	require_once('../CONTROL/books_ajax.php');
	require_once('../VIEW/right.php');
?>

<?php
	require_once('../VIEW/footer.php');
?>