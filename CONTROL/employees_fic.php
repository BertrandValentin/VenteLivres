<?php
	require_once('../CONTROL/core.php');
	require_once('../VIEW/top.php');
	require_once('../VIEW/left.php');

	$employees=Model::load("utilisateurs");
	$employees->id[0]=$_POST['RECH_FIC'];
	$employees->read('utilisateur "User", code "Code ", nom "Name", prenom "FirstName", admin "Admin", actif "Active" ');
	echo $employees->rtv_fiche($employees);

	require_once('../VIEW/right.php');
	require_once('../VIEW/footer.php');
?>