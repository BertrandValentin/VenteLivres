
<?php 
	require_once('../control/core.php');
	$employees=Model::load("utilisateurs");
	$employees->id[0]=$_POST['RECH_FIC'];
	$employees->read('utilisateur "#", nom "nom", prenom "prenom" , admin "admin" , actif "actif" ');
	echo view::rtv_fiche($employees);
 ?>
	